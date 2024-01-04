<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ url('/css/home.css') }}">
</head>

<body class="font-[montserrat] bg-[#edf1be] overflow-x-hidden">
    <div class="flex justify-center items-center w-full h-[70vw] bg-cover"
        style="background-image: url({{ url('img/welcomePage.png') }})">
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
        <div class="">
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
                                    <img src="{{ url('/img/jenis/saintekBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
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
                                    <img src="{{ url('/img/jenis/saintekBorder.svg') }}" class="w-[90%] -z-30 absolute"
                                        alt="">
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
        <script src="{{ url('/js/home.js') }}"></script>
</body>

</html>
