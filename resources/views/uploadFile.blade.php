<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UploadFile</title>
</head>
<body>
    <div>Just page for upload system testing</div>
    <div>{{$nama}}</div>
    <form method="POST" action="/uploads/{{$nama}}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        <input type="submit" value="Upload">
    </form>
</body>
</html>