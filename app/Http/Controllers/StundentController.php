<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StundentController extends Controller
{
    public function index()
    {
        return view('mypage');
    }

    public function Top()
    {
        return view('Top');
    }

    public function signin()
    {
        return view('signin');
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
