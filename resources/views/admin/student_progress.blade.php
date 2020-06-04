<!-- adminlte::pageを継承 -->
@extends('adminlte::page')
 
<!-- 見出し -->
@section('content_header')
    <h1>さんの進捗状況</h1>
@stop

<!-- 内容 -->
@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div></div>
    <table class=table>
        <tr>
            <td>単元</td>
            <td>進捗</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @foreach( $all_students as $students )
        <tr>
            <td>{{ $students['id'] }}</td>
            <td>{{ $students['name'] }}</td>
            <td>{{ $students['email'] }}</td>
            <td>{{ $students['ent_date'] }}</td>
            <td>{{ $students['created_at'] }}</td>
            <td>{{ $students['updated_at'] }}</td>
        </tr>
        @endforeach
    </table>
@stop