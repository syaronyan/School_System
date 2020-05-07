@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/8">⬅︎</a>　セキュリティを高める（難易度：★★★★☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    GETやPOSTなどの外部から入ってくるデータの時に悪意のあるデータがくることもあります。
                    </li>
                    <li class='sm_work'>
                    会員登録の際はPOSTの値を利用しているため、POSTの値をエンコード処理し、セキュリティを高めていきましょう。
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-1-7.png">
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')