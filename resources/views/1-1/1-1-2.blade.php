@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/1">⬅︎</a>　自己紹介ページの作成（HTML）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                        HTMLを使って自己紹介ページを作成してください。
                    </li>
                    <li class='sm_work'>
                        作成する際には、以下の項目を参考に書きたいものを記載してください。
                        <ul class='dd'>
                            <li class='comment'>
                                名前
                            </li>
                            <li class='comment'>
                                ニックネーム
                            </li>
                            <li class='comment'>
                                誕生日
                            </li>
                            <li class='comment'>
                                性別
                            </li>
                            <li class='comment'>
                                趣味
                            </li>
                            <li class='comment'>
                                特技
                            </li>
                            <li class='comment'>
                                意気込み等のひとことメッセージ
                            </li>
                        </ul>
                    </li>
                    <li class='sm_work'>
                        以下についても実装してみましょう！
                        <ul>
                            <li class='comment'>
                                見出しを使って見やすくしてください。（ヒント：h1~h6）
                            </li>
                            <li class='comment'>
                                リストまたは表を使って見やすくしてください。
                            </li>
                            <li class='comment'>
                                顔写真やアイコンの画像を表示してください。
                            </li>
                            <li class='comment'>
                                自己紹介ページ以外の子ページ（例えば、日記ページ等）を作成し、リンクしてください。
                            </li>
                        </ul>
                    </li>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')