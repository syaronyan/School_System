@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/9">⬅︎</a>　カレンダーづくり（難易度：★★★☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    下記の画面イメージのとおりに今月のカレンダーを作成してみましょう。
                    </li>
                    <li class='sm_work'>
                    余裕があればbootstrapで装飾してみましょう！
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-2-1.png">
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')