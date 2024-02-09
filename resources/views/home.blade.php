<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ url('img/logoIcon.ico') }}">
    <link rel="stylesheet" href="{{ url('/css/home.css') }}">
    <script src="https://kit.fontawesome.com/e2e4af9857.js" crossorigin="anonymous"></script>
</head>

<body class="font-[montserrat] bg-[#edf1be] overflow-x-hidden">

    {{-- @yield('navbar') --}}
    <nav class="h-15 flex justify-center items-center lg:pt-10 w-full sticky top-0 lg:fixed drop-shadow-sm"
        style="z-index: 100708">
        <div class="nav-cont bg-white w-full h-full lg:w-4/6 xl:w-1/2 lg:rounded-full lg:h-12 px-5">
            <ul
                class=" lg:grid lg:grid-cols-5 lg:items-center space-y-2 lg:space-y-0 lg:justify-between h-full py-3 lg:py-0 px-4 lg:px-10 font-bold ">
                <li class="nav-logo  sm:max-md:order-first grid grid-cols-2 lg:flex  justify-center  items-center ">
                    <div class="nav-sm-left lg:flex lg:items-center  items-start lg:justify-center ">
                        <a href="#home" class="flex justify-start items-center gap-2 ">
                            <span class="hidden lg:flex ">
                                <span
                                    class="h-[85px] w-[85px] hover:h-[95px] hover:w-[95px] transition-all lg:-m-10 duration-300 bg-white rounded-full drop-shadow-lg grid place-content-center items-center">
                                    <img src="{{ url('/img/logoUtama.png') }}" alt="SL24"
                                        class="w-[70px] hover:w-[65px] transition-all">
                                </span></span>
                            <span class="lg:hidden"><img src="{{ url('/img/logoUtama.png') }}" alt="SL24"
                                    class="h-14"></span>
                            <span class="lg:hidden ">
                                <h1 class="font-bold font-sans text-xl">Sonic Linguistic</h1>
                            </span>
                        </a>
                    </div>
                    <div class="nav-sm-right lg:hidden flex justify-end items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                        </svg>
                    </div>
                </li>
                <div
                    class="nav-left hidden lg:col-span-2 lg:flex space-y-2 lg:space-y-0 lg:flex-row flex-col lg:items-center lg:justify-center w-full lg:order-first gap-4 lg:gap-5 my-0 ms-1 me-1">
                    <li><a href=/home
                            class="lg:hover:bg-slate-200 rounded-lg  duration-200 p-1  transition-all ">HOME</a>
                    </li>
                    <li><a href="#competitions"
                            class="lg:hover:bg-slate-200 rounded-lg duration-200 p-1  transition-all ">COMPETITIONS</a>
                    </li>
                </div>
                @if (Auth::check())
                    <div
                        class="nav-right hidden lg:col-span-2 lg:flex space-y-2 lg:space-y-0 lg:flex-row flex-col lg:items-center lg:justify-center lg:order-last gap-4 lg:gap-5 my-0 ms-1 me-0">
                        <li><a href="/dashboard"
                                class=" lg:hover:bg-slate-200  rounded-lg duration-200 p-1  ">DASHBOARD</a>
                        </li>
                        <li>
                            <form action="/logout" method="post">@csrf<button type="submit"
                                    class="lg:hover:bg-slate-200 rounded-lg duration-200 p-1  transition-all">LOGOUT</button>
                            </form>
                        </li>
                    </div>
                @else
                    <div
                        class="nav-right hidden lg:col-span-2 lg:flex space-y-2 lg:space-y-0 lg:flex-row flex-col lg:items-center lg:justify-center lg:order-last gap-4 lg:gap-5 my-0 ms-1 me-0">
                        <li><a href="/register"
                                class=" lg:hover:bg-slate-200  rounded-lg duration-200 p-1  ">REGISTER</a>
                        </li>
                        <li><a href="/login" class=" lg:hover:bg-slate-200 rounded-lg duration-200 p-1 ">LOGIN</a>
                        </li>
                    </div>
                @endif
            </ul>
        </div>
    </nav>

    <div class="flex flex-col justify-center items-center w-full h-[70vw] bg-cover bg-center"
        style="background-image: url({{ url('img/welcomePage.png') }})" id="home">
        <img src="{{ url('/img/headline.png') }}" class="res w-3/5 -translate-y-1/4" alt="">
        <a href="/register"
            class=" text-[5vw] bg-[#f6a192] rounded-3xl px-[2vw] drop-shadow-lg res text-white font-motley">- REGISTER
            NOW
            -
        </a>
    </div>
    <div class="relative">
        <img src="{{ url('/img/cntAtas.png') }}" class="absolute  -translate-y-[5vw] w-[200vw]" alt="">
        <div class="flex flex-col items-center justify-center md:text-3xl text-[3vw] z-10 pt-[5vw] pb-[8vw]">
            <div class="absolute "></div>
            <img src="{{ url('img/registration.svg') }}" class="res w-[50%] -translate-y-[2vw] pb-0 md:pb-[3vw]"
                alt="">
            <div id="countdownn" class="flex justify-center font-motley text-[#7fb051]">
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
            <div id="content" class="font-motley text-[#7fb051] text-[6vw] md:text-[8vw] emoji hidden">
                CLOSED
            </div>
        </div>
        <div class="relative">
            <img src="{{ url('/img/cntAtas.png') }}" class="absolute z-50 rotate-180 -translate-y-[15vw] w-[200vw]"
                alt="">
        </div>
        <div id="competitions" class="pt-[7vw] bg-[#def2fd] relative"
            style="background-image: url({{ url('img/gridbg.png') }})">
            <div class="flex items-center justify-center">
                <img src="{{ url('img/competition.svg') }}" class="w-2/3" alt="">
            </div>
            <h1 class="hidden text-center text-[6vw] font-sunday text-[#3b73b9] z-50 res">COMPETITION
            </h1>
            <div class="relative hidden">
                <img src="{{ url('img/blade1.svg') }}" class="absolute z-30 w-[10vw] drop-shadow-2xl blade1"
                    alt="">
                <img src="{{ url('img/blade1.svg') }}" class="absolute z-30 w-[10vw] drop-shadow-2xl blade2"
                    alt="">
            </div>
            <div
                class="flex flex-row justify-center items-center gap-x-7 md:gap-x-10 font-montserrat font-bold pt-5 pb-3">
                <button class="milih" id="psmp" href="#" onclick="smp()">SMP</button>
                <button class="milih" id="psma" href="#" onclick="sma()">SMA</button>
                <button class="milih" id="pumum" href="#" onclick="umum()">UMUM</button>
            </div>
            <div id="">
                <div class="bg-[#c4dcae]  flex flex-col justify-center items-center" onmouseenter="enterSaintek()"
                    onmouseleave="leaveSaintek()">
                    <img src="{{ url('/img/jenis/saintek.png') }}" alt=""
                        class="res w-5/12 md:w-1/3 lg:w-1/4 mt-5 mb-6 lg:mb-8">
                    <div class="relative w-full">
                        <div id="one-one"
                            class=" absolute lombacard drop-shadow-xl left-[40vw] sm:left-[41vw] md:left-[42vw] lg:left-[43vw] one-one card">
                            <div class="content">
                                <div class="front">
                                    <div id="one-one-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/scicomp.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back rounded-lg saintek flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/saintekBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn saintekbtn">Daftar</a>
                                    <a href="/juknis/Science%20Competition.pdf" class="lombabtn saintekbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="one-two"
                            class="absolute lombacard drop-shadow-xl left-[41vw] sm:left-[42vw] md:left-[43vw] lg:left-[44vw] one-two card">
                            <div class="content">
                                <div class="front">
                                    <div id="one-two-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/socomp.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back rounded-lg saintek flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/saintekBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn saintekbtn">Daftar</a>
                                    <a href="/juknis/Social%20Competition.pdf" class="lombabtn saintekbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="one-three"
                            class="absolute lombacard drop-shadow-xl left-[42vw] sm:left-[43vw] md:left-[44vw] lg:left-[45vw] z-50 -rotate-12 one-three card">
                            <div class="content">
                                <div class="front">
                                    <div id="one-three-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/mathcomp.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back saintek rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/saintekBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn saintekbtn">Daftar</a>
                                    <a href="/juknis/Mathematics%20Competition.pdf"
                                        class="lombabtn saintekbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="one-four"
                            class="absolute lombacard drop-shadow-xl left-[43vw] sm:left-[44vw] md:left-[45vw] lg:left-[46vw] z-50 -rotate-12 one-four card">
                            <div class="content">
                                <div class="front">
                                    <div id="one-four-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/saq.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back saintek rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/saintekBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn saintekbtn">Daftar</a>
                                    <a href="/juknis/Smart%20and%20Quick.pdf" class="lombabtn saintekbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" pt-[25vw] sm:pt-[23vw] md:pt-[20vw]">-</div>
                </div>

                <div class="bg-[#f6e1e9] flex flex-col justify-center items-center" onmouseenter="enterJournal()"
                    onmouseleave="leaveJournal()">
                    <img src="{{ url('/img/jenis/journal.png') }}" alt=""
                        class="res w-5/12 md:w-1/3 lg:w-1/4 mt-5 mb-6 lg:mb-8">
                    <div class="relative w-full">
                        <div id="two-one"
                            class="absolute lombacard drop-shadow-xl left-[40vw] sm:left-[41vw] md:left-[42vw] lg:left-[43vw] two-one card">
                            <div class="content">
                                <div class="front">
                                    <div id="two-one-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/shortmov.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back journal rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/journalBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn journalbtn">Daftar</a>
                                    <a href="/juknis/Short%20Movie.pdf" class="lombabtn journalbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="two-two"
                            class="absolute lombacard drop-shadow-xl left-[41vw] sm:left-[42vw] md:left-[43vw] lg:left-[44vw] two-two card">
                            <div class="content">
                                <div class="front">
                                    <div id="two-two-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP & SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/kti.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back journal rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/journalBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn journalbtn">Daftar</a>
                                    <a href="/juknis/Lomba%20Karya%20Inovasi.pdf"
                                        class="lombabtn journalbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="two-three"
                            class="absolute lombacard drop-shadow-xl left-[42vw] sm:left-[43vw] md:left-[44vw] lg:left-[45vw] z-50 -rotate-12 two-three card">
                            <div class="content">
                                <div class="front">
                                    <div id="two-three-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            UMUM</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/photo.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back journal rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/journalBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn journalbtn">Daftar</a>
                                    <a href="/juknis/Photography.pdf" class="lombabtn journalbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="two-four"
                            class="absolute lombacard drop-shadow-xl left-[43vw] sm:left-[44vw] md:left-[45vw] lg:left-[46vw] z-50 -rotate-12 two-four card">
                            <div class="content">
                                <div class="front">
                                    <div id="two-four-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP & SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/essay.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back journal rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/journalBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn journalbtn">Daftar</a>
                                    <a href="/Essay%20Writing%20Competition.pdf"
                                        class="lombabtn journalbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" pt-[25vw] sm:pt-[23vw] md:pt-[20vw]">-</div>
                </div>

                <div class="bg-[#f8e8a0] flex flex-col justify-center items-center" onmouseenter="enterSac()"
                    onmouseleave="leaveSac()">
                    <img src="{{ url('/img/jenis/sac.png') }}" alt=""
                        class="res w-5/12 md:w-1/3 lg:w-1/4 mt-5 mb-6 lg:mb-8">
                    <div class="relative w-full">
                        <div id="three-one"
                            class="absolute lombacard drop-shadow-xl left-[39vw] sm:left-[40vw] md:left-[41vw] lg:left-[42vw] three-one card">
                            <div class="content">
                                <div class="front">
                                    <div id="three-one-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP & SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/muscov.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back sac rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="/register" class="lombabtn sacbtn">Daftar</a>
                                    <a href="/juknis/Music%20Cover.pdf" class="lombabtn sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="three-two"
                            class="absolute lombacard drop-shadow-xl left-[40vw] sm:left-[41vw] md:left-[42vw] lg:left-[43vw] three-two card">
                            <div class="content">
                                <div class="front">
                                    <div id="three-two-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP & SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/ml.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back sac rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="/register" class="lombabtn sacbtn">Daftar</a>
                                    <a href="/juknis/Mobile%20Legend.pdf" class="lombabtn sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="three-three"
                            class="absolute lombacard drop-shadow-xl left-[41vw] sm:left-[42vw] md:left-[43vw] lg:left-[44vw] z-50 -rotate-12 three-three card">
                            <div class="content">
                                <div class="front">
                                    <div id="three-three-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/soccer.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back sac rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="/register" class="lombabtn sacbtn">Daftar</a>
                                    <a href="/juknis/Soccer.pdf" class="lombabtn sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="three-four"
                            class="absolute lombacard drop-shadow-xl left-[42vw] sm:left-[43vw] md:left-[44vw] lg:left-[45vw] z-50 -rotate-12 three-four card">
                            <div class="content">
                                <div class="front">
                                    <div id="three-four-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP & SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/ratohjaroe.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back sac rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="/register" class="lombabtn sacbtn">Daftar</a>
                                    <a href="/juknis/Ratoeh%20Jaroe.pdf" class="lombabtn sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="three-five"
                            class="absolute lombacard drop-shadow-xl left-[43vw] sm:left-[44vw] md:left-[45vw] lg:left-[46vw] z-50 -rotate-12 three-five card">
                            <div class="content">
                                <div class="front">
                                    <div id="three-five-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/pramuka.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back sac rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="/register" class="lombabtn sacbtn">Daftar</a>
                                    <a href="/juknis/Pramuka.pdf" class="lombabtn sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sacBorder" class=" sacBorder pt-[25vw] sm:pt-[23vw] md:pt-[20vw]">-</div>
                </div>

                <div class="bg-[#cde7f8] flex flex-col justify-center items-center" onmouseenter="enterLang()"
                    onmouseleave="leaveLang()">
                    <img src="{{ url('/img/jenis/language.png') }}" alt=""
                        class="res w-5/12 md:w-1/3 lg:w-1/4 mt-5 mb-6 lg:mb-8">
                    <div class="relative w-full">
                        <div id="four-one"
                            class="absolute lombacard drop-shadow-xl left-[39vw] sm:left-[40vw] md:left-[41vw] lg:left-[42vw] four-one card">
                            <div class="content">
                                <div class="front">
                                    <div id="four-one-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP & SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/speech.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn languagebtn">Daftar</a>
                                    <a href="/juknis/Speech%20Contest.pdf" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-two"
                            class="absolute lombacard drop-shadow-xl left-[40vw] sm:left-[41vw] md:left-[42vw] lg:left-[43vw] four-two card">
                            <div class="content">
                                <div class="front">
                                    <div id="four-two-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP & SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/stortel.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn languagebtn">Daftar</a>
                                    <a href="/juknis/Story-telling.pdf" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-three"
                            class="absolute lombacard drop-shadow-xl left-[41vw] sm:left-[42vw] md:left-[43vw] lg:left-[44vw] z-50 -rotate-12 four-three card">
                            <div class="content">
                                <div class="front">
                                    <div id="four-three-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP & SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/monolog.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn languagebtn">Daftar</a>
                                    <a href="/juknis/Monolog.pdf" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-four"
                            class="absolute lombacard drop-shadow-xl left-[42vw] sm:left-[43vw] md:left-[44vw] lg:left-[45vw] z-50 -rotate-12 four-four card">
                            <div class="content">
                                <div class="front">
                                    <div id="four-four-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP & SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/khitobah.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn languagebtn">Daftar</a>
                                    <a href="/juknis/Khitobah.pdf" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-five"
                            class="absolute lombacard drop-shadow-xl left-[43vw] sm:left-[44vw] md:left-[45vw] lg:left-[46vw] z-50 -rotate-12 four-five card">
                            <div class="content">
                                <div class="front">
                                    <div id="four-five-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMP</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/puisi.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn languagebtn">Daftar</a>
                                    <a href="/juknis/Cipta%20Baca%20Puisi.pdf" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-six"
                            class="absolute lombacard drop-shadow-xl left-[44vw] sm:left-[45vw] md:left-[46vw] lg:left-[47vw] z-50 -rotate-12 four-six card">
                            <div class="content">
                                <div class="relative front">
                                    <div id="four-six-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/ldbi.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn languagebtn">Daftar</a>
                                    <a href="/juknis/LDBI.pdf" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-seven"
                            class="absolute lombacard drop-shadow-xl left-[44vw] sm:left-[45vw] md:left-[46vw] lg:left-[47vw] z-50 -rotate-12 four-seven card">
                            <div class="content">
                                <div class="front">
                                    <div id="four-seven-d"
                                        class="absolute w-full h-full text-center align-middle text-black top-1/3 font-bold">
                                        <div
                                            class="flex items-center justify-center p-1 mx-1 text-sm md:text-base bg-white rounded-md">
                                            SMA</div>
                                    </div>
                                    <img src="{{ url('/img/lomba/nsdc.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="/register" class="lombabtn languagebtn">Daftar</a>
                                    <a href="/juknis/NSDC.pdf" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="langBorder" class=" langBorder pt-[25vw] sm:pt-[23vw] md:pt-[20vw]">-</div>
                </div>
            </div>
        </div>
        <div class="bg-[#c6df91] flex flex-col justify-center items-center rundown">
            <img src="{{ url('img/rundownHeadline.svg') }}" class="res  w-[40vw] p-[2vw] m-[2vw]" alt="">
            <img src="{{ url('img/rundownTemp.png') }}" class="w-[80vw] sm:w-[60vw] md:w-[60vw] pb-[10vw]"
                alt="">
        </div>
        <div class="relative">
            <img src="{{ url('img/batasAtas2.svg') }}" class="absolute z-10 -translate-y-[2.3vw]" alt="">
            <img src="{{ url('img/background2.svg') }}"
                class="absolute min-w-[163vw] sm:min-w-[153vw] md:min-w-[122vw] lg:min-w-[98vw]" alt="">
            <div class="flex flex-col justify-center items-center p-[8vw]">
                <img src="{{ url('img/trailer.svg') }}" alt="" class="res w-[30%] z-30 ">
                <iframe class="w-[70vw] h-[40vw] md:w-[50vw] md:h-[28vw] p-[2vw] z-30"
                    src="{{ url('https://www.youtube.com/embed/AEilEiOwFW0') }}"></iframe>
                <img src="{{ url('img/about.svg') }}" alt="" class=" z-30 pt-[3vw] pb-[1vw]">
                <div
                    class=" font-montserrat text-[2.5vw] sm:text-[2.3vw] md:text-[2vw] lg:text-base xl:text-lg z-30 text-center p-[1vw]">
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
                <img src="{{ url('img/aboutBawah.svg') }}" alt="" class="z-30 p-[2vw] md:p-[1vw]">
            </div>
        </div>
        <div class="flex items-center justify-center h-auto w-full z-50 bg-[#aee1f0]">
            <img src="{{ url('img/batasBawah2.svg') }}" class="w-full z-50 min-w-[50rem]" alt="">
        </div>
        <footer class="bg-[#156c94] flex flex-col text-sm md:text-base justify-center items-center">
            <div class="flex flex-col text-white lg:flex-row justify-between w-3/4 mt-[50px]">
                <div class="foo-contact text-center lg:text-left lg:w-1/4 mb-8">
                    <h3
                        class="font-bold text-xl md:text-4xl text-white mb-4 lg:hover:text-slate-200 duration-200 lg:decoration-8 transition-all decoration-[#ecb573]">
                        CONTACT</h3>
                    <a href="https://wa.me/6281269983488" target="blank">
                        <i class="fa-solid fa-phone"></i>
                        081269983488 (Luthfi)
                    </a>
                    <br>
                    <a href="mailto:publikasisonlis@gmail.com" target="blank">
                        <i class="fa-solid fa-envelope me-1"></i>
                        publikasisonlis@gmail.com
                    </a>
                    <p class="mt-2">
                        <i class="fa-solid fa-location-dot me-1"></i>
                        Sektor XI BSD, Jl. Cendekia No.1, Serpong, Kec. Serpong, Kota Tangerang Selatan, Banten
                        15310
                    </p>
                    </ul>
                </div>
                <div class="foo-follow-us text-center lg:w-1/4 mb-8">
                    <h3
                        class="font-bold text-xl md:text-4xl text-white mb-3 lg:hover:text-slate-200 duration-200 lg:decoration-8 transition-all decoration-[#df8583]">
                        FOLLOW US</h3>
                    <ul class="text-2xl md:text-3xl mt-5 mb-5">
                        <a href="https://www.instagram.com/soniclinguistic"
                            class=" hover:text-white transition-all duration-300" target="blank"><i
                                class="fa-brands fa-instagram me-2"></i></a>
                        <a href="https://twitter.com/soniclinguistic"
                            class=" hover:text-white transition-all duration-300" target="blank"><i
                                class="fa-brands fa-x-twitter me-1"></i></a>
                        <a href="https://www.youtube.com/c/SonicLinguistic"
                            class=" hover:text-white transition-all duration-300" target="blank"><i
                                class="fa-brands fa-youtube me-1"></i></a>
                        <a href="https://www.tiktok.com/@soniclinguistic"
                            class=" hover:text-white transition-all duration-300" target="blank"><i
                                class="fa-brands fa-tiktok me-2"></i></a>
                    </ul>
                </div>
                <div class="foo-location items-center justify-center flex flex-col lg:w-1/4 mb-8">
                    <h3
                        class="font-bold text-center lg:text-end text-xl md:text-4xl text-white mb-5 lg:hover:text-slate-200 duration-200 lg:decoration-8 transition-all decoration-[#a0ba74]">
                        LOCATION</h3>
                    <iframe class=" rounded-lg drop-shadow-lg"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5269162085324!2d106.67799617460537!3d-6.325690961896418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e51f1977cac5%3A0x4e43fafd7e8d0489!2sMAN%20Insan%20Cendekia%20Serpong!5e0!3m2!1sen!2sid!4v1704569991566!5m2!1sen!2sid"
                        width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="flex flex-row gap-5 mt-5">
                <img src="{{ url('/img/logo-3.png') }}" alt="Logo Kemenag" class="h-[2.5rem]">
                <img src="{{ url('/img/logo-2.png') }}" alt="Logo MAN IC" class="h-[2.2rem]">
                <img src="{{ url('/img/logo-4.png') }}" alt="Logo OS Cendekia" class="h-[2.2rem]">
            </div>
            <p class="mt-3 mb-5 text-white">&copy; Copyright SONIC LINGUISTIC 2024</p>
        </footer>

        <script src="{{ url('/js/home.js') }}"></script>
</body>

</html>
