<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StundentController extends Controller
{
    public function index()
    {
        return view('signin');
    }

    public function Top()
    {
        return view('Top');
    }

    public function mypage()
    {
        return view('mypage');
    }

    public function signup()
    {
        return view('signup');
    }

    public function work()
    {
        return view('work');
    }
}
