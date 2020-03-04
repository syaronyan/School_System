<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    public function subject ($id) 
    {
        $group = Group::where('id', '=', $id)->first();
        return view('work', compact('group'));
    }
}
