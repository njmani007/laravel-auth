<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        <h2>Registration</h2>
        <form action="{{route('login')}}" method="POST" autocomplete="off">
            @csrf

            <div class="input-box">
                <input type="email" name="email" a placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-box button">
                <input type="submit" value="Login now">
            </div>
            <div class="text">
                <h3>New User<a href="{{route('register')}}" >Register now</a></h3>
            </div>
        </form>
    </div>
</body>
</html>
