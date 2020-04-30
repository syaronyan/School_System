<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/Top.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Sign.css') }}">
        <link rel="stylesheet" href="{{ asset('css/TaskPage.css') }}">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <title>Document</title>
    </head>
    <body>
        <div id='header'>
            <div id='header_Title' style='display:inline;'>
                <p>TECH I.S.</p>
            </div>
            <div id='logout'>
                    <button id='logout_button' value='logout'>ログアウト</button>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="/mypage">マイページ</a></li>
                    <li><a href="/Top">講座一覧</a></li>
                    <li><a href="/option">パスワード変更</a></li>
                    <li><a href="/document">参考資料</a></li>
                    <!-- <li><a href="#"></a></li> -->
                </ul>
            </nav>
        </div>
        <div class='contents'>
            @yield('content')
        </div>
        <footer id="footer">
            <p>2020 TECH I.S. All rights reversed</p>
            <a href=''>プライバシーポリシー</a>
        </footer>
    </body>
</html>
<script>
$(function() {
    $('#logout_button').on('click', function() {
        if(!confirm('ログアウトしますか？')){
        // キャンセルの時の処理
        return false;
        }else{
        // OKの時の処理 
        location.href = 'logout';        
        }
});

});
</script>