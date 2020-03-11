<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aa ($id, $page) 
    {
        return view('1-'.$id.'/'.$page);
    }
}
