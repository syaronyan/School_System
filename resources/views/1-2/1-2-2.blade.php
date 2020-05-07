@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/2">⬅︎</a>　てはじめに</div>
        <div class='ul-align-center'>
            <ul class='lg_works'>
                <p class='sm_section'>てはじめに１ <img src="{{ asset('storage/Required.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        paizaラーニング「PHP入門編」を実施してください。
                    </li>
                </div>
            </ul>
            <ul class='lg_work'>
                <p class='sm_section'>てはじめに2 <img src="{{ asset('storage/Option.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        変数を使用して「 4 + 5 = 9 」を表示させてください。
                    </li>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')