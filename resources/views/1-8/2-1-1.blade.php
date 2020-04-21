@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'>フォーム制作</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    以下の画面の通りに会員登録のフォームを作成してください。
                    </li>
                    <li class='sm_work'>
                    覚えたHTMLとCSSを利用して作成してください。
                    </li>
                    <li class='sm_work'>
                    CSSの装飾は自由なので余裕のある方は装飾もやってみてください。
                    </li>
                    <li class='sm_work'>
                    画面推移イメージとしては「入力画面→確認画面→完了画面」の３画面です。
                    </li>
                </div>
            </ul>
        </div> 
    </div>
    <div class='background_wrapper'>
    <div class='section'>入力画面制作（難易度：★★☆☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    以下の画面の通りに入力画面のフォームを作成してください。
                    </li>
                    <li class='sm_work'>
                    フォームに関するHTMLタグについては下記URLのリファレンスを参考に実装してください。
                        <ul>
                            <li class='comment'>
                                URL:<a href='http://www.htmq.com/html/indexm.shtml#for'>HTMLタグリファレンス</a>
                            </li>
                        </ul>
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-1-1.png">
                </div>
            </ul>
        </div> 
    </div>
    </div>
</div>
@endsection('content')