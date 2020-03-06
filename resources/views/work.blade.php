@extends('layout.header')
@section('content')

<div class='section'>{{ $group->name }}</div>

<form method='post' action=''>
    <table id='progress'>
        @foreach ($tasks as $task)
        <tr>
            <td>
            <input type='checkbox'>
            </td>
            <td style="text-align: left">
                <a href='{{ $group->id }}/{{ $task->link}}'>{{ $task->name }}</a>
            </td>
        </tr>
        @endforeach
    </table>
</form>
<div class='select'></div>
<script>
$(function() {
    $('input:checkbox').change(function() {
        var cnt = $('#progress input:checkbox:checked').length;
        $('div.select').text('選択：' + cnt + '個');
    }).trigger('change');
});
</script>
@endsection