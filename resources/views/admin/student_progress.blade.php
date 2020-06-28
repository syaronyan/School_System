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
        </tr>
        <tr id='user'>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['email'] }}</td>
            <td>{{ $student['ent_date'] }}</td>
            <td>{{ $student['created_at'] }}</td>
            <td>{{ $student['updated_at'] }}</td>
            <td><button id='edit'>編集</button></td>
        </tr>
        <tr id = 'form'>
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
	$('#form').hide();

	$("#edit").click(function() {
        // 表示する
        $('#user').hide();
		$("#form").show();
	});

	$("#cancel").click(function() {
		// 非表示にする
        $("#form").hide();
        $("#user").show();
	});
}); 
</script>
@stop
