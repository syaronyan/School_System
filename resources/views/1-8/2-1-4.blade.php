@extends('layout.header')
@section('content')
<div class='background_wrapper'>
    <div class='section'><a class='back' href="/work/8">⬅︎</a>　登録完了画面および登録完了メール（難易度：★★★★☆）</div>
        <div class='ul-align-center'>
            <ul class='lg_work'>
                <div class='work_block'>
                    <li class='sm_work'>
                    下記のような登録完了画面に遷移し、確認画面で受けたデータを基に完了メールを登録者に送付してください。
                    </li>
                    <li class='sm_work'>
                    メール送信については下記URLを参考に実装してください。
                        <ul>
                            <li class='comment'>
                                URL:<a href='https://into-the-program.com/phpmailer-gmail/'>【PHPMailer】GmailのSMTP経由でメールを送信する</a>
                            </li>
                        </ul>
                    </li>
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-1-4_01.png">
                </div>
                <div class='explain'>
                    <img src="{{ asset('storage/') }}/2-1-4_02.png">
                </div>
            </ul>
        </div> 
    </div>
</div>
@endsection('content')