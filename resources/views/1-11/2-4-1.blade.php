@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'>会員一覧制作（難易度：★★★★☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    応用課題１－１（フォーム制作）で登録した会員情報を一覧で表示させる機能を実装してください。
                    </li>
                    <li class='sm_work'>
                    また、応用課題１－３（ログイン制作）でログインが完了した後に、会員一覧画面が表示されるように実装しましょう。
                    </li>
                    <li class='sm_work'>
                    下記画面のように、CSVダウンロードボタンを設置し、ボタンを押すことで会員一覧をCSVでダウンロードできるように実装しましょう。
                    </li>
                </div><img src="{{ asset('storage/') }}/2-4-1.png">

            </ul>
        </div> 
    </div>
</div>
@endsection('content')