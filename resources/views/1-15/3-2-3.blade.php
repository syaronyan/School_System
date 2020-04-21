@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'>基本設計(画面設計)</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    要件定義書をもとに簡易な<a href='https://drive.google.com/open?id=1vr4t_aH-Z7PumfoHQ8ZATfUsuf4MYrCI'>画面設計</a>をページ毎に行う(線で構成)
TECH I.S.ではバックエンドエンジニア(兼サーバサイドエンジニア)の勉強をメインにしているのと、一人でも楽に稼げるようにフロントはオープンソースのテンプレートを利用してます。海外のオープンソースがかなりの数ある為先にテンプレートを探して、それらをプロジェクトに合わせて差し替えて画面設計にしてもかまいません。
                    </li>
                </div>
                <img src="{{ asset('storage/') }}/3-2-3.png">
            </ul>
        </div> 
    </div>
</div>
@endsection('content')