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
                <div class='work_block'>
                    <li class='sm_work'>
                        <p>TECH I.S. 動画教材「MySQL入門編」
                        以下の動画を閲覧してださい。</p>
                    </li>
                    <li class='sm_work'>
                        <a href="#01">Part1（MySQLについて）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#02">Part2（MySQLにログインしてみよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#03">Part3（ユーザーを作成しよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#04">Part4（データベースの構造について）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#05">Part5（データベースを作成しよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#06">Part6（カラムを追加、削除してみよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#07">Part7（データ型とオプションについて）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#08">Part8（データを追加、更新、削除しよう）</a>
                    </li>
                    <li class='sm_work'>
                        <a href="#09">Part9（データの抽出条件について）</a>
                    </li>
                </div>
            </ul>
            <ul id='01' class='lg_work'>
                <b>MySQLについて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/MySQL/MySQL_01.mp4') }}" width="960" height="540" controls></video><br>
                </div>
                <p class='sm_section'>演習問題</p>
                <div class='work_block'>
                    <li class='sm_work'>
                        なし
                    </li>
                </div>
            </ul>
            <ul id='02' class='lg_work'>
                <b>MySQLにログインしてみよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/MySQL/MySQL_02.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    ご自身の開発環境でrootアカウントを利用し、MySQLにログインしてみましょう！
                    </li>
                </div>
            </ul>
            <ul id='03' class='lg_work'>
                <b>ユーザーを作成しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/MySQL/MySQL_03.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    下記ユーザを作成しDB操作権限を付与した上で、MySQLにログインしてみましょう！
                    </li>
                    <p class='attention'>
                    ユーザー名：test<br>
                    パスワード：なんでもOK</p>
                </div>
            </ul>
            <ul id='04' class='lg_work'>
                <b>データベースの構造について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/MySQL/MySQL_04.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習問題</p>
                <div class='work_block'>
                    <li class='sm_work'>
                        なし
                    </li>
                </div>
            </ul>
            <ul id='05' class='lg_work'>
                <b>データベースを作成しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/MySQL/MySQL_05.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    下記テーブルを作成してみましょう！
                    </li>
                    <p class='attention'>
                    テーブル名：test</p>
                    <table class='sql_sample' border="1">
                        <tr class='colum'>
                            <td>カラム型</td>
                            <td>データ型</td>
                            <td>コメント</td>
                        </tr>
                        <tr>
                            <td>id</td>
                            <td>int auto_increment primary key	</td>
                            <td>番号</td>
                        </tr>
                        <tr>
                            <td>test</td>
                            <td>varchar(32)</td>
                            <td>テストの項目</td>
                        </tr>
                        <tr>
                            <td>regist_date</td>
                            <td>datetime</td>
                            <td>登録日</td>
                        </tr>
                        <tr>
                            <td>update_date</td>
                            <td>datetime</td>
                            <td>更新日</td>
                        </tr>
                    </table>
                </div>
            </ul>
            <ul id='06' class='lg_work'>
                <b>カラムを追加、削除してみよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/MySQL/MySQL_06.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルに下記カラムを追加し、削除してみましょう！
                    </li>
                    <table class='sql_sample' border="1">
                        <tr class='colum'>
                            <td>カラム型</td>
                            <td>データ型</td>
                            <td>コメント</td>
                        </tr>
                        <tr>
                            <td>add_column</td>
                            <td>varchar(32)</td>
                            <td>追加</td>
                        </tr>
                    </table>
                </div>
            </ul>
            <ul id='07' class='lg_work'>
                <b>データ型とオプションについて</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/MySQL/MySQL_07.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習問題</p>
                <div class='work_block'>
                    <li class='sm_work'>
                        なし
                    </li>
                </div>
            </ul>
            <ul id='08' class='lg_work'>
                <b>データを追加、更新、削除しよう</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/MySQL/MySQL_08.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルに下記のデータを追加してみましょう！
                    </li>
                    <p class='attention'>
                    test：テスト<br>
                    regist_date：（「regist_date」カラムには追加時点の時間を登録してください。）<br>
                    update_date：（「update_date」カラムには何も追加しないで良いです。）</p>
                </div>
                <p class='sm_section'>演習[2]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルにデータが追加されたか検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[3]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブル先ほど追加したデータを以下に更新してみましょう！
                    </li>
                    <p class='attention'>
                    test：テスト更新<br>
                    regist_date：（「regist_date」カラムの内容は何も更新しないでください。）<br>
                    update_date：（「update_date」カラムの内容は追加時点の時間に更新してください。）</p>
                    <p class='attention'>
                    ※IDが1のレコードを対象に修正してください。</p>
                </div>
                <p class='sm_section'>演習[4]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブル先ほど修正したデータを削除してみましょう！
                    </li>
                </div>
            </ul>
            <ul id='09' class='lg_work'>
                <b>データの抽出条件について</b>
                <div class='work_block'>
                    <video class="mv" src="{{ asset('storage/movie/MySQL/MySQL_09.mp4') }}" width="960" height="540" controls></video>
                </div>
                <p class='sm_section'>演習[1]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルのレコードの件数を検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[2]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルのIDが最大値のレコードを検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[3]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルのIDが最小値のレコードを検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[4]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルのIDが大きい順に並び替えて検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[5]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルのIDが1でtestがテストとなっているレコードを検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[6]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルのIDが2か4のレコードを検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[7]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルのIDが3から5までのレコードを検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[8]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルのtestにテストという文字が含まれているレコードを検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[9]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルの検索時に3件のレコードに限定して検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[10]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルの上から2件を除いた4件のレコードに限定して検索してみましょう！
                    </li>
                </div>
                <p class='sm_section'>演習[11]</p>
                <div class='work_block'>
                    <li class='sm_work'>
                    testテーブルの中身をランダムに入れ替えたレコードを検索してみましょう！
                    </li>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')