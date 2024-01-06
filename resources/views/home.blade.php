<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ url('/css/home.css') }}">
    <script src="https://kit.fontawesome.com/e2e4af9857.js" crossorigin="anonymous"></script>
</head>

<body class="font-[montserrat] bg-[#edf1be] overflow-x-hidden">

    {{-- @yield('navbar') --}}
    <nav class="h-15 flex justify-center items-center lg:pt-10 w-full sticky top-0 lg:fixed drop-shadow-sm" style="z-index: 100708">
        <div class="nav-cont bg-white w-full h-full lg:w-1/2 lg:rounded-full lg:h-12 px-5">
            <ul class=" lg:flex lg:justify-between h-full py-3 px-4 lg:px-10 font-bold">
                <li class="nav-logo sm:max-md:order-first flex justify-between items-center">
                    <div class="nav-sm-left">
                        <a href="#home" class="flex justify-start items-center gap-2">
                            <span class="hidden lg:flex">
                                <span class="h-[85px] w-[85px] hover:h-[95px] hover:w-[95px] transition-all duration-300 bg-white rounded-full drop-shadow-lg grid place-content-center items-center">
                                    <img src="{{ url('/img/logoUtama.png') }}" alt="SL24" class="w-[70px] hover:w-[65px] transition-all" >
                                </span></span>
                            <span class="lg:hidden"><img src="{{ url('/img/logoUtama.png') }}" alt="SL24" class="h-14"></span>
                            <span class="lg:hidden">
                                <h1 class="font-bold font-sans text-xl">Sonic Linguistic</h1>
                            </span>
                        </a>
                    </div>
                    <div class="nav-sm-right lg:hidden flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                        </svg>
                    </div>
                </li>
                <div
                    class="nav-left hidden lg:flex flex lg:flex-row flex-col lg:items-center lg:order-first gap-4 lg:gap-10 my-3 ms-1 me-1">
                    <li><a href=#home class="lg:hover:line-through lg:decoration-4 transition-all decoration-[#ecb573]">HOME</a></li>
                    <li><a href="#competition" class="lg:hover:line-through lg:decoration-4 transition-all decoration-[#acc8e8]">COMPETITIONS</a></li>
                </div>
                <div
                    class="nav-right hidden lg:flex flex lg:flex-row flex-col lg:items-center lg:order-last gap-4 lg:gap-10 my-3 ms-1 me-4">
                    <li><a href="" class="underline underline-offset-4 decoration-wavy decoration-2 lg:no-underline lg:hover:line-through lg:decoration-solid lg:decoration-4 decoration-[#df8583]">REGISTER</a></li>
                    <li><a href="" class="underline underline-offset-4 decoration-wavy decoration-2 lg:no-underline lg:hover:line-through lg:decoration-solid lg:decoration-4 decoration-[#9cb571]">LOGIN</a></li>
                </div>
            </ul>
        </div>
    </nav>

    <div class="flex justify-center items-center w-full h-[70vw] bg-cover"
        style="background-image: url({{ url('img/welcomePage.png') }})" id="home">
        <img src="{{ url('/img/headline.png') }}" class="res w-3/5 -translate-y-1/4" alt="">
    </div>
    <div class="relative">
        <img src="{{ url('/img/batasAtas.png') }}" class="absolute -translate-y-[5vw] w-[200vw]" alt="">
        <div class="flex flex-col items-center justify-center md:text-3xl text-[3vw] z-10 pt-[5vw]">
            <img src="{{ url('img/registration.svg') }}" class="res w-[50%] -translate-y-[2vw] pb-0 md:pb-[3vw]"
                alt="">
            <div id="countdown" class="flex justify-center font-motley text-[#7fb051]">
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
        <div class="" id="competition">
            <div class="w-full">
                <img src="{{ url('/img/batasBawah.png') }}" class="overlap-show w-full">
            </div>
        </div>
        <div class="pt-[2vw] bg-[#def2fd]">
            <h1 class=" text-center text-[6vw] font-sunday text-[#3b73b9] strokeme res">COMPETITION
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
            <div>
                <div class="bg-[#c4dcae]  flex flex-col justify-center items-center" onmouseenter="enterSaintek()"
                    onmouseleave="leaveSaintek()">
                    <img src="{{ url('/img/jenis/saintek.png') }}" alt=""
                        class="res w-5/12 md:w-1/3 lg:w-1/4 mt-5 mb-6 lg:mb-8">
                    <div class="relative w-full">
                        <div id="one-one"
                            class=" absolute lombacard drop-shadow-xl left-[40vw] sm:left-[41vw] md:left-[42vw] lg:left-[43vw] one-one card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/scicomp.png') }}" class="w-full"
                                        alt=""></div>
                                <div
                                    class="back rounded-lg saintek flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/saintekBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn saintekbtn">Daftar</a>
                                    <a href="#" class="lombabtn saintekbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="one-two"
                            class="absolute lombacard drop-shadow-xl left-[41vw] sm:left-[42vw] md:left-[43vw] lg:left-[44vw] one-two card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/socomp.png') }}" class="w-full"
                                        alt="">
                                </div>
                                <div
                                    class="back rounded-lg saintek flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/saintekBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn saintekbtn">Daftar</a>
                                    <a href="#" class="lombabtn saintekbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="one-three"
                            class="absolute lombacard drop-shadow-xl left-[42vw] sm:left-[43vw] md:left-[44vw] lg:left-[45vw] z-50 -rotate-12 one-three card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/mathcomp.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back saintek rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/saintekBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn saintekbtn">Daftar</a>
                                    <a href="#" class="lombabtn saintekbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="one-four"
                            class="absolute lombacard drop-shadow-xl left-[43vw] sm:left-[44vw] md:left-[45vw] lg:left-[46vw] z-50 -rotate-12 one-four card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/saq.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back saintek rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/saintekBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn saintekbtn">Daftar</a>
                                    <a href="#" class="lombabtn saintekbtn">Juknis</a>
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
                                <div class="front"><img src="{{ url('/img/lomba/shortmov.png') }}" class="w-full"
                                        alt=""></div>
                                <div
                                    class="back journal rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/journalBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn journalbtn">Daftar</a>
                                    <a href="#" class="lombabtn journalbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="two-two"
                            class="absolute lombacard drop-shadow-xl left-[41vw] sm:left-[42vw] md:left-[43vw] lg:left-[44vw] two-two card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/kti.png') }}" class="w-full"
                                        alt="">
                                </div>
                                <div
                                    class="back journal rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/journalBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn journalbtn">Daftar</a>
                                    <a href="#" class="lombabtn journalbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="two-three"
                            class="absolute lombacard drop-shadow-xl left-[42vw] sm:left-[43vw] md:left-[44vw] lg:left-[45vw] z-50 -rotate-12 two-three card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/photo.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back journal rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/journalBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn journalbtn">Daftar</a>
                                    <a href="#" class="lombabtn journalbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="two-four"
                            class="absolute lombacard drop-shadow-xl left-[43vw] sm:left-[44vw] md:left-[45vw] lg:left-[46vw] z-50 -rotate-12 two-four card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/essay.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back journal rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/journalBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn journalbtn">Daftar</a>
                                    <a href="#" class="lombabtn journalbtn">Juknis</a>
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
                                <div class="front"><img src="{{ url('/img/lomba/muscov.png') }}" class="w-full"
                                        alt=""></div>
                                <div
                                    class="back sac rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="lombabtn sacbtn">Daftar</a>
                                    <a href="#" class="lombabtn sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="three-two"
                            class="absolute lombacard drop-shadow-xl left-[40vw] sm:left-[41vw] md:left-[42vw] lg:left-[43vw] three-two card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/ml.png') }}" class="w-full"
                                        alt="">
                                </div>
                                <div
                                    class="back sac rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="lombabtn sacbtn">Daftar</a>
                                    <a href="#" class="lombabtn sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="three-three"
                            class="absolute lombacard drop-shadow-xl left-[41vw] sm:left-[42vw] md:left-[43vw] lg:left-[44vw] z-50 -rotate-12 three-three card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/soccer.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back sac rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="lombabtn sacbtn">Daftar</a>
                                    <a href="#" class="lombabtn sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="three-four"
                            class="absolute lombacard drop-shadow-xl left-[42vw] sm:left-[43vw] md:left-[44vw] lg:left-[45vw] z-50 -rotate-12 three-four card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/ratohjaroe.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back sac rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="lombabtn sacbtn">Daftar</a>
                                    <a href="#" class="lombabtn sacbtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="three-five"
                            class="absolute lombacard drop-shadow-xl left-[43vw] sm:left-[44vw] md:left-[45vw] lg:left-[46vw] z-50 -rotate-12 three-five card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/pramuka.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back sac rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/sacBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
                                    <a href="#" class="lombabtn sacbtn">Daftar</a>
                                    <a href="#" class="lombabtn sacbtn">Juknis</a>
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
                                <div class="front"><img src="{{ url('/img/lomba/speech.png') }}" class="w-full"
                                        alt=""></div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn languagebtn">Daftar</a>
                                    <a href="#" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-two"
                            class="absolute lombacard drop-shadow-xl left-[40vw] sm:left-[41vw] md:left-[42vw] lg:left-[43vw] four-two card">
                            <div class="content">
                                <div class="front"><img src="{{ url('/img/lomba/stortel.png') }}" class="w-full"
                                        alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn languagebtn">Daftar</a>
                                    <a href="#" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-three"
                            class="absolute lombacard drop-shadow-xl left-[41vw] sm:left-[42vw] md:left-[43vw] lg:left-[44vw] z-50 -rotate-12 four-three card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/monolog.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn languagebtn">Daftar</a>
                                    <a href="#" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-four"
                            class="absolute lombacard drop-shadow-xl left-[42vw] sm:left-[43vw] md:left-[44vw] lg:left-[45vw] z-50 -rotate-12 four-four card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/khitobah.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn languagebtn">Daftar</a>
                                    <a href="#" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-five"
                            class="absolute lombacard drop-shadow-xl left-[43vw] sm:left-[44vw] md:left-[45vw] lg:left-[46vw] z-50 -rotate-12 four-five card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/puisi.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn languagebtn">Daftar</a>
                                    <a href="#" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-six"
                            class="absolute lombacard drop-shadow-xl left-[44vw] sm:left-[45vw] md:left-[46vw] lg:left-[47vw] z-50 -rotate-12 four-six card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/ldbi.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn languagebtn">Daftar</a>
                                    <a href="#" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                        <div id="four-seven"
                            class="absolute lombacard drop-shadow-xl left-[44vw] sm:left-[45vw] md:left-[46vw] lg:left-[47vw] z-50 -rotate-12 four-seven card">
                            <div class="content">
                                <div class="front">
                                    <img src="{{ url('/img/lomba/nsdc.png') }}" class="w-full" alt="">
                                </div>
                                <div
                                    class="back language rounded-lg flex flex-col gap-[1.5vw] items-center justify-center border-[0.3vw] w-full h-full">
                                    <img src="{{ url('/img/jenis/languageBorder.svg') }}"
                                        class="w-[90%] -z-30 absolute" alt="">
                                    <a href="#" class="lombabtn languagebtn">Daftar</a>
                                    <a href="#" class="lombabtn languagebtn">Juknis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="langBorder" class=" langBorder pt-[25vw] sm:pt-[23vw] md:pt-[20vw]">-</div>
                </div>
            </div>
        </div>
        <div class="bg-[#c6df91] flex flex-col justify-center items-center rundown">
            <img src="{{ url('img/rundownHeadline.svg') }}" class="res coba w-[40vw] p-[2vw] m-[2vw]"
                alt="">
            <img src="{{ url('img/rundownTemp.svg') }}" class="w-[80vw] sm:w-[60vw] md:w-[40vw] pb-[10vw]"
                alt="">
        </div>
        <div class="relative">
            <img src="{{ url('img/batasAtas2.svg') }}" class="absolute z-10 -translate-y-[3vw]" alt="">
            <img src="{{ url('img/background2.svg') }}"
                class="absolute min-w-[160vw] sm:min-w-[150vw] md:min-w-[120vw] lg:min-w-full" alt="">
            <div class="flex flex-col justify-center items-center p-[8vw]">
                <img src="{{ url('img/trailer.svg') }}" alt="" class="res w-[30%] z-30 ">
                <iframe class="w-[70vw] h-[40vw] md:w-[50vw] md:h-[28vw] p-[2vw] z-30"
                    src="{{ url('https://www.youtube.com/embed/AEilEiOwFW0') }}"></iframe>
                <img src="{{ url('img/about.svg') }}" alt="" class="res z-30 pt-[3vw] pb-[1vw]">
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
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1961.8 145.64" class="absolute top-4"><defs><style>.cls-1,.cls-2{fill:#fff;}.cls-1{stroke:#275893;stroke-miterlimit:10;stroke-width:9px;}.cls-3{fill:#275893;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M1957.3,140.39V106.75a6387,6387,0,0,0-951.39-74.67q-12.49,0-25,0t-25,0A6386.83,6386.83,0,0,0,4.5,106.75v33.64A6352,6352,0,0,1,956,65.33q12.42,0,24.86,0t24.86,0A6352.19,6352.19,0,0,1,1957.3,140.39Z"/><rect class="cls-2" x="949.01" y="16.74" width="63.77" height="63.77" transform="translate(252.91 707.84) rotate(-45)"/><path class="cls-3" d="M980.9,7.07l41.56,41.56-9.22,9.21-7.48,7.49L990.11,81l-9.21,9.22L971.69,81,956,65.33l-7.48-7.49-9.22-9.21,9.22-9.22,7.33-7.33,15.8-15.79,9.21-9.22m0-7.07-3.54,3.54-9.21,9.21-15.8,15.8L945,35.88l-9.21,9.21-3.54,3.54,3.54,3.53L945,61.38l7.49,7.48,15.64,15.65,9.21,9.21,3.54,3.54,3.54-3.54,9.21-9.21,15.64-15.64,7.49-7.49,9.21-9.22,3.54-3.53L1026,45.09,984.44,3.54,980.9,0Z"/><rect class="cls-2" x="939.54" y="39.61" width="18.03" height="18.03" transform="translate(243.46 684.99) rotate(-45)"/><path class="cls-3" d="M948.55,39.41l9.22,9.22-9.22,9.21-9.21-9.21,9.21-9.22m0-7.07L945,35.88l-9.21,9.21-3.54,3.54,3.54,3.53L945,61.38l3.53,3.53,3.54-3.53,9.21-9.22,3.54-3.53-3.54-3.54-9.21-9.21-3.54-3.54Z"/><rect class="cls-2" x="971.88" y="71.96" width="18.03" height="18.03" transform="translate(230.04 717.31) rotate(-45)"/><path class="cls-3" d="M980.9,71.76,990.11,81l-9.21,9.22L971.69,81l9.21-9.21m0-7.07-3.54,3.53-9.21,9.22L964.61,81l3.54,3.54,9.21,9.21,3.54,3.54,3.54-3.54,9.21-9.21L997.19,81l-3.54-3.53-9.21-9.22-3.54-3.53Z"/><rect class="cls-2" x="1004.23" y="39.62" width="18.03" height="18.03" transform="translate(262.38 730.71) rotate(-45)"/><path class="cls-3" d="M1013.24,39.42l9.21,9.21-9.21,9.22L1004,48.63l9.21-9.21m0-7.07-3.54,3.53-9.21,9.22L997,48.63l3.53,3.54,9.21,9.21,3.54,3.54,3.54-3.54,9.21-9.21,3.53-3.54L1026,45.1l-9.21-9.22-3.54-3.53Z"/><rect class="cls-2" x="971.88" y="7.27" width="18.03" height="18.03" transform="translate(275.8 698.39) rotate(-45)"/><path class="cls-3" d="M980.9,7.07l9.21,9.22L980.9,25.5l-9.21-9.21,9.21-9.22m0-7.07-3.54,3.54-9.21,9.21-3.54,3.54,3.54,3.53L977.36,29l3.54,3.53L984.44,29l9.21-9.22,3.54-3.53-3.54-3.54-9.21-9.21L980.9,0Z"/><rect class="cls-3" x="973.57" y="41.3" width="14.66" height="14.66" transform="translate(252.91 707.84) rotate(-45)"/></g></g></svg>
        </div>
         <footer class="bg-[#336b91] flex flex-col justify-center items-center">
        <div class="flex flex-col lg:flex-row justify-between w-3/4 mt-[150px]">
            <div class="foo-contact lg:w-1/4 mb-8">
                <h3 class="font-bold text-4xl text-white mb-4 lg:hover:line-through lg:decoration-8 transition-all decoration-[#ecb573]">CONTACT</h3>
                <p>
                    <i class="fa-solid fa-phone"></i>
                    +62 813-8663-1140 (Zulfan)
                </p>
                <p>
                    <i class="fa-solid fa-phone"></i>
                    +62 821-6355-6632 (Hanif)
                </p>
                <p>
                    <i class="fa-solid fa-envelope me-1"></i>
                    zulfan@zulmuw.com
                </p>
                <p class="mt-2">
                    <i class="fa-solid fa-location-dot me-1"></i>
                    Sektor XI BSD, Jl. Cendekia No.1, Serpong, Kec. Serpong, Kota Tangerang Selatan, Banten
                    15310
                </p>
                </ul>
            </div>
            <div class="foo-follow-us lg:w-1/4 mb-8">
                <h3 class="font-bold text-4xl text-white mb-3 lg:hover:line-through lg:decoration-8 transition-all decoration-[#df8583]">FOLLOW US</h3>
                <ul>
                    <li><a href="" class="text-lg hover:text-white transition-all duration-300"><i class="fa-brands fa-instagram me-2"></i>Instagram</a></li>
                    <li><a href="" class="text-lg hover:text-white transition-all duration-300"><i class="fa-brands fa-x-twitter me-1"></i>Twitter</a></li>
                    <li><a href="" class="text-lg hover:text-white transition-all duration-300"><i class="fa-brands fa-youtube me-1"></i>Youtube</a></li>
                    <li><a href="" class="text-lg hover:text-white transition-all duration-300"><i class="fa-brands fa-tiktok me-2"></i>Tiktok</a></li>
            </div>
            <div class="foo-location lg:w-1/4 mb-8">
                <h3 class="font-bold text-4xl text-white mb-5 lg:hover:line-through lg:decoration-8 transition-all decoration-[#a0ba74]">LOCATION</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5269162085324!2d106.67799617460537!3d-6.325690961896418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e51f1977cac5%3A0x4e43fafd7e8d0489!2sMAN%20Insan%20Cendekia%20Serpong!5e0!3m2!1sen!2sid!4v1704569991566!5m2!1sen!2sid"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="flex flex-row gap-5 mt-10">
            <img src="{{ url('/img/logo-2.png') }}" alt="Logo Kemenag" class="h-[2.5rem]">
            <img src="{{ url('/img/logo-3.png') }}" alt="Logo MAN IC" class="h-[2.2rem]">
            <img src="{{ url('/img/logo-4.png') }}" alt="Logo OS Cendekia" class="h-[2.2rem]">
        </div>
        <p class="mt-3 mb-5 text-white">&copy; Copyright SONIC LINGUISTIC 2024</p>
    </footer>

        <script src="{{ url('/js/home.js') }}"></script>
</body>

</html>
