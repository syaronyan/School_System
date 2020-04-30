<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //サインイン画面へ遷移
    public function index()
    {
        return view('signin');
    }
    
    public function taskpage ($id, $page) 
    {
        if ($page == 'logout'){
            header('Location: https://learning.techis.jp/logout');
            return $this->index();
        }else{
            return view('1-'.$id.'/'.$page);
        }
    }
}
