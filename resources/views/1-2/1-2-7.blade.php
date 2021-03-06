@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/2">⬅︎</a>　画像系（難易度：★★☆☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_works'>
                <p class='sm_section'>画像系１ <img src="{{ asset('storage/Required.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        選択した画像をサーバーにアップロード(自分のパソコンの別フォルダにコピー)させるプログラムを作成してください。 
                        また、元ファイルの画像サイズをリサイズ(横幅100px)したものも一緒に保存するプログラムを併せて作成してください。
                    </li>
                </div>
            </ul>
            <ul class='lg_work'>
                <p class='sm_section'>画像系２ <img src="{{ asset('storage/Option.png ') }}" width="40" height="20"></p>
                <div class='work_block'>
                    <li class='sm_work'>
                        上記のアップロードされたファイルの拡張子を取得して表示させてください。
                    </li>
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')