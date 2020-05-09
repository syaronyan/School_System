
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
        <div style='text-align:center;'>
            <img src="{{ asset('storage/Title_logo.png') }}" style='max-width:100%; height:auto;'>
        </div>
    </div>
    <div class='background_wrapper'>
    <div class='contents'>
    <div class="login">
        <form method='post' action='/1' id='signup'>
            <span>登録</span>
            @if ($errors->has('name'))
                <p class="error_msg">{{ $errors->first('name') }}</p>
            @endif
            <input type="text" class="text" name="name" placeholder="name" @if ($errors->has('title')) is-invalid @endif" value="{{old('name')}}">
            @if ($errors->has('email'))
                <p class="error_msg">{{ $errors->first('email') }}</p>
            @endif
            <input type="email" class="text" name="email" placeholder="email">
            @if ($errors->has('password'))
                <p class="error_msg">{{ $errors->first('password') }}</p>
            @endif
            <input type="password" class="text" name="password" placeholder="password">
            <input type="password" class="text" name="password_confirmation" placeholder="password">
            <input type="hidden" name="status" value="1">
            <!-- <input type="checkbox" id="checkbox-1-1" class="custom-checkbox"> -->
            <!-- <label for="checkbox-1-1">Keep me Signed in</label> -->
            <button class="signin">
                Sign Up
            </button>
            @csrf 
        </form>
    </div>
    </div>
    </div>
    <footer id="footer">
        <p>2020 TECH I.S. All rights reversed</p>
        <a href=''>プライバシーポリシー</a>
    </footer>
</body>
</html>