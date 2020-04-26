<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function taskpage ($id, $page) 
    {
        return view('1-'.$id.'/'.$page);
    }
}
