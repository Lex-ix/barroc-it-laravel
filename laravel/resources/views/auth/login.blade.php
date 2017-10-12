<!doctype html>
<html lang="en" class="login-background">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barroc IT</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<div class="login">
    <div class="center">
        <h2 class="tac subhead">Login</h2>

        @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li class="help-block subhead">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div>
                <label for="username" class="subhead">Username:</label>
                <input id="username" type="text" name="username" required autofocus>
            </div>

            <div>
                <label for="password" class="subhead">Password:</label>
                <input id="password" type="password" name="password" required>
            </div>

            <div>
                <label class="subhead">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                </label>
            </div>

            <div>
                <input type="submit" class="submit subhead" value="Login">
            </div>
        </form>
    </div>
</div>
</body>
</html>
