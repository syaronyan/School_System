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
    //サインイン画面へ遷移
    public function index()
    {
        return view('signin');
    }

    public function signup (Request $request) 
    {
        $user = $request->session()->get('user');
        if (!empty($user)){
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
                return view('signup');
            }
        }else{
            return $this->index();
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
        if (!empty($user)){
            $group_ids = [];
            $group_names = [];
            $group_imgs = [];
            $parcents = [];
            $progress_tasks_edit = [];
            $student_id = $request->student_id;

            //サブクエリ
            $sub = Progress::select('tasks_id', 'check_flag')
            ->where('student_id', '=', ':student_id')
            ->where('check_flag', '=', ':check_flag')
            ->toSql();

            //進捗管理のデータ取得
            $progress_tasks = Tasks::select(DB::raw('group_id, group.img_link as group_img, group.name as group_name, count(*) as tasks_count, count(progress.check_flag) as progress_count'))
            ->join('group', 'group.id', '=', 'tasks.group_id')
            ->leftJoin(DB::raw('('.$sub.') AS progress'), 'progress.tasks_id', '=', 'tasks.id')
            ->groupBy('tasks.group_id')
            ->setBindings([':student_id'=>$user, ':check_flag'=>'1'])
            ->get();
            
            //上記データを編集
            foreach ($progress_tasks as $progress_task){
                array_push($group_ids, $progress_task['group_id']);
                array_push($group_names, $progress_task['group_name']);
                array_push($group_imgs, $progress_task['group_img']);
                $parsent = round(($progress_task['progress_count']/$progress_task['tasks_count'])*100);
                array_push($parcents, $parsent);

                $progress_tasks_edit['group_ids'] = $group_ids;
                $progress_tasks_edit['group_names'] = $group_names;
                $progress_tasks_edit['group_imgs'] = $group_imgs;
                $progress_tasks_edit['parcents'] = $parcents;
            }

            //生徒の情報を取得
            $student = Students::select('id', 'name', 'email', 'created_at')
            ->where('id', '=', $user)
            ->first();

            // var_dump($progress_tasks_edit);
            // exit;

            //進捗管理と生徒の情報を持ってmypageに遷移
            return view('mypage', compact('progress_tasks_edit', 'student'));
        // return view('mypage');
        // header( "Location: https://learning.techis.jp/mypage" ) ;
        // exit;
    }   else{
            return $this->index();
    }
    }

    public function change_password (Request $request) {
        $user = $request->session()->get('user');
        if (!empty($user)){
            // $user = $request->session()->get('user');
            $before_password = $request->input('before_password');
            $after_password = $request->input('after_password');

            $inputs = $request->all();

            $rules = [
                'before_password'=>'required',
                'after_password' => 'required',
            ];
            //message
            $messages = [
                'before_password.required' => '現在のパスワードを入力してください',
                'after_password.required' => '新しいパスワードを入力してください',
            ];
            //validation
            $validation = Validator::make($inputs, $rules, $messages);
            if($validation->fails()){
                return redirect()->back()->withErrors($validation->errors())->withInput();
            }else{
                //生徒の情報を取得
                $student = Students::select('id', 'name', 'email', 'password')
                ->where('id', '=', $user)
                ->first();

                if($student['password'] == $before_password){
                    Students::where('id', '=', $user)
                    ->update(['password' => $after_password]);
                    $success = 'パスワードの変更が完了しました';
                    return view('option', compact('success', 'student'));
                }else{
                    $error = 'パスワードが正しくありません';
                    return view('option', compact('error'));
                }
            }
        }else{
            return $this->index();
        }

        
    }

    public function ses_del (Request $request) {
        // $request->session()->forget('user');
        $request->session()->flush();
        header( "Location: https://learning.techis.jp" ) ;
        exit ;
    }
}
