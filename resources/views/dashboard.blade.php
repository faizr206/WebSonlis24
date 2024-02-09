<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')

    <link rel="icon" type="image/x-icon" href="{{ url('img/logoIcon.ico') }}">
    <script src="https://kit.fontawesome.com/e2e4af9857.js" crossorigin="anonymous"></script>
</head>

<body style="background-image: url({{ url('img/skyBg.png') }})"
    class="bg-cover bg-fixed bg-center font-[montserrat] overflow-x-hidden">

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
                    <li><a href="/home#competitions"
                            class=" lg:hover:bg-slate-200 rounded-lg duration-200 p-1  transition-all ">COMPETITIONS</a>
                    </li>
                </div>
                <div
                    class="nav-right hidden lg:col-span-2 lg:flex space-y-2 lg:space-y-0 lg:flex-row flex-col lg:items-center lg:justify-center lg:order-last gap-4 lg:gap-5 my-0 ms-1 me-0">
                    <li><a href="/dashboard" class=" lg:hover:bg-slate-200  rounded-lg duration-200 p-1  ">DASHBOARD</a>
                    </li>
                    <li>
                        <form action="/logout" method="post">@csrf<button type="submit"
                                class="lg:hover:bg-slate-200 rounded-lg duration-200 p-1  transition-all">LOGOUT</button>
                        </form>
                    </li>
                </div>
            </ul>
        </div>
    </nav>

    <div class=" bg-white bg-opacity-75 rounded-3xl mx-[20px] md:mx-[40px] mt-24 lg:mt-36 py-5">
        <div class="flex items-center justify-center">
            <div class="flex flex-col space-y-3 text-center p-5 rounded-3xl text-black items-center justify-center">
                @if ($errors->any())
                    <h4>{{ $errors->first() }}</h4>
                @endif
                <img src="{{ url('img/profileIcon.svg') }}" alt="" class="w-[10vw]">
                <div class=" space-y-1">
                    <div class="text-3xl font-bold text-[#3a4781]">{{ Auth::user()->username }}</div>
                    <div class="text-lg text-[#3a4781]">{{ Auth::user()->sekolah }}</div>
                </div>
                <a href="/profile"
                    class="border-[#3a4781] border-2 rounded-[50px] px-7 py-3 text-[#3a4781] font-bold text-2xl hov">Edit
                    Profil</a>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center">
            <div class="bg-white shadow-lg flex my-5 flex-col p-4 rounded-3xl w-11/12 md:w-2/3">
                <div class=" font-bold text-center text-4xl text-[#3a4781]">Status</div>
                <div class="text-center text-[5vw] ">
                    @if (Auth::user()->status == 'Belum')
                        <i class="fa-regular fa-file"></i>
                    @elseif(Auth::user()->status == 'Menunggu')
                        <i class="fa-regular fa-clock"></i>
                    @elseif(Auth::user()->status == 'Valid')
                        <i class="fa-regular fa-circle-check"></i>
                    @elseif(Auth::user()->status == 'Tidak Valid')
                        <i class="fa-regular fa-circle-xmark"></i>
                    @endif
                </div>
                <div class=" rounded-md text-center text-xl text-[#3a4781] font-bold p-1">
                    {{ Auth::user()->status }}
                </div>
                <div class="mt-5 text-center text-lg text-black">Feedback</div>
                <div class=" bg-gray-200 rounded-3xl text-center text-base text-black p-1">
                    {{ Auth::user()->comment }}
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center my-10">
            <div class=" text-3xl md:text-4xl text-purp font-bold">{{ Auth::user()->lomba }}</div>
            <div class="mt-5 text-center text-lg text-black">Link Google Drive Syarat Pendaftaran</div>
            <form method="POST" action="/updateDrive" class="my-2 ">
                @csrf
                <input type="text" name="drivePath" id=""
                    placeholder="Identitas, Bukti Pembayaran, Twibbon, Follow IG, Follow Tiktok, Post Poster di Story"
                    class="p-2 border-purp w-[50vw] inline-flex border-2 rounded-3xl"
                    value="{{ Auth::user()->drivePath }}">
                <input type="submit" value="Simpan" class=" bg-purp rounded-3xl hov cursor-pointer text-white p-2">
            </form>
        </div>
        <div class="flex flex-col items-center justify-center mt-10">
            <div class="bg-white shadow-lg flex flex-col p-4 rounded-3xl space-y-2 w-11/12 md:w-2/3">
                <div class="text-3xl font-bold text-purp text-center">Peserta</div>
                <div class="flex flex-col">
                    <div class="flex flex-row">
                    </div>
                    <div id="participants">
                        {{ \App\Http\Controllers\FrontEndController::GetParticipant() }}
                    </div>
                </div>
                <button id="tambahPeserta" class="bg-white rounded-3xl border-purp border-2 text-3xl text-purp px-1"
                    onclick="TambahPeserta('{{ csrf_token() }}', {{ Auth::user()->id }})">+</button>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <form action="/submit" method="post">
                @csrf
                <button type="submit"
                    class=" bg-purp rounded-3xl hov text-white font-bold px-5 py-2 mt-10 text-2xl">Submit</button>
            </form>
        </div>
    </div>

    <div class="flex items-center justify-center h-auto w-full z-50 mt-52">
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

    <script src="{{ url('/js/participant.js') }}"></script>
    <script></script>
</body>

</html>
