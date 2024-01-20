<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{$user->email}}<br>
    {{$user->username}}<br>
    {{$user->jenjang}}<br>
    {{$user->sekolah}}<br>
    @foreach ($user->teams as $team)
    <b>{{$team->competition->name . $team->id}}</b><br>
    @foreach ($team->participants as $participant)
    ---{{$participant->name}}<br>
    @endforeach
    @endforeach
    
    <form method="POST" action="/admin/edit">
        @csrf
        Komentar: <textarea name="comment">{{$user->comment}}</textarea><br>
        Status:
        <select name="status">
            <option value="{{$user->status}}">{{$user->status}}</option>
            <option value="Belum">Belum</option>
            <option value="Menunggu">Menunggu</option>
            <option value="Valid">Valid</option>
            <option value="Tidak Valid">Tidak Valid</option>
        </select>
        <input type="hidden" name="id" value="{{$user->id}}">
        <button>save</button>
    </form>
</body>
</html>