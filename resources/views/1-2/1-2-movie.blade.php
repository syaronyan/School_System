@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/2">⬅︎</a>　TECH I.S. 動画教材「PHP入門編」</div>
        <div class='ul-align-center'>
        <div class='bottom_btn'>
            <button type="button" id='Speed_2'>2倍速</button>
            <button type="button" id='Speed_1.75'>1.75倍速</button>
            <button type="button" id='Speed_1.5'>1.5倍速</button>
            <button type="button" id='Speed_1.25'>1.25倍速</button>
            <button type="button" id='Speed_1'>元に戻す</button>
        </div>
            <ul class='lg_work'>
                <!-- <b>TECH I.S. 動画教材「PHP入門編」</b> -->
                <div class='work_block'>
                    <li class='sm_work'>
                        <p>TECH I.S. 動画教材「PHP入門編」
                            以下の動画を閲覧してださい。</p>
                    </li>
                    <li class='sm_work'>
                        <a href="#01">Part1（PHPとは）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#02">Part2（HELLO TECH I.S.を表示しよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#03">Part3（変数を使おう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#04">Part4（計算をしてみよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#05">Part5（文字列について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#06">Part6（if文について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#07">Part7（switch文について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#08">Part8（while文ついて）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#09">Part9（for文について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#10">Part10（配列を使ってみよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#11">Part11（連想配列について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#12">Part12（foreachについて）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#13">Part13（二次元配列について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#14">Part14（関数について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#15">Part15（スーパーグローバル変数）</a>
                    </li>
                </div>
            </ul>
            <ul id='01' class='lg_work'>
                <b>PHPとは</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_01.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習問題</p>
                <div class='work_block'>
                    <li class='sm_work'>
                        なし
                    </li>
                </div>
            </ul>
            </ul>
            <ul id='02' class='lg_work'>
                <b>HELLO TECH I.S.を表示しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_02.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    xamppもしくはmampを起動し、実際に「HELLO TECH I.S」を表示しよう。
                    </li>
                </div>
                <p class='sm_section'>演習[2]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    「HELLO TECH I.S」の文字をCSSを使って大きくしてみよう。
                    </li>
                </div>
            </ul>
            <ul id='03' class='lg_work'>
                <b>変数を使おう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_03.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    実際に変数を作って 1000を代入してみよう。
                    </li>
                    <li class='sm_work'>
	                その後、echoでその変数を出力してみよう。
                    </li>
                </div>
                <p class='sm_section'>演習[2]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    実際に定数を作って "愛媛県" という文字列を代入してみよう。
                    </li>
                    <li class='sm_work'>
                    その後、echoでその変数を出力してみよう。
                    </li>
                </div>
            </ul>
            <ul id='04' class='lg_work'>
                <b>計算をしてみよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_04.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    PHPを使って実際に足し算・引き算・かけ算・割り算をしてみよう。
                    </li>
                </div>
                <p class='sm_section'>演習[2]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    3＋7＋50×50 をPHPで計算してみよう。
                    </li>
                    <p class='attention'>※注意　プログラムはかけ算を先に計算をしてくれません。左から順番に計算します。
		                先に計算させる部分にはカッコをつけて先に計算させる必要があります。<p>
                </div>
            </ul>
            <ul id='05' class='lg_work'>
                <b>文字列について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_05.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    変数に文字列を格納し、表示してみよう。
                    </li>
                </div>
            </ul>
            <ul id='06' class='lg_work'>
                <b>if文について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_06.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    if文を使って先ほどの動画であった「30点未満：赤点 100点：満点 30点以上100点未満：合格」となるif文を書いてみよう。
                    </li>
                </div>
            </ul>
            <ul id='07' class='lg_work'>
                <b>switch文について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_07.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    先ほどの動画であった「30点未満：赤点 100点：満点 30点以上100点未満：合格」をswitch文で書いてみよう。
                    </li>
                </div>
            </ul>
            <ul id='08' class='lg_work'>
                <b>while文ついて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_08.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    変数a に1000を代入し、2ずつ引いて0になったらループを終了するwhile文を書いてみよう。
                    </li>
                </div>
            </ul>
            <ul id='09' class='lg_work'>
                <b>for文について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_09.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    例：for文を使って1から1000まで順々に足していってみよう。500500になると正解です
                    </li>
                </div>
            </ul>
            <ul id='10' class='lg_work'>
                <b>配列を使ってみよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_10.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    例：好きな野菜を５種類選び、配列に格納してみよう。
                    </li>
                </div>
                <p class='sm_section'>演習[2]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    例：さきほどの配列をfor文を使って画面に出力してみよう。
                    </li>
                </div>
            </ul>
            <ul id='11' class='lg_work'>
                <b>連想配列について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_11.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    例：好きな野菜・果物をそれぞれ５種類選び、配列に格納してみよう。
                    </li>
                </div>
            </ul>
            <ul id='12' class='lg_work'>
                <b>foreachについて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_12.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    例：Part.11で作った連想配列をforeach文を使って画面に出力してみよう。
                    </li>
                </div>
            </ul>
            <ul id='13' class='lg_work'>
                <b>二次元配列について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_13.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    例：動画で説明のあった二次元配列を実際に書いてみて、print_rで表示してみよう。
                    </li>
	　　            <p class='attention'>（chrome表示後、右クリック→ページのソースを表示　で配列の構成は見やすくなります）</p>
                </div>
            </ul>
            <ul id='14' class='lg_work'>
                <b>関数について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_14.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    以下の組込関数の一覧からどれか４つ選択し、実際に実行してみよう
                    </li>
                    <li class='comment'>
                    <a href='https://www.php.net/manual/ja/indexes.functions.php'>https://www.php.net/manual/ja/indexes.functions.php</a>
                    </li>  
                </div>
                <p class='sm_section'>演習[2]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    消費税を計算する自作関数を作ってみよう。
                    </li>
                </div>
            </ul>
            <ul id='15' class='lg_works'>
                <b>スーパーグローバル変数</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_15.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    スーパーグローバル変数の１つの以下を実行して内容を確認してみよう
                    </li>
	　　            <p class='attention'>print($_SERVER);</p>
                    <li class='comment'>
                    値の説明：<a href='https://www.php.net/manual/ja/reserved.variables.server.php'>https://www.php.net/manual/ja/reserved.variables.server.php</a>
                    </li>    
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')