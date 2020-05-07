@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/2">⬅︎</a>　繰り返し系</div>
        <div class='ul-align-center'>
            <ul class='lg_works'>
                <p class='sm_section'>繰り返し系１ <img src="{{ asset('storage/Required.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        phpで1～100をfor等のループ処理を使って画面上に表示してください。
                    </li>
                </div>
            </ul>
            <ul class='lg_works'>
                <p class='sm_section'>繰り返し系２ <img src="{{ asset('storage/Option.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        「phpで1～100をfor等のループ処理を使って画面上に表示してください」を10で終わらせてください。
                    </li>
                </div>
            </ul>
            <ul class='lg_works'>
                <p class='sm_section'>繰り返し系３ <img src="{{ asset('storage/Option.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        「phpで1～100をfor等のループ処理を使って画面上に表示してください」を10だけとばしてください。
                    </li>
                </div>
            </ul>
            <ul class='lg_works'>
                <p class='sm_section'>繰り返し系４ <img src="{{ asset('storage/Option.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        「phpで1～100をfor等のループ処理を使って画面上に表示してください」を3・15・16・55だけとばしてください。
                    </li>
                </div>
            </ul>
            <ul class='lg_works'>
                <p class='sm_section'>繰り返し系５ <img src="{{ asset('storage/Option.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        「phpで1～100をfor等のループ処理を使って画面上に表示してください」を偶数だけ表示させてください。
                    </li>
                </div>
            </ul>
            <ul class='lg_works'>
                <p class='sm_section'>繰り返し系６ <img src="{{ asset('storage/Required.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                    掛け算の九九をfor等のループ処理を使って画面上に表示させてください。
                    </li>
                </div>
            </ul>
            <ul class='lg_work'>
                <p class='sm_section'>繰り返し系７ <img src="{{ asset('storage/Option.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                    1から100を順番に足していくプログラムを作って演算結果を表示させてください。
                    </li>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')