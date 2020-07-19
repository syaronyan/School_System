@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/1">⬅︎</a>　TECH I.S. 動画教材「ポートフォリオを作ろう」</div>
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
                <!-- <b>TECH I.S. 動画教材「ポートフォリオを作ろう」</b> -->
                <div class='work_block'>
                    <li class='sm_work'>
                        <p>TECH I.S. 動画教材「ポートフォリオを作ろう」
                            以下の動画を閲覧し、教材で作成しているポートフォリオを作成してください。</p>
                    </li>
                    <li class='sm_work'>
                        <a href="#01">Part1（ポートフォリオを作ろう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#02">Part2（Hello Worldを表示しよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#03">Part3（ポートフォリオを作成しよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#04">Part4（ソースコードにコメントを書こう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#05">Part5（アンカータグを使ってみよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#06">Part6（画像を表示しよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#07">Part7（ヘッダーとフッター、セクションタグを知ろう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#08">Part8（CSSについて）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#09">Part9（ヘッダーを作成しよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#10">Part10（アイコンを設置しよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#11">Part11（ulタグとliタグについて）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#12">Part12（全体の調節をしよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#13">Part13（fabiconを設定しよう）</a>
                    </li>
                </div>
            </ul>
            <ul id='01' class='lg_work'>
                <b>ポートフォリオを作ろう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfiolo_01.mp4') }}" width="960" height="540" controls></video><br>
                    <!-- <button type="button" id='Speed_2'>2倍速</button>
                    <button type="button" id='Speed_1.5'>1.5倍速</button>
                    <button type="button" id='Speed_1'>元に戻す</button> -->
                </div>
            </ul>
            <ul id='02' class='lg_work'>
                <b>Hello Worldを表示しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_02.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='03' class='lg_work'>
                <b>ポートフォリオを作成しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_03.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='04' class='lg_work'>
                <b>ソースコードにコメントを書こう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_04.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='05' class='lg_work'>
                <b>アンカータグを使ってみよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_05.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='06' class='lg_work'>
                <b>画像を表示しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_06.mp4') }}" width="960" height="540" controls></video>
                    <p class='sm_section'>演習[1]</p>
                    <li class='sm_work'>
                    下記ファイルをダウンロードして画像を表示させてください
                    </li>
                    <p class='attention'><a href="{{ asset('storage/portfolio_sample.zip') }}" download="portfolio_sample.zip">portfolio_sample.zip</a></p>
                </div>
            </ul>
            <ul id='07' class='lg_work'>
                <b>ヘッダーとフッター、セクションタグを知ろう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_07.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='08' class='lg_work'>
                <b>CSSについて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_08.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='09' class='lg_work'>
                <b>ヘッダーを作成しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_09.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='10' class='lg_work'>
                <b>アイコンを設置しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_10.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='11' class='lg_work'>
                <b>ulタグとliタグについて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_11.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='12' class='lg_work'>
                <b>全体の調節をしよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_12.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
            <ul id='13' class='lg_works'>
                <b>fabiconを設定しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/portfolio/portfolio_13.mp4') }}" width="960" height="540" controls></video>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')