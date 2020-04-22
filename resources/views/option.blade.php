@extends('layout.header')
@section('content')
<div class='section'>設定</div>
<div class="option">
        <form method='post' action='/change_password' id='change_password'>
            <span>パスワード変更</span>
                @if ($errors->has('before_password'))
                    <p class="error_msg">{{ $errors->first('before_password') }}</p>
                @endif
                @if (!empty($error))
                    <p class="error_msg">{{ $error }}</p>
                @endif
            <input type="password" class="text" name="before_password" placeholder="変更前のpassword">
                @if ($errors->has('after_password'))
                    <p class="error_msg">{{ $errors->first('after_password') }}</p>
                @endif
            <input type="password" class="text" name="after_password" placeholder="変更後のpassword">
            <button class="signin">
                変更
            </button>
            @csrf 
        </form>
            @if (!empty($success))
                <p class="success"></p>
            @endif
</div>
<script>
    $(function() {
    $('p.success').change(function() {
        alert('パスワードの変更が完了しました')
    }).trigger('change');
});
</script>
@endsection('content')