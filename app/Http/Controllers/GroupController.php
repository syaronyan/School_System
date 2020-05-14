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
        return view('signin');
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
        
                $tasks = Tasks::leftJoin('progress', function ($join) use ($user){
                $join->on('tasks.id', '=', 'progress.tasks_id')
                ->where('student_id', '=', $user);
                })
                ->select('student_id', 'group_id', 'tasks.id as tasks_id', 'link', 'r_o_link', 'check_flag', 'tasks.name as tasks_name')
                ->where('group_id', '=', $id)
                ->get();
                //生徒の情報を取得
                $student = Students::select('id', 'name', 'email', 'created_at')
                ->where('id', '=', $user)
                ->get();
                //課題と生徒の情報を持ってworkに遷移
                return view('work', compact('student','group','tasks'));
            }else{
                return $this->index();
            }
        }
    }
}
