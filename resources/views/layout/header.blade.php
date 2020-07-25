<?php
$today = new DateTime();
?>
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
    <title>【公式】TECH I.S オンラインカリキュラム</title>
    </head>
    <body>
        <div id='header'>
            <div id='header_Title' style='display:inline;'>
                <img src="{{ asset('storage/Title_logo.png') }}" width="264.48" height="72.56">
            </div>
            <div id='logout'>
                    <div id='user_name'></div>
                    <div id='date'></div>
                    <button id='logout_button' value='logout'>ログアウト</button>
            </div>
            <nav>
                <ul>
                    <li><a href="/mypage">マイページ</a></li>
                    <li><a href="/Top">講座一覧</a></li>
                    <li><a href="/option">パスワード変更</a></li>
                    <!-- <li><a href="/document">参考資料</a></li> -->
                    <!-- <li><a href="#"></a></li> -->
                </ul>
            </nav>
        </div>
        <div class='background_wrapper'>
        <div class='contents'>
            @yield('content')
        </div>
        </div>
        <footer id="footer">
            <p>2020 TECH I.S. All rights reversed</p>
            <a href='https://techis.jp/privacy/'>プライバシーポリシー</a>
        </footer>
    </body>
</html>
<script>
$(document).ready(function(){
    $('#user_name').text('<?php echo $student['course'];?>でログインしています');
});
$(document).ready(function(){
    <?php $startdate = new DateTime($student['created_at']);
        $diff = $today->diff($startdate);?>
    $('#date').text('<?php echo $diff->format('総日数:%a日');?>');
});

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

$(function() {
    var offset = $('#side-menu').offset();
 
    $(window).scroll(function () {
        if ($(window).scrollTop() > offset.top) {
            $('#side-menu').removeClass('side-menu');
            $('#side-menu').addClass('fixed');
        } else {
            $('#side-menu').removeClass('fixed');
            $('#side-menu').addClass('side-menu');
        }
    });
});

var video = document.getElementsByClassName("mv");
var btn_1 = document.getElementById("Speed_1");
var btn_2 = document.getElementById("Speed_1.25");
var btn_3 = document.getElementById("Speed_1.5");
var btn_4 = document.getElementById("Speed_1.75");
var btn_5 = document.getElementById("Speed_2");
var btn_6 = document.getElementById("Speed_0.5");
var btn_7 = document.getElementById("Speed_0.75");

btn_7.addEventListener("click",function(){
    for (i = 0; i < video.length; i++) {
        video[i].playbackRate = 0.75;
    }
},false);

btn_6.addEventListener("click",function(){
    for (i = 0; i < video.length; i++) {
        video[i].playbackRate = 0.5;
    }
},false);

btn_5.addEventListener("click",function(){
    for (i = 0; i < video.length; i++) {
        video[i].playbackRate = 2;
    }
},false);

btn_4.addEventListener("click",function(){
    for (i = 0; i < video.length; i++) {
        video[i].playbackRate = 1.75;
    }
},false);

btn_3.addEventListener("click",function(){
    for (i = 0; i < video.length; i++) {
        video[i].playbackRate = 1.5;
    }
},false);

btn_2.addEventListener("click",function(){
    for (i = 0; i < video.length; i++) {
        video[i].playbackRate = 1.25;
    }
},false);

btn_1.addEventListener("click",function(){
    for (i = 0; i < video.length; i++) {
        video[i].playbackRate = 1;
    }
},false);


</script>