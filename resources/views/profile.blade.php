<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Session::has('edit') && Session::get('edit'))
    <form method="POST">
        @csrf
        Username: <input type="text" name="username" value="{{Auth::user()->username}}"> <br>
        Email: <input type="email" name="email" value="{{Auth::user()->email}}"> <br>
        Asal Sekolah: <input type="text" name="sekolah" value="{{Auth::user()->sekolah}}"> <br>
        Lomba:
        <select name="lomba">
            <option>{{Auth::user()->lomba}}</option>
            @foreach(Session::get('competitions') as $competition)
            <option>{{$competition->name}}</option>
            @endforeach
        </select><br>
        <button type="submit">Save</button>
    </form>
    @else
        Username: {{Auth::user()->username}}<br>
        Email: {{Auth::user()->email}}<br>
        Asal Sekolah: {{Auth::user()->sekolah}}<br>
        Lomba: {{Auth::user()->lomba}}
        <form method="POST" action="/profile/edit">
            @csrf
            <button type="submit">Edit</button>
        </form>
    @endif
</body>
</html>