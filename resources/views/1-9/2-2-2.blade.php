@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/9">⬅︎</a>　祝祭日の実装（難易度：★★★★☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    以下のURLから内閣府のホームページにある祝祭日のデータを取得して祝祭日を実装しましょう。
                    </li>
                    <li class='sm_work'>
                    内閣府の祝祭日CSV
                        <ul>
                            <li class='comment'>
                                URL:<a href='https://www8.cao.go.jp/chosei/shukujitsu/syukujitsu_kyujitsu.csv'>https://www8.cao.go.jp/chosei/shukujitsu/syukujitsu_kyujitsu.csv</a>
                            </li>
                        </ul>
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-2-2.png">
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')