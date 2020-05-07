@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/14">⬅︎</a>　以下を参考にgit環境構築を行う（難易度：★★☆☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div>
                    <b>gitのインストール(Windowsのみ)</b>
                    <p>Macはデフォルトでインストールされているのでスキップしてよい</p>
                    <a href='https://gitforwindows.org/ '>https://gitforwindows.org/ </a>
                    <p>からダウンロードしてインストールする。基本デフォルトのままで良いが、トラブル発生を軽減するために、以下は変更を推奨する。</p>
                </div>
                <div class='work_block'>
                    <li class='sm_work'>
                    Adjusting your PATH environment
                        <ul>
                            <li class='comment'>
                                「Use Git from Git Bash only」を選ぶ
                            </li>
                        </ul>
                        <ul>
                            <li class='comment'>
                                デフォルトだとPATH環境変数に追加されるが、不用意にPATHを汚さない方が気持ちよいため
                            </li>
                        </ul>
                    </li>
                    <li class='sm_work'>
                    Choosing HTTPS transport backend
                        <ul>
                            <li class='comment'>
                                「Use the OpenSSL library」を選ぶ
                            </li>
                        </ul>
                        <ul>
                            <li class='comment'>
                                OpenSSLと依存するライブラリを増やすより、Windowsの機能を使うほうが安心なため
                            </li>
                        </ul>
                    </li>
                    <li class='sm_work'>
                    Configuring the line editing conversions
                        <ul>
                            <li class='comment'>
                                「Checkout as-is commit as-is」を選ぶ
                            </li>
                        </ul>
                        <ul>
                            <li class='comment'>
                                チェックアウトやコミット時に改行コードを変換しないようにするため
                            </li>
                        </ul>
                    </li>
                </div>
                <div>
                    <b>TortoiseGitのインストール(任意：Windowsのみ)</b>
                    <p>gitのGUIクライアント。使いやすいため、Windowsユーザーならインストールを推奨する</p>
                </div>
                <div class='work_block'>
                    <li class='sm_work'>
                        <a href='https://tortoisegit.org/download/ '>https://tortoisegit.org/download/ </a>から64bit版をダウンロードしてインストールする
                    </li>
                    <li class='sm_work'>
                    同じページからLanguage PacksのJapaneseの64bit版をダウンロードしてインストールする
                    </li>
                </div>
                <div>
                    参考：<a href='https://github.com/tech-is/student-wiki/wiki/%E3%83%AD%E3%83%BC%E3%82%AB%E3%83%AB%E3%81%ABgit%E3%82%92%E5%85%A5%E3%82%8C%E3%82%8B'>ローカルにgitを入れる</a>
                </div>
                <div>
                    <b>git初期設定</b>
                    <p>Windowsはスタートメニューから「Git Bash」、MacはSpotlightなどから「ターミナル」を起動して設定する</p>
                    <p>git config --global user.name "githubに登録したユーザー名"</p>
                    <p>git config --global user.email "githubに登録したユーザー名@users.noreply.github.com"</p>
                </div>
                <div class='work_block'>
                    <li class='sm_work'>
                        user.nameは任意の名前で良いが、githubのユーザー名にすると悩まなくて良い。
                    </li>
                    <li class='sm_work'>
                        user.emailはコミットした人の判別に使われる。登録したアドレスは漏れるため、@users.noreply.github.com のダミーアドレスが使用でき、この方が安全。
                    </li>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')