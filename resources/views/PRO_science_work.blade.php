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
    

@endsection('content')