<!-- adminlte::pageを継承 -->
@extends('adminlte::page')
<!-- 見出し -->
@section('content_header')
    <h1>生徒登録</h1>
@stop

<!-- 内容 -->
@section('content')
    <p>このページでは生徒のアカウント登録ができます。</p>
    <div class='background_wrapper'>
    <div class='contents'>
    <div class="login">
        <form method='post' action='/admin/signup' id='signup'>
            <span>登録</span>
            @if ($errors->has('name'))
                <p class="error_msg">{{ $errors->first('name') }}</p>
            @endif
            <input type="text" class="text" name="name" placeholder="name" @if ($errors->has('title')) is-invalid @endif" value="{{old('name')}}">
            @if ($errors->has('email'))
                <p class="error_msg">{{ $errors->first('email') }}</p>
            @endif
            <input type="email" class="text" name="email" placeholder="email">
            @if ($errors->has('password'))
                <p class="error_msg">{{ $errors->first('password') }}</p>
            @endif
            <input type="password" class="text" name="password" placeholder="password">
            <input type="password" class="text" name="password_confirmation" placeholder="password">
            <input type="datetime" class="text" name="ent_date" placeholder="入校日2020/04/04">
            <input type="hidden" name="status" value="1">
            <button class="signin">
                Sign Up
            </button>
            @csrf 
        </form>
    </div>
    </div>
    </div>
@stop