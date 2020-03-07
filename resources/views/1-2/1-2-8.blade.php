@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'>プチプログラム（難易度：★★★☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_works'>
                <p class='sm_section'>じゃんけんプログラム<p>
                <div class='work_block'>
                    <li class='sm_work'>
                        URLのようにじゃんけんプログラムを作ってください。
                    </li>
                    <li class='comment'>
                        参考URL:<a href='http://demo.tofusystem.work/janken/index.php'>http://demo.tofusystem.work/janken/index.php</a>
                    </li>
                </div>
            </ul>
            <ul class='lg_works'>
                <p class='sm_section'>曜日判定アプリ<p>
                <div class='work_block'>
                    <li class='sm_work'>
                        日付を入力するとその日が何曜日かを教えてくれるWEBアプリを作成してください。
                    </li>
                    <li class='comment'>
                        参考URL:<a href='http://imai.ashitaha.com/~hikawadai/week1.php'>http://imai.ashitaha.com/~hikawadai/week1.php</a>
                    </li>
                </div>
            </ul>
            <ul class='lg_works'>
                <p class='sm_section'>電卓アプリ<p>
                <div class='work_block'>
                    <li class='sm_work'>
                        簡単な電卓アプリを作ってください。
                    </li>
                </div>
            </ul>
            <ul class='lg_work'>
                <p class='sm_section'>NGワード判別<p>
                <div class='work_block'>
                    <li class='sm_work'>
                        このCSVファイルを自分のサーバに入れ、PHPでこのCSVのリストに書かれているNGワードがあるかないか判別する関数を作成してください。
                    </li>
                    <li class='comment'>
                        CSVファイル:<a href="https://drive.google.com/open?id=11fK5Y9AON6CfhnFt_0DkNUVqvXfExwkE" rel="nofollow">NGワードダウンロード</a>
                    </li>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')