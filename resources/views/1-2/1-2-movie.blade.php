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
            </ul>
            <ul id='02' class='lg_work'>
                <b>HELLO TECH I.S.を表示しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_02.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='03' class='lg_work'>
                <b>変数を使おう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_03.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='04' class='lg_work'>
                <b>計算をしてみよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_04.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='05' class='lg_work'>
                <b>文字列について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_05.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='06' class='lg_work'>
                <b>if文について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_06.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='07' class='lg_work'>
                <b>switch文について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_07.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='08' class='lg_work'>
                <b>while文ついて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_08.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='09' class='lg_work'>
                <b>for文について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_09.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='10' class='lg_work'>
                <b>配列を使ってみよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_10.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='11' class='lg_work'>
                <b>連想配列について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_11.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='12' class='lg_work'>
                <b>foreachについて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_12.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='13' class='lg_work'>
                <b>二次元配列について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_13.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='14' class='lg_work'>
                <b>関数について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_14.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='15' class='lg_works'>
                <b>スーパーグローバル変数</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/PHP/PHP_15.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')