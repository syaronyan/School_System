@extends('layout.header')
@section('content')
<div class="login">
        <!-- <h2 class="active"> sign in </h2>

        <h2 class="nonactive"> sign up </h2> -->
    <form method='post' action=''>

        <span>登録</span>
        <input type="email" class="text" name="email" placeholder="email">

    <br>
    
    <br>

    <!-- <span>password</span> -->
        <input type="password" class="text" name="password" placeholder="password">
    <br>

        <input type="checkbox" id="checkbox-1-1" class="custom-checkbox">
        <label for="checkbox-1-1">Keep me Signed in</label>
    
        <button class="signin">
        Sign Up
        </button>


    <hr>

    <a href="#">Forgot Password?</a>
  </form>

</div>
@endsection