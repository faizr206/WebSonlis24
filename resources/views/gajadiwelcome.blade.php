<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ url('/css/welcome.css') }}">
</head>

<body class="overflow-hidden">
    <div class="flex justify-center">
        <div class="bg-slate-100 rounded-2xl w-1/6 aspect-square overflow-show relative m-52 justify-center">
            <img src="{{ url('/img/logoUtama.png') }}" alt="">
            <svg viewBox="0 0 200 200" width="200%" class="filler absolute -left-1/2">
                <path fill="#FFFFFF"
                    d="M46,-68C59.1,-63.2,68.9,-49.6,71.7,-35.2C74.5,-20.8,70.4,-5.6,67.2,9C64.1,23.6,61.8,37.6,54.9,50.1C48,62.6,36.4,73.6,22.4,79C8.3,84.5,-8.2,84.4,-22.2,78.8C-36.3,73.3,-47.8,62.3,-58.8,50.5C-69.8,38.6,-80.3,25.8,-81.3,12.3C-82.3,-1.2,-73.9,-15.6,-65.6,-28.5C-57.4,-41.5,-49.5,-53.1,-38.6,-58.9C-27.7,-64.6,-13.9,-64.6,1.3,-66.6C16.5,-68.6,32.9,-72.8,46,-68Z"
                    transform="translate(100 100)" />

            </svg>
        </div>
    </div>
</body>

</html>
