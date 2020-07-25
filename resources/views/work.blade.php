@extends('layout.header')
@section('content')

<div class='section'>{{ $group->name }}</div>

<form method='post' action=''>
    <table id='progress' style="margin:auto">
        @foreach ($tasks as $task)
        <tr>
            <td>
                @if ($task->check_flag == 1)
                <input class='check' type='checkbox' id='{{ $task->tasks_id }}' value="1" checked>
                @else
                <input class='check' type='checkbox' id='{{ $task->tasks_id }}' value="1">
                @endif
            </td>
            <td style="text-align: left">
                <a class='check_parts' href='{{ $group->id }}/{{ $task->link }}'>{{ $task->tasks_name }}</a>
            </td>
            <td>
                <img src="{{ asset('storage/') }}/{{ $task->r_o_link }}" width="40" height="20">
            </td>
        </tr>
        @endforeach
    </table>
    @csrf
</form>

<?php $student_id = $student->id;

?>
<p><?php //echo $student_id?></p>

<!-- 選択した数値を確認 -->
<!-- <div class='select'></div> -->
<script>
    // 選択した数値を確認ロジック
// $(function() {
//     $('input:checkbox').change(function() {
//         var cnt = $('#progress input:checkbox:checked').length;
//         $('div.select').text('選択：' + cnt + '個');
//     }).trigger('change');
// });



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
        student_id : <?php echo $student_id ?>,
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