@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/8">⬅︎</a>　画像を送る（難易度：★★★★☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    会員登録フォームに画像を添付できる機能を追加してください。
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-1-8.png">
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')