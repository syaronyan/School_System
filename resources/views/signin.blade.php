@extends('layout.header')
@section('content')

    <div class="login">
        <form method='post' action='/2'>
            <span>ログイン</span>
            @if ($errors->has('email'))
                <p class="error_msg">{{ $errors->first('email') }}</p>
            @endif
            <input type="email" class="text" name="email" placeholder="email">
            @if ($errors->has('password'))
                <p class="error_msg">{{ $errors->first('password') }}</p>
            @endif
            @if (!empty($error))
                <span class="error_msg">{{ $error }}</span>
            @endif
            <input type="password" class="text" name="password" placeholder="password">
            <!-- <input type="checkbox" id="checkbox-1-1" class="custom-checkbox"> -->
            <!-- <label for="checkbox-1-1">Keep me Signed in</label> -->
            <button class="signin">
            Sign In
            </button>
            <!-- <a href="#">Forgot Password?</a> -->
            @csrf
        </form>
        <a href="/signup">初めての方はこちらから</a>
    </div>

@endsection