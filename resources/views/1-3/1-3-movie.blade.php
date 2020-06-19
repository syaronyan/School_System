@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/1">⬅︎</a>　TECH I.S. 動画教材「JavaScriptについて」</div>
        <div class='ul-align-center'>
        <div class='bottom_btn'>
            <button type="button" id='Speed_2'>2倍速</button>
            <button type="button" id='Speed_1.75'>1.75倍速</button>
            <button type="button" id='Speed_1.5'>1.5倍速</button>
            <button type="button" id='Speed_1.25'>1.25倍速</button>
            <button type="button" id='Speed_1'>1倍速</button>
            <button type="button" id='Speed_0.75'>0.75倍速</button>
            <button type="button" id='Speed_0.5'>0.5倍速</button>
        </div>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                        <p>TECH I.S. 動画教材「JS入門編」
                        以下の動画を閲覧してださい。</p>
                    </li>
                    <li class='sm_work'>
                        <a href="#01">Part1（JavaScriptについて）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#02">Part2（クリックイベントについて）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#03">Part3（エラーの処理について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#04">Part4（変数、定数の定義について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#05">Part5（console.logの使い方）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#06">Part6（条件分岐、繰り返し処理）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#07">Part7（配列の書き方）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#08">Part8（forEachについて）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#09">Part9（二次元配列について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#10">Part10（関数について）</a>
                    </li>
                </div>
            </ul>
            <ul id='01' class='lg_work'>
                <b>JavaScriptについて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/JS/JS_01.mp4') }}" width="960" height="540" controls></video><br>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    alertを表示させてみよう
                    </li>
                    <p class='attention'>(以下サンプルファイルを実行してみよう）</p>
<pre class='attention'>
<code>
    &lt;!DOCTYPE html>
    &lt;html lang = "ja">
        &lt;head>
            &lt;meta charset = "utf-8">
            &lt;title>JavaScriptの練習&lt;/title>
        &lt;/head>
        &lt;body>
            &lt;script>
                'use strict';
                alert('JavaScriptのアラート');
            &lt;/script>
        &lt;/body>
    &lt;/html>
</code>
</pre>
                </div>
            </ul>
            <ul id='02' class='lg_work'>
                <b>クリックイベントについて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/JS/JS_02.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    クリックイベントを使ってalertを表示させてみよう
                    </li>
                    <p class='attention'>(以下サンプルファイルを実行してみよう）</p>
<pre class='attention'>
<code>
    &lt;!DOCTYPE html>
    &lt;html lang = "ja">
        &lt;head>
        &lt;meta charset = "utf-8">
            &lt;title>JavaScriptの練習&lt;/title>
            &lt;/head>
        &lt;body>
            &lt;input type="button" id="myfunc" value="押してください">

            &lt;script>
                'use strict';
                const myfunc = document.getElementById("myfunc");
                myfunc.addEventListener("click", function() {
                    alert('JavaScriptのアラート');
                });
            &lt;/script>
        &lt;/body>
    &lt;/html>
</code>
</pre>
                </div>
            </ul>
            <ul id='03' class='lg_work'>
                <b>エラーの処理について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/JS/JS_03.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    Part.2で作ったプログラムにエラーを起こし、chromeの検証で確認してみよう。
                    </li>
                </div>
            </ul>
            <ul id='04' class='lg_work'>
                <b>変数、定数の定義について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/JS/JS_04.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    変数・定数を定義し、alertで表示させてみよう。
                    </li>
                </div>
            </ul>
            <ul id='05' class='lg_work'>
                <b>console.logの使い方</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/JS/JS_05.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    Part.2で作ったプログラムのalert部分をconsole.logに置き換えて確認してみよう。
                    </li>
                </div>
            </ul>
            <ul id='06' class='lg_work'>
                <b>条件分岐、繰り返し処理</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/JS/JS_06.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    PHPのPart.6 Part.7 Part.8 で実践したif文、switch文、while文をJavaScriptに置き換えてやってみよう。
                    </li>
                </div>
            </ul>
            <ul id='07' class='lg_work'>
                <b>配列の書き方</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/JS/JS_07.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    動画で説明のあった、配列・連想配列を実際に書いてconsole.logで見てみよう。
                    </li>
                </div>
            </ul>
            <ul id='08' class='lg_work'>
                <b>forEachについて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/JS/JS_08.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    Part.7で作った配列・連想配列をforEachを使って１行ずつconsole.logに出力してみよう
                    </li>
                </div>
            </ul>
            <ul id='09' class='lg_work'>
                <b>二次元配列について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/JS/JS_09.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    動画で説明のあった、二次元配列を作成しforEachで出力してみよう。
                    </li>
                </div>
            </ul>
            <ul id='10' class='lg_work'>
                <b>関数について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/JS/JS_10.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    動画で説明のあった、税込み金額を計算する関数を作って実行してみよう。
                    </li>
                </div>
                <p class='sm_section'>演習[2] 調べる力をつける</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    価格と個数を入力するテキストフィールドを作り、合計金額をconsole.logに出力してみよう。
                    </li>
                    <p class='attention'>(※googleで「Javascript テキスト 取得」と調べ、方法を探し実行してみよう)</p>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')