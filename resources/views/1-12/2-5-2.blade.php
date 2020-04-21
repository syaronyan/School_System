@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'>結果表示（難易度：★★★★☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    漢字DBから総画を集計し、以下運勢表から判断し表示してください。
                    </li>
                    <li class='sm_work'>
                    画数の集計をする際は、下記に記載の画数データベースを利用して実装しましょう。
                    </li>
                </div>
                <img src="{{ asset('storage/') }}/2-5-2_01.png">
                <img src="{{ asset('storage/') }}/2-5-2_02.png">
            </ul>
        </div> 
    </div>
</div>
@endsection('content')