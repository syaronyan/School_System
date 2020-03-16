@extends('layout.header')
@section('content')

<div class='section'>{{ $group->name }}</div>

<form method='post' action=''>
    <table id='progress'>
        @foreach ($tasks as $task)
        <tr>
            <td>
                @if ($task->check_flag == 1)
                <input type='checkbox' id='{{ $task->tasks_id }}' value="1" checked>
                @else
                <input type='checkbox' id='{{ $task->tasks_id }}' value="1">
                @endif
            </td>
            <td style="text-align: left">
                <a href='{{ $group->id }}/{{ $task->link }}'>{{ $task->tasks_name }}</a>
            </td>
        </tr>
        @endforeach
    </table>
    @csrf
</form>
<div class='select'></div>
<script>
$(function() {
    $('input:checkbox').change(function() {
        var cnt = $('#progress input:checkbox:checked').length;
        $('div.select').text('選択：' + cnt + '個');
    }).trigger('change');
});

$(function() {
    $('input:checkbox').change(function() {
        var flag;
        if($(this).prop("checked")) {
            flag = $('#progress input:checkbox').val();
        } else {
            flag = 0;
        } 
        
    $.ajax({
    // url: "../../app/Http/Controllers/ProgressController.php", // URLを指定
    url: "/api/progress", 
    type: "POST", // GET,POSTなどを指定
    data: { // データを指定
        student_id : "1",
        tasks_id : $(this).attr('id'),
        check_flag : flag,
    }
    })
    .then(
    // 1つめは通信成功時のコールバック処理
    function (data) {
        
    },
    // 2つめは通信失敗時のコールバック処理
    function () {
        
    });
        })
        
});
</script>
@endsection