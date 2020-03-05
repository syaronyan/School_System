<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;
use App\Group;
use App\Tasks;

class GroupController extends Controller
{
    public function subject ($id) 
    {
        $group = Group::where('id', '=', $id)->first();

        // $taskscontroller = new App\Http\Controllers\TasksController;
        // $taskscontroller -> task($id);
        // $tasks = array('a'=>'aaa','b'=>'bbb');
        $tasks = Tasks::where('group_id', '=', $id)->get();
        return view('work', compact('group','tasks'));
    }
}
