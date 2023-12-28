<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach($teams as $team)
            <a href="/lomba/{{$team->id}}">{{$team->id}}</a><br>
        @endforeach
    </div>
    <form method="POST" action="/add">
        @csrf
        <select name="competitionName">
            <option></option>
            @foreach($competitions as $competition)
            <option name="{{$competition->name}}">{{$competition->name}}</option>
            @endforeach
        </select>
        <button type="submit">tambah</button>
    </form>
</body>
</html>