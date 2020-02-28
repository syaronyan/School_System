@extends('layout.header')
@section('content')
    <h1>登録</h1>
    <div class='container'>
        <form class='form-horizontal'>
            <div class='form-group'>
                <label class='control-label col-xs-2'>名前</lavel>
                <div class='col-xs-5'>
                    <input type='text' name='name' class="form-control">
                </div>
            </div>
            <div class='form-group'>
                <label class='control-label col-xs-2'>メールアドレス</lavel>
                <div class='col-xs-5'>
                    <input type='email' name='email' class="form-control">
                </div>
            </div>
            <div class='form-group'>
                <label class='control-label col-xs-2'>パスワード</lavel>
                <div class='col-xs-5'>
                    <input type='password' name='pass' class="form-control">
                </div>
            </div>
            <div class="col-xs-offset-2 col-xs-10">
                <button type='submit'>ログイン</button>
            </div>
        </form>
    </div>
@endsection