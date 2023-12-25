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
        <div class="flex flex-col items-center justify-center text-3xl z-10 pt-[5vw]">
            <img src="{{ url('img/registration.svg') }}" class="w-[50%] -translate-y-[2vw] pb-[3vw]" alt="">
            <div id="countdown" class="flex justify-center font-montserrat text-[#7fb051]">
                <ul class="w-[75vw] grid grid-cols-7 items-center justify-center">
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
            <div class="w-full">
                <img src="{{ url('/img/batasBawah.png') }}" class="overlap-show w-full">
            </div>
        </div>
        <div class="pt-[2vw] bg-[#def2fd]">
            <h1 class=" text-center text-[6vw] font-sunday text-[#3b73b9] strokeme">COMPETITION
            </h1>
            <div class="relative">
                <img src="{{ url('img/blade1.svg') }}" class="absolute z-30 w-[10vw] drop-shadow-2xl blade1"
                    alt="">
            </div>
            <div
                class="flex flex-row justify-center items-center gap-x-10 font-montserrat font-bold text-3xl text-[#3b73b9] p-5">
                <button href="#">SMP</button>
                <button href="#">SMA</button>
            </div>
            <div id="lombaSMP">
                <div class="bg-[#c4dcae] flex flex-col justify-center items-center" onmouseenter="enterSaintek()"
                    onmouseleave="leaveSaintek()">
                    <img src="{{ url('/img/jenis/saintek.png') }}" alt="" class="w-1/4 mt-5 mb-8">
                    <div class="relative w-full">
                        <div id="one-one" class="absolute w-[10%] drop-shadow-2xl left-[47vw] one-one card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/soccer.png') }}" class="w-full"
                                        alt=""></div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="one-two" class="absolute w-[10%] drop-shadow-2xl left-[45vw] one-two card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/soccer.png') }}" class="w-full"
                                        alt="">
                                </div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="one-three"
                            class="absolute w-[10%] drop-shadow-2xl left-[43vw] z-50 -rotate-12 one-three card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/soccer.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" pt-[20vw]">-</div>
                </div>
                <div class="bg-[#f8e8a0] flex flex-col justify-center items-center" onmouseenter="enterSac()"
                    onmouseleave="leaveSac()">
                    <img src="{{ url('/img/jenis/sac.svg') }}" alt="" class="w-1/4 mt-5 mb-8">
                    <div class="relative w-full">
                        <div id="two-one" class="absolute w-[10%] drop-shadow-2xl left-[47vw] two-one card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/soccer.png') }}" class="w-full"
                                        alt=""></div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="two-two" class="absolute w-[10%] drop-shadow-2xl left-[45vw] two-two card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/soccer.png') }}" class="w-full"
                                        alt="">
                                </div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="two-three"
                            class="absolute w-[10%] drop-shadow-2xl left-[43vw] z-50 -rotate-12 two-three card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/soccer.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" pt-[20vw]">-</div>
                </div>
                <div class="bg-[#cde7f8] flex flex-col justify-center items-center" onmouseenter="enterLang()"
                    onmouseleave="leaveLang()">
                    <img src="{{ url('/img/jenis/lang.svg') }}" alt="" class="w-1/4 mt-5 mb-8">
                    <div class="relative w-full">
                        <div id="three-one" class="absolute w-[10%] drop-shadow-2xl left-[47vw] three-one card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/soccer.png') }}" class="w-full"
                                        alt=""></div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="three-two" class="absolute w-[10%] drop-shadow-2xl left-[45vw] three-two card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/soccer.png') }}" class="w-full"
                                        alt="">
                                </div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="three-three"
                            class="absolute w-[10%] drop-shadow-2xl left-[43vw] z-50 -rotate-12 three-three card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/soccer.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" pt-[20vw]">-</div>
                </div>
                <div class="bg-[#f6e1e9] flex flex-col justify-center items-center" onmouseenter="enterJournal()"
                    onmouseleave="leaveJournal()">
                    <img src="{{ url('/img/jenis/journal.svg') }}" alt="" class="w-1/4 mt-5 mb-8">
                    <div class="relative w-full">
                        <div id="four-one" class="absolute w-[10%] drop-shadow-2xl left-[47vw] four-one card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/soccer.png') }}" class="w-full"
                                        alt=""></div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-two" class="absolute w-[10%] drop-shadow-2xl left-[45vw] four-two card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/soccer.png') }}" class="w-full"
                                        alt="">
                                </div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-three"
                            class="absolute w-[10%] drop-shadow-2xl left-[43vw] z-50 -rotate-12 four-three card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/soccer.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back bg-[#f9db7b] rounded-lg border-[#826541] flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="sacbtn">Daftar</a>
                                    <a href="#" class="sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" pt-[20vw]">-</div>
                </div>
            </div>
        </div>
        <div class="bg-[#c6df91] flex flex-col justify-center items-center rundown">
            <img src="{{ url('img/rundownHeadline.svg') }}" class="w-[40vw] p-[4vw]" alt="">
            <img src="{{ url('img/rundownTemp.svg') }}" class="w-[30%] pb-[10vw]" alt="">
        </div>
        <div class="relative">
            <img src="{{ url('img/batasAtas2.svg') }}" class="absolute z-10 -translate-y-[3vw]" alt="">
            <img src="{{ url('img/background2.svg') }}" class="absolute" alt="">
            <div class="flex flex-col justify-center items-center p-[8vw] ">
                <img src="{{ url('img/trailer.svg') }}" alt="" class=" w-[30%] z-30 ">
                <iframe class=" w-[50vw] h-[28vw] p-[2vw] z-30"
                    src="{{ url('https://www.youtube.com/embed/AEilEiOwFW0') }}"></iframe>
                <img src="{{ url('img/about.svg') }}" alt="" class="z-30 pt-[3vw] pb-[1vw]">
                <div class="font-montserrat text-lg z-30 text-center p-[1vw]">
                    SONIC LINGUISTIC (Show Your Brain on Science and Link Your Imagination on Language, Sport, Art,
                    Culture, and Journalistic) dahulunya merupakan acara terpisah yaitu Sonic dan Linguistic, keduanya
                    merupakan acara yang diselenggarakan mulai tahun 2002 dan digabung menjadi SONIC LINGUISTIC pada
                    tahun 2008. Acara tahunan milik MAN Insan Cendekia Serpong ini mencakup berbagai kompetisi dalam
                    empat bidang, yaitu Ilmu Pengetahuan dan Teknologi (IPTEK), Bahasa, Jurnalistik, dan SAC (Sport,
                    Art, and Culture).<br><br>
                    SONIC LINGUISTIC 2024 akan menghadirkan 19 lomba dari keempat bidang tersebut dan dapat diikuti oleh
                    seluruh pelajar se-Indonesia untuk turut berpartisipasi dan menyalurkan bakatnya dalam acara ini
                    sebagai sebuah modal pengalaman dan pengetahuan untuk turut andil dalam majunya negara Indonesia.
                </div>
                <img src="{{ url('img/aboutBawah.svg') }}" alt="" class="z-30 p-[1vw]">
            </div>
        </div>
        <script src="{{ url('/js/home.js') }}"></script>
</body>

</html>
