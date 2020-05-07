@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/8">⬅︎</a>　入力確認機能（難易度：★★★★☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    先ほど制作したフォームに入力チェックをつけてみましょう。
                    </li>
                    <li class='sm_work'>
                    入力値がエラーの場合は下記のようにエラーを表示し、先に進めないようにしてください。
                    </li>
                    <li class='sm_work'>
                    エラーでない場合は、先に進めるようにしてください。
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-1-5.png">
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')