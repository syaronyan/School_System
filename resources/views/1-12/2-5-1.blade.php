@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'>姓名判断プログラム</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    名前を入力して占うと、総格から名前の運勢を占うプログラムを制作してください。
                    </li>
                </div>
            </ul>
        </div> 
    </div>
    <div class='background_wrapper'>
    <div class='section'>ページ制作（難易度：★★☆☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    bootstrapを利用して綺麗に入力フォームを作成してください。
                    </li>
                </div><img src="{{ asset('storage/') }}/2-5-1.png">

            </ul>
        </div> 
    </div>
    </div>
</div>
@endsection('content')