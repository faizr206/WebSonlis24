<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/resetPassword">
        @csrf
        <input type="hidden" name="token" value="{{$_GET['token']}}">
        <input type="email" name="email" value="{{$_GET['email']}}">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="confirm password">
        <button type="submit">submit</button>
    </form>
</body>
</html>