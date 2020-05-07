@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'>文字系</div>
        <div class='ul-align-center'>
            <ul class='lg_works'>
                <p class='sm_section'>文字系１ <img src="{{ asset('storage/Required.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        メールアドレスの@マークの前の文字列だけ取得する関数を作成してください。
                    </li>
                </div>
            </ul>
            <ul class='lg_works'>
                <p class='sm_section'>文字系２ <img src="{{ asset('storage/Option.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        文字列「すき家の牛丼」を関数で「吉野家の牛丼」に置換してください。
                    </li>
                </div>
            </ul>
            <ul class='lg_work'>
                <p class='sm_section'>文字系３ <img src="{{ asset('storage/Option.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        文字列「すき家の牛丼」の文字数を関数で表示してください。
                    </li>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')