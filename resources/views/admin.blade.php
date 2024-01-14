<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Jenjang</th>
            <th>Asal Sekolah</th>
        </tr>
        @for ($i = 0; $i < count($users); $i++)
        <tr>
            <td>{{$i+1}}</td>
            <td><a href="/admin/{{$users[$i]->id}}">{{$users[$i]->username}}</a></td>
            <td>{{$users[$i]->jenjang}}</td>
            <td>{{$users[$i]->sekolah}}</td>
        </tr>
        @endfor
    </table>
</body>
</html>