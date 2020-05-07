@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/7">⬅︎</a>　ぞうさん「ひとこと掲示板を作る」（難易度：★★★☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_works'>
                <div class='work_block'>
                    <li class='sm_work'>
                    下記URLのワークショップ「ひとこと掲示板を作る」を手順に沿って実装してください。
                        <ul>
                            <li class='comment'>
                                URL:<a href='https://gray-code.com/php/make-the-board-vol1/'>ひとこと掲示板を作る</a>
                            </li>
                        </ul>
                    </li>
                </div>
            </ul>
            <ul class='lg_works'>
                <div class='work_block'>
                    <li class='sm_work'>
                    【注意】「ひと言掲示板を作る(9) 投稿データの保存にデータベースを使う」で「phpMyAdminをインストールする」となっておりますが、WindowsのXAMPPやMacのMAMPで環境構築をしている場合はphpMyAdminはインストール済みですのでインストール作業は不要です。
                        <ul>
                            <li class='comment'>
                            XAMPPの場合はXAMPP Control PanelのMySQLのStartボタンを押した後にAdminボタンを押すとphpMyAdmin画面に移動できます。
                            </li>
                            <li class='comment'>
                            MAMPの場合はMAMPのスタートページ遷移後にphpMyAdminのリンクを押すとphpMyAdmin画面に移動できます。
                            </li>
                        </ul>
                    </li>
                </div>
            </ul>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    【注意】「ひと言掲示板を作る(11) 投稿データをデータベースに登録する」でデータベースに接続する際に、DB接続のパスワードが"password"になっていますが、Windows（XAMPP）は""（パスワードなし）、Mac（MAMP）は"root"に置き換えて作業を進めてください。
                    </li>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')