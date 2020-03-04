@extends('layout.header')
@section('content')

<div class='section'>{{ $group->name }}</div>

<form method='post' action=''>
    <!-- @foreach ($tasks as $task)
    <input type='checkbox'>{{ $task->name }}
    @endforeach -->
</form>

@endsection