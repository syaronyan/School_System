<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Students;
use App\Tasks;
use App\Progress;
use Validator;

class AdminController extends Controller
{
    //サインイン画面へ遷移
    public function index()
    {
        return view('signin');
    }

    public function admin (Request $request) 
    {
        $user = $request->session()->get('user');
        if ($user == 1 || $user == 2 || $user == 3){
            return view('admin');
        }else{
            return $this->index();
        }   
    }
    public function students (Request $request) 
    {
        $user = $request->session()->get('user');
        if ($user == 1 || $user == 2 || $user == 3){
            // $ids = [];
            // $names = [];
            // $emails = [];
            // $ent_dates = [];
            // $created_ats = [];
            // $updated_ats = [];
            // $student = [];
            $all_students = Students::select('id', 'name', 'email','course', 'ent_date', 'created_at', 'updated_at')
            ->get();
            // foreach ($all_students as $students){
            //     $ent_date = explode(" ", $students['ent_date'])[0]; 
            //     $created_at = explode(" ", $students['created_at']); 
            //     $updated_at = explode(" ", $students['updated_at']); 
            //     array_push($ids, $students['id']);
            //     array_push($names, $students['name']);
            //     array_push($emails, $students['email']);
            //     array_push($ent_dates, $ent_date);
            //     array_push($created_ats, $created_at);
            //     array_push($updated_ats, $updated_at);
                
            //     $student['id'] = $ids;
            //     $student['name'] = $names;
            //     $student['email'] = $emails;
            //     $student['ent_date'] = $ent_dates;
            //     $student['created_at'] = $created_ats;
            //     $student['updated_at'] = $updated_ats;
            // }
            return view('admin/students', compact('all_students'));
        }else{
            return $this->index();
        }   
    }

    public function add (Request $request) {
        $user = $request->session()->get('user');
        if ($user == 1 || $user == 2 || $user == 3){
            return view('admin/signup');
        }else{
            return $this->index();
        } 
    }

    public function signup (Request $request) {
    $inputs = $request->all();
        //rules
        $rules = [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'password_confirmation' => 'required',
        ];
        //message
        $messages = [
            'name.required' => '名前は必須です',
            'email.required' => 'emailは必須です',
            'password.required' => 'パスワードは必須です',
            'password.confirmed' => 'もう一度パスワード入力してください',
        ];
        //validation
        $validation = Validator::make($inputs, $rules, $messages);

        //if fails
        if($validation->fails()){
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }else{
            Students::create($request->all());
            return view('admin');
        }
    }
    public function user (Request $request,$id) 
    {
        $user = $request->session()->get('user');
        if ($user == 1 || $user == 2 || $user == 3){
            $student = Students::select('id', 'name', 'email', 'ent_date','course', 'created_at', 'updated_at', 'status')
            ->where('id', '=', $id)
            ->first();

            $group_ids = [];
            $group_names = [];
            $parcents = [];
            $progress_tasks_edit = [];
            $student_id = $request->student_id;
            
            //サブクエリ
            $sub = Progress::select('tasks_id', 'check_flag')
            ->where('student_id', '=', ':student_id')
            ->where('check_flag', '=', ':check_flag')
            ->toSql();

            //進捗管理のデータ取得
            $progress_tasks = Tasks::select(DB::raw('group_id, group.name as group_name, count(*) as tasks_count, count(progress.check_flag) as progress_count'))
            ->join('group', 'group.id', '=', 'tasks.group_id')
            ->leftJoin(DB::raw('('.$sub.') AS progress'), 'progress.tasks_id', '=', 'tasks.id')
            ->groupBy('tasks.group_id')
            ->setBindings([':student_id'=>$id, ':check_flag'=>'1'])
            ->get();

            //上記データを編集
            foreach ($progress_tasks as $progress_task){
                array_push($group_ids, $progress_task['group_id']);
                array_push($group_names, $progress_task['group_name']);
                $parsent = round(($progress_task['progress_count']/$progress_task['tasks_count'])*100);
                array_push($parcents, $parsent);

                $progress_tasks_edit['group_ids'] = $group_ids;
                $progress_tasks_edit['group_names'] = $group_names;
                $progress_tasks_edit['parcents'] = $parcents;
            }

            return view('admin/student_progress', compact('student', 'progress_tasks_edit'));
        }else{
            return $this->index();
        }   
    }
    public function edit (Request $request, $id) 
    {
        $user = $request->session()->get('user');
        if ($user == 1 || $user == 2 || $user == 3){
            Students::where('id', '=', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'ent_date' => $request->ent_date,
                'course' => $request->course
            ]);
            $student = Students::select('id', 'name', 'email', 'ent_date','course', 'created_at', 'updated_at', 'status')
            ->where('id', '=', $id)
            ->first();
            return view('admin/student_progress', compact('student'));
        }else{
            return $this->index();
        }   
    }

    public function graduate (Request $request) {
        $student_id = $request->student_id;
        $check_flag = $request->check_flag;

        if ($check_flag == 1){
            Students::where('id', '=', $student_id)
            ->update([
                'status' => 1
                ]);
        }
        elseif ($check_flag == 0) {
            Students::where('id', '=', $student_id)
            ->update([
                'status' => 0
            ]);
        }
    }
}
