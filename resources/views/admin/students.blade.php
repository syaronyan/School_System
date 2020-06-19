<!-- adminlte::pageを継承 -->
@extends('adminlte::page')
 
<!-- 見出し -->
@section('content_header')
    <h1>生徒管理</h1>
@stop

<!-- 内容 -->
@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div></div>
    <table class=table>
        <tr>
            <td>id</td>
            <td>名前</td>
            <td>メールアドレス</td>
            <td>入校日</td>
            <td>登録日</td>
            <td>更新日</td>
        </tr>
        @foreach( $all_students as $students )
        <tr>
            <td><a href="/admin/users/{{$students['id']}}">{{ $students['id'] }}</a></td>
            <td>{{ $students['name'] }}</td>
            <td>{{ $students['email'] }}</td>
            <td>{{ $students['ent_date'] }}</td>
            <td>{{ $students['created_at'] }}</td>
            <td>{{ $students['updated_at'] }}</td>
        </tr>
        @endforeach
    </table>
@stop