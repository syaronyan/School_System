@extends('layout.header')
@section('content')

    <div class="login">
        <form method='post' action=''>
            <span>ログイン</span>
            <input type="email" class="text" name="email" placeholder="email">
            <input type="password" class="text" name="password" placeholder="password">
            <input type="checkbox" id="checkbox-1-1" class="custom-checkbox">
            <label for="checkbox-1-1">Keep me Signed in</label>
            <button class="signin">
            Sign In
            </button>
            <a href="#">Forgot Password?</a>
        </form>
    </div>

@endsection