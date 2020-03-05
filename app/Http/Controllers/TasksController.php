<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GroupController;
use Illuminate\Http\Request;
use App\Tasks;

class TasksController extends Controller
{
    public function task ($id) 
    {
        $tasks = Tasks::where('group_id', '=', $id)->first();
        return view('work', compact('tasks'));
    }
}
