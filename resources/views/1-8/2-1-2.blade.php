@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/8">⬅︎</a>　確認画面制作（難易度：★★★☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    以下の画面の通りに確認画面のフォームを作成してください。
                    </li>
                    <li class='sm_work'>
                    前課題で製作した入力画面の登録ボタンをクリックすることで、先ほど入力した情報を確認できるようにデータ連携してください。
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-1-2.png">
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')