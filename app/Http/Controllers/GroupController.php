<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;
use App\Students;
use App\Group;
use App\Tasks;
use App\Progress;

class GroupController extends Controller
{
    //サインイン画面へ遷移
    public function index()
    {
        //return view('signin');
        header( "Location: https://learning.techis.jp" ) ;
        exit ;
    }
    //課題を取得する
    public function subject (Request $request, $id) 
    {
        if($id == 'logout'){
            header('Location: https://learning.techis.jp/logout');
            return $this->index();
        }else{
            $user = $request->session()->get('user');
            if (!empty($user)){
                $group = Group::where('id', '=', $id)->first();
        
                // $tasks = Tasks::leftJoin('progress', function ($join) use ($user){
                // $join->on('tasks.id', '=', 'progress.tasks_id')
                // ->where('student_id', '=', $user);
                // })
                // ->select('student_id', 'group_id', 'tasks.id as tasks_id', 'link', 'r_o_link', 'check_flag', 'tasks.name as tasks_name')
                // ->where('group_id', '=', $id)
                // ->get();
                //生徒の情報を取得
                $student = Students::select('id', 'name', 'email','course', 'created_at')
                ->where('id', '=', $user)
                ->first();
                //課題と生徒の情報を持ってworkに遷移
                if($student->course == 0){
                    $tasks = Tasks::leftJoin('progress', function ($join) use ($user){
                        $join->on('tasks.id', '=', 'progress.tasks_id')
                        ->where('student_id', '=', $user);
                        })
                        ->select('student_id', 'group_id', 'tasks.id as tasks_id', 'link', 'r_o_link', 'check_flag', 'tasks.name as tasks_name')
                        ->where('group_id', '=', $id)
                        ->get();
                    if($group->status == 1){
                        return view('work', compact('student','group','tasks'));
                    }else{
                        return $this->index();
                    }
                }elseif($student->course == 1){
                    $tasks = Tasks::leftJoin('progress', function ($join) use ($user){
                        $join->on('tasks.id', '=', 'progress.tasks_id')
                        ->where('student_id', '=', $user);
                        })
                        ->select('student_id', 'group_id', 'tasks.id as tasks_id', 'link', 'r_o_link', 'check_flag', 'tasks.name as tasks_name')
                        ->where('group_id', '=', $id)
                        ->where('status', '=', 1)
                        ->get();
                    if($group->status == 2){
                        return view('work', compact('student','group','tasks'));
                    }else{
                        return $this->index();
                    }
                }elseif($student->course == 2){
                    $tasks = Tasks::leftJoin('progress', function ($join) use ($user){
                        $join->on('tasks.id', '=', 'progress.tasks_id')
                        ->where('student_id', '=', $user);
                        })
                        ->select('student_id', 'group_id', 'tasks.id as tasks_id', 'link', 'r_o_link', 'check_flag', 'tasks.name as tasks_name', 'status')
                        ->where('group_id', '=', $id)
                        ->where('status', '=', 1)
                        ->get();
                    if($id == 5 || $id == 6 || $id == 14 || $id == 15  || $id == 16  || $id == 17 || $id == 19){
                        return $this->index();
                    }else{
                        return view('work', compact('student','group','tasks'));
                    }
                }
                // return view('work', compact('student','group','tasks'));
            }else{
                return $this->index();
            }
        }
    }
}
