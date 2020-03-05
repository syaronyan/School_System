@extends('layout.header')
@section('content')
<div class='section'>講座一覧</div>

    <div class="contents">
            <a href="/work/1" class='card'>
                <div class='card-body'>
                    HTML/CSS
                </div>
            </a>
            <a href="/work/2" class='card'>
                <div class='card-body'>
                    PHP
                </div>
            </a>
            <a href="/work/3" class='card'>
                <div class='card-body'>
                    JavaScript
                </div>
            </a>
            <a href="/work/4" class='card'>
                <div class='card-body'>
                    SQL
                </div>
            </a>
            <a href="/work/5" class='card'>
                <div class='card-body'>
                    セキュリティ
                </div>
            </a>
            <a href="/work/6" class='card'>
                <div class='card-body'>
                    デザイン
                </div>
            </a>
    </div>
</div>
@endsection('content')