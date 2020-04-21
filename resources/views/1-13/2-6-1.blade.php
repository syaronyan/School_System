@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'>CodeIgniterの概要（難易度：★★☆☆☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    下記を参照し、CodeIgniterの概要を理解しましょう。
                    </li>
                </div>
                <div>
                    <b>フレームワークとは？</b>
                    <p>フレームワークとは、１から開発するのは大変なのである程度の基礎的な仕組みを作ってくれており、アプリ開発時にはそれに乗せるような形で実装をしていく事を可能とするツール群です。PHPのフレームワークもいっぱいあるのですが一番わかりやすいと思うフレームワーク、CodeIgniterをTECH I.S.では採用しました。</p>
                </div>
                <div>
                    <b>MVCモデル</b>
                    <p>フレームワークはどのフレームワークも基本MVCモデルで構成されています。 MVCモデルとは、役割ごとにModel, View, Controllerに分割してコーディングを行うモデルです。 それぞれの役割は，</p>
                </div>
                <div class='work_block'>
                    <li class='sm_work'>
                    Model --> システムの中でビジネスロジックを担当する
                    </li>
                    <li class='sm_work'>
                    View --> 表示や入出力といった処理をする
                    </li>
                    <li class='sm_work'>
                    Controller --> ユーザーの入力に基づき，ModelとViewを制御する
                    </li>
                </div>
                <div>
                    <p>となっており、以下の図のような流れで処理します。</p>
                    <p>(※厳密にいうとMVC2モデル)</p>
                </div>
                <img src="{{ asset('storage/') }}/2-6-1_01.png">
                <div>
                    <b>フレームワークを使うメリット</b>
                </div>
                <img src="{{ asset('storage/') }}/2-6-1_02.png">
                <div>
                    <b>あともう１点はこちら</b>
                </div>
                <img src="{{ asset('storage/') }}/2-6-1_03.png">
                <div>
                    <b>TECH I.S.では多くあるフレームワークの中で一番簡単なCodeIgniterを採用しました。</b>
                </div>
                <img src="{{ asset('storage/') }}/2-6-1_03.png">
            </ul>
        </div> 
    </div>
</div>
@endsection('content')