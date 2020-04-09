@extends('layout.header')
@section('content')
<div class='section'>講座一覧</div>

    <div class="contents">
            @foreach( $groups as $group )
            <a href="/work/{{ $group->id }}" class='card'>
                <img src="{{ asset('storage/') }}/{{ $group->img_link }}" width="200" height="200">
                <div class='card-body'>
                    {{ $group->tools }}
                </div>
            </a>
            @endforeach
            <!-- <a href="/work/2" class='card'>
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
            </a> -->
    </div>
</div>
@endsection('content')