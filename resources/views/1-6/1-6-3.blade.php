@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/6">⬅︎</a>　チラシ作成（難易度：★★★★☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                        下記のチラシ作成に関する課題を実施してください。
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/1-6-3_01.png">
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/1-6-3_02.png">
                </div>
                <div class='explain'>
                    <b>制作見本と制作における重要ポイント</b>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/1-6-3_03.jpg">
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')