<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Students;
use Validator;

class StudentsController extends Controller
{
    public function signup (Request $request) 
    {
        $inputs = $request->all();
        //rules
        $rules = [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'password_confirmation' => 'required',
        ];
        //message
        $messages = [
            'name.required' => '名前は必須です',
            'email.required' => 'emailは必須です',
            'password.required' => 'パスワードは必須です',
            'password.confirmed' => 'もう一度パスワード入力してください',
        ];
        //validation
        $validation = Validator::make($inputs, $rules, $messages);

        //if fails
        if($validation->fails()){
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }else{
            Students::create($request->all());
            return view('Top');
        }
    }

    public function signin (Request $request) 
    {
        $inputs = $request->all();
        //rules
        $rules = [
            'email'=>'required|email',
            'password'=>'required',
        ];
        //message
        $messages = [
            'email.required' => 'emailは必須です',
            'password.required' => 'パスワードは必須です',
        ];
        //validation
        $validation = Validator::make($inputs, $rules, $messages);
        //if fails
        if($validation->fails()){
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }else{
            $email = $request->input('email');
            $pass = $request->input('password');
            $auth = Students::where('email', '=', $email)->first();
    
            //if fails
    
            if($pass == $auth['password']){
                return view('Top');
            }else{
                $error = 'パスワードが正しくありません';
                return view('signin', compact('error'));
            }
        }
    }
}
