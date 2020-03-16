<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;
use App\Group;
use App\Tasks;
use App\Progress;

class GroupController extends Controller
{
    public function subject (Request $request, $id) 
    {
        $user = $request->session()->get('user');

        $group = Group::where('id', '=', $id)->first();

        $tasks = Tasks::leftJoin('Progress', function ($join) use ($user){
            $join->on('tasks.id', '=', 'progress.tasks_id')
                 ->where('student_id', '=', $user);
        })
        ->select('student_id', 'group_id', 'tasks.id as tasks_id', 'link', 'check_flag', 'tasks.name as tasks_name')
        ->where('group_id', '=', $id)
        ->get();

        return view('work', compact('group','tasks'));
    }
}
