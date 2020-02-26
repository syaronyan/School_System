<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StundentController extends Controller
{
    public function index()
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
}
