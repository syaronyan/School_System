<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //サインイン画面へ遷移
    public function index()
    {
        return view('signin');
    }

    public function admin (Request $request) 
    {
        $user = $request->session()->get('user');
        if ($user == 1){
            return view('admin');
        }else{
            return $this->index();
        }   
    }
    public function students (Request $request) 
    {
        $user = $request->session()->get('user');
        if ($user == 1){
            return view('students');
        }else{
            return $this->index();
        }   
    }
}
