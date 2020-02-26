<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/Top.css') }}">
    <title>Document</title>
    </head>
    <body>
        <div id='header_Title'>
            <p>TECH I.S<p>
        </div>
        <nav>
            <ul>
                <li class=”current”><a href=”#”>マイページ</a></li>
                <li><a href=”#”>講座一覧</a></li>
                <!-- <li><a href=”#”>About</a></li>
                <li><a href=”#”>Access</a></li>
                <li><a href=”#”>Blog</a></li> -->
            </ul>
        </nav>
        <div class='contents'>
            @yield('content')
        </div>
            <footer class="footer">
                <p>フッター（共通部分）</p>
            </footer>
    </body>
</html>