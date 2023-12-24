<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(!isset($competition))
        @foreach($competitions as $competition)
        <a href="lomba/{{$competition->name}}">
            {{$competition->name}}
        </a><br>
        @endforeach
    @else
        <form method="POST">
            @csrf
            @for ($i = 0; $i < $competition->peserta; $i++)
                <input type="text" name="peserta{{$i}}" placeholder="peserta{{$i + 1}}">
            @endfor
            {{$errors}}
            <button type="submit">Submit</button>
        </form>
    @endif
</body>
</html>