<!-- adminlte::pageを継承 -->
@extends('adminlte::page')
 
<!-- 見出し -->
@section('content_header')
    <h1>{{ $student['name'] }}さんの進捗状況</h1>
@stop

<!-- 内容 -->
@section('content')
    <p>このページでは、生徒の進歩状況が確認できます。</p>
    <div></div>
    <table class=table>
        <tr>
            <td>id</td>
            <td>名前</td>
            <td>メールアドレス</td>
            <td>入校日</td>
            <td>登録日</td>
            <td>更新日</td>
            <td id='exist'>在籍</td>
        </tr>
        <tr id='user'>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['email'] }}</td>
            <td>{{ $student['ent_date'] }}</td>
            <td>{{ $student['created_at'] }}</td>
            <td>{{ $student['updated_at'] }}</td>
            <td>
            <form>
                @if ($student['status'] == 1)
                <input class='check' type='checkbox' value="1" checked>
                @else
                <input class='check' type='checkbox' value="1">
                @endif
                @csrf 
            <span class='graduate'></span>
            </form>
            </td>

            <td><button id='edit'>編集</button></td>
        </tr>
        <tr id = 'user_info'>
            <form id='edit' method='post' action="/admin/users/{{$student['id']}}/edit">
            <td>{{ $student['id'] }}</td>
            <td><input type="text" class="text" name="name" value="{{ $student['name'] }}"></td>
            <td><input type="email" class="text" name="email" value="{{ $student['email'] }}"></td>
            <td><input type="text" class="text" name="ent_date" value="{{ $student['ent_date'] }}"></td>
            <td>{{ $student['created_at'] }}</td>
            <td>{{ $student['updated_at'] }}</td>
            
            <td><button id='cancel'>戻る</button><input type='submit' value='更新'></td>
            @csrf 
            </form>
        </tr>
    </table>
    <table class=table>
        <tr>
            <td>単元</td>
            <td>進歩</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
    
@stop

@section('js')
    <script> 
    $(function() {
	// 初期表示を非表示にする
	$('#user_info').hide();

	$("#edit").click(function() {
        // 表示する
        $('#user').hide();
        $('#exist').hide();
		$("#user_info").show();
	});

	$("#cancel").click(function() {
		// 非表示にする
        $("#user_info").hide();
        $("#user").show();
        $('#exist').show();
	});
}); 

$(function() {
    $('input:checkbox').change(function() {
        var flag;
        if($(this).prop("checked")) {
            // flag = $('#form input:checkbox').val();
            flag = 1;
        } else {
            flag = 0;
        } 
        
    $.ajax({
    // url: "../../app/Http/Controllers/ProgressController.php", // URLを指定
    url: "/api/graduate", 
    type: "POST", // GET,POSTなどを指定
    data: { // データを指定
        student_id : <?php echo $student->id ?>,
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

    $(function() {
        $('input:checkbox').change(function() {
            if($(this).prop("checked")){
                $('span.graduate').text('在籍');
            }else{
                $('span.graduate').text('卒業');

            }
        }).trigger('change');
    });
</script>
@stop
