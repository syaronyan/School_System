@extends('layout.header')
@section('content')
    <h1>登録</h1>
    <form class='form-group'>
        <label>名前</lavel>
        <input type='text' name='name'>
        <label>メールアドレス</lavel>
        <input type='email' name='email'>
        <label>パスワード</lavel>
        <input type='password' name='pass'>
    </form>
@endsection