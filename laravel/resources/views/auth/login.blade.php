<!doctype html>
<html lang="en" class="login">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barroc IT</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<div class="center">
    <h2 class="tac subhead">Login</h2>

    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div>
            <label for="username" class="subhead">Username:</label>
            <input id="username" type="text" name="username" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div>
            <label for="password" class="subhead">Password:</label>
            <input id="password" type="password" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </div>

        <div>
            <input type="submit" class="submit subhead" value="Login">
        </div>
    </form>

    @guest
        <a href="{{ route('register') }}" class="left">Register</a>
    @endif

    <a class="right" href="{{ route('password.request') }}">
        Forgot Your Password?
    </a>
</div>
</body>
</html>