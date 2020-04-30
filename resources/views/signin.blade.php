
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Top.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Sign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TaskPage.css') }}">
    <title>Document</title>
</head>
<body>
    <div id='header'>
        <div id='header_Title' style='text-align:center;'>
            <img src="{{ asset('storage/Title_logo.png') }}" >
        </div>
    </div>
    <div class='background_wrapper'>
    <div class='contents'>
        <div class="login">
            <form id='signin' method='post' action='/signin'>
                <span>ログイン</span>
                @if ($errors->has('email'))
                    <p class="error_msg">{{ $errors->first('email') }}</p>
                @endif
                <input type="email" class="text" name="email" placeholder="email">
                @if ($errors->has('password'))
                    <p class="error_msg">{{ $errors->first('password') }}</p>
                @endif
                @if (!empty($error))
                    <span class="error_msg">{{ $error }}</span>
                @endif
                <input type="password" class="text" name="password" placeholder="password">
                <!-- <input type="checkbox" id="checkbox-1-1" class="custom-checkbox"> -->
                <!-- <label for="checkbox-1-1">Keep me Signed in</label> -->
                <button class="signin">
                Sign In
                </button>
                <!-- <a href="#">Forgot Password?</a> -->
                @csrf
            </form>
            <!-- <a href="/signup">初めての方はこちらから</a> -->
        </div>
    </div>
    </div>
    <footer id="footer">
        <p>2020 TECH I.S. All rights reversed</p>
        <a href=''>プライバシーポリシー</a>
    </footer>
</body>
</html>
    
