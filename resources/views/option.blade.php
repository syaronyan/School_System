@extends('layout.header')
@section('content')
<div class='section'>設定</div>
<div class="option">
        <form method='post' action='/1' id='signup'>
            <span>編集</span>
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
            <input type="hidden" name="status" value="1">
            <!-- <input type="checkbox" id="checkbox-1-1" class="custom-checkbox"> -->
            <!-- <label for="checkbox-1-1">Keep me Signed in</label> -->
            <button class="signin">
                Sign In
            </button>
            @csrf 
        </form>
    </div>
@endsection('content')