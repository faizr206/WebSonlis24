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
        <input type="hidden" name="team" value="{{$team->id}}">
        @foreach ($team->participants as $participant)
        <input type="text" name="{{$participant->id}}" placeholder="{{$participant->name}}"><br>
        @endforeach
        <button type="submit">save</button>
    </form>
    <form method="POST" action="/addParticipant">
        @csrf
        <input type="hidden" name="team" value="{{$team->id}}">
        <button type="submit">Tambah peserta</button>
    </form>
</body>
</html>