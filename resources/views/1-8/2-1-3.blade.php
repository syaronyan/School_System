@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'>登録データの格納処理（難易度：★★★☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    下記のようにデータベースとテーブルを作成してください。
                    </li>
                    <li class='sm_work'>
                    確認画面の登録ボタンをクリックしたときに入力したデータを登録してください。
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-1-3.png">
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')