<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Students;
use App\Group;
use App\Tasks;
use App\Progress;
use Validator;

class StudentsController extends Controller
{
    public function signup (Request $request) 
    {
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
            return view('Top');
        }
    }

    public function signin (Request $request) 
    {
        $inputs = $request->all();
        //rules
        $rules = [
            'email'=>'required|email',
            'password'=>'required',
        ];
        //message
        $messages = [
            'email.required' => 'emailは必須です',
            'password.required' => 'パスワードは必須です',
        ];
        //validation
        $validation = Validator::make($inputs, $rules, $messages);
        //if fails
        if($validation->fails()){
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }else{
            $email = $request->input('email');
            $pass = $request->input('password');
            $auth = Students::where('email', '=', $email)->first();
    
            //if fails
    
            if($pass == $auth['password']){
                return $this->ses_put($request, $auth->id);
            }else{
                $error = 'パスワードが正しくありません';
                return view('signin', compact('error'));
            }
        }
    }

    public function ses_put (Request $request, $id) {
        $request->session()->put('user', $id);

        $user = $request->session()->get('user');
        $group_ids = [];
        $group_names = [];
        $parcents = [];
        $progress_tasks_edit = [];
        $student_id = $request->student_id;

        $sub = Progress::select('tasks_id', 'check_flag')
        ->where('student_id', '=', ':student_id')
        ->where('check_flag', '=', ':check_flag')
        ->toSql();

        $progress_tasks = Tasks::select(DB::raw('group_id, group.name as group_name, count(*) as tasks_count, count(progress.check_flag) as progress_count'))
        ->join('Group', 'group.id', '=', 'tasks.group_id')
        ->leftJoin(DB::raw('('.$sub.') AS progress'), 'progress.tasks_id', '=', 'tasks.id')
        ->groupBy('tasks.group_id')
        ->setBindings([':student_id'=>$user, ':check_flag'=>'1'])
        ->get();

        foreach ($progress_tasks as $progress_task){
            array_push($group_ids, $progress_task['group_id']);
            array_push($group_names, $progress_task['group_name']);
            $parsent = ($progress_task['progress_count']/$progress_task['tasks_count'])*100;
            array_push($parcents, $parsent);

            $progress_tasks_edit['group_ids'] = $group_ids;
            $progress_tasks_edit['group_names'] = $group_names;
            $progress_tasks_edit['parcents'] = $parcents;
        }

        return view('mypage', compact('progress_tasks_edit'));
        // return view('mypage');
    }

    public function ses_del (Request $request, $id) {
        $request->session()->forget('id');
        // return view('mypage');
    }
}
