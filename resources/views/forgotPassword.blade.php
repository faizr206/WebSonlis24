<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/forgotPassword">
        @csrf
        <input type="email" name="email" placeholder="email">
        <button type="submit">Send reset link</button>
    </form>
</body>
</html>