<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ url('/css/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css"
        integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-[montserrat] bg-[#edf1be] overflow-x-hidden">
    <div class="flex justify-center items-center w-full h-[70vw] bg-cover"
        style="background-image: url('/img/welcomePage.png')">
        <img src="{{ url('/img/headline.png') }}" class="w-3/5 -translate-y-1/4" alt="">
    </div>
    <div class="relative">
        <img src="{{ url('/img/batasAtas.png') }}" class="absolute -translate-y-[5vw] w-[200vw]" alt="">
        <div class="container text-3xl z-10 pt-[5vw]">
            <h1 id="headline" class="text-center pb-[3vw]">REGISTRATION CLOSED IN</h1>
            <div id="countdown" class="flex justify-center">
                <ul class="w-3/4 grid grid-cols-7 items-center justify-center">
                    <li class="countdown"><span class="cntnum" id="days"></span>days</li>
                    <li class="countdown">/</li>
                    <li class="countdown"><span class="cntnum" id="hours"></span>Hours</li>
                    <li class="countdown">/</li>
                    <li class="countdown"><span class="cntnum" id="minutes"></span>Minutes</li>
                    <li class="countdown">/</li>
                    <li class="countdown"><span class="cntnum" id="seconds"></span>Seconds</li>
                </ul>
            </div>
            <div id="content" class="emoji hidden">
                <span>🥳</span>
                <span>🎉</span>
                <span>🎂</span>
            </div>
        </div>
        <div class="">
            <div class="w-full overflow-hidden">
                <img src="{{ url('/img/batasBawah.png') }}" class="overlap-show w-full">
            </div>
        </div>
        <div class="pt-[2vw] bg-[#def2fd]">
            <h1 class="bg-red-900 text-center text-[6vw] font-sunday text-[#3b73b9] strokeme">COMPETITION
            </h1>
            <div
                class="flex flex-row justify-center items-center gap-x-10 font-montserrat font-bold text-3xl text-[#3b73b9]">
                <button href="#">SMP</button>
                <button href="#">SMA</button>
            </div>
            <div id="lombaSMP">
                <div class="bg-[#c4dcae] flex flex-col justify-center items-center">
                    <img src="{{ url('/img/jenis/saintek.png') }}" alt="" class="w-1/4 mt-5 mb-8">
                    <div class="relative w-full justify-center">
                        <div class="absolute w-[10%] drop-shadow-2xl one">
                            <img src="{{ url('/img/lomba/soccer.png') }}" class="w-full" alt="">
                        </div>
                    </div>
                    <div class=" pt-[20vw]">-</div>
                </div>
            </div>
        </div>
        <script src="{{ url('/js/home.js') }}"></script>
</body>

</html>
