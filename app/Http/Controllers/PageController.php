<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class PageController extends Controller
{
    //サインイン画面へ遷移
    public function index()
    {
        return view('signin');
    }
    
    public function taskpage (Request $request, $id, $page) 
    {
        if ($page == 'logout'){
            header('Location: https://learning.techis.jp/logout');
            return $this->index();
        }else{
            $user = $request->session()->get('user');
            if (!empty($user)){
                //生徒の情報を取得
                $student = Students::select('id', 'name', 'email', 'created_at')
                ->where('id', '=', $user)
                ->first();
                return view('1-'.$id.'/'.$page, compact('student'));
            }else{
                return $this->index();
        }
        }
    }
}
