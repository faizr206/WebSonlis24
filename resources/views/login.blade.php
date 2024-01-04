<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        @csrf
        <input type="text" name="email" placeholder="Email..." required><br>
        <input type="password" name="password" placeholder="Pasword..." required><br>
        <button type="submit">Login</button>
    </form>
    <a href="forgotPassword">Forgot Password?</a>

</html>