@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'>ログイン制作（難易度：★★★★☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    以下の画面の通りにログイン画面を作成してください。
                    </li>
                    <li class='sm_work'>
                    覚えたHTML・CSSの知識を利用して作成してください。
                    </li>
                    <li class='sm_work'>
                    メールアドレス・パスワードが入力されてなければエラーメッセージを出力してください。
                    </li>
                    <li class='sm_work'>
                    MySQLに登録したデータベースを参照し、会員情報がなければエラーメッセージを出力してください。
                    </li>
                    <li class='sm_work'>
                    PHPでログイン機能を実装する場合は、セッション関数を利用し、$_SESSIONというグローバル変数に値を入れ、その値を有無でログイン状態を把握することが多いです。今回は入力されたデータをMySQLから検索し、データがあれば$_SESSION['ID']に会員番号を格納するように実装してみましょう。
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-3-1.png">
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')