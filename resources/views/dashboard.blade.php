<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ url('/css/home.css') }}">
    <script src="https://kit.fontawesome.com/e2e4af9857.js" crossorigin="anonymous"></script>
</head>

<body style="background-image: url({{ url('img/skyBg.png') }})"
    class="bg-cover bg-center font-[montserrat] overflow-x-hidden">

    {{-- @yield('navbar') --}}
    <nav class="h-15 flex justify-center items-center lg:pt-10 w-full sticky top-0 lg:fixed drop-shadow-sm"
        style="z-index: 100708">
        <div class="nav-cont bg-white w-full h-full lg:w-1/2 lg:rounded-full lg:h-12 px-5">
            <ul class=" lg:flex lg:justify-between h-full py-3 px-4 lg:px-10 font-bold">
                <li class="nav-logo sm:max-md:order-first flex justify-between items-center">
                    <div class="nav-sm-left">
                        <a href="#home" class="flex justify-start items-center gap-2">
                            <span class="hidden lg:flex">
                                <span
                                    class="h-[85px] w-[85px] hover:h-[95px] hover:w-[95px] transition-all duration-300 bg-white rounded-full drop-shadow-lg grid place-content-center items-center">
                                    <img src="{{ url('/img/logoUtama.png') }}" alt="SL24"
                                        class="w-[70px] hover:w-[65px] transition-all">
                                </span></span>
                            <span class="lg:hidden"><img src="{{ url('/img/logoUtama.png') }}" alt="SL24"
                                    class="h-14"></span>
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
                    <li><a href=#home
                            class="lg:hover:bg-slate-200 rounded-lg duration-200 p-1 lg:decoration-4 transition-all decoration-[#ecb573]">HOME</a>
                    </li>
                    <li><a href="#competition"
                            class="lg:hover:bg-slate-200 rounded-lg duration-200 p-1 lg:decoration-4 transition-all decoration-[#acc8e8]">COMPETITIONS</a>
                    </li>
                </div>
                <div
                    class="nav-right hidden lg:flex flex lg:flex-row flex-col lg:items-center lg:order-last gap-4 lg:gap-10 my-3 ms-1 me-4">
                    <li><a href="/register"
                            class="underline underline-offset-4 decoration-wavy decoration-2 lg:no-underline lg:hover:bg-slate-200 rounded-lg duration-200 p-1 lg:decoration-solid lg:decoration-4 decoration-[#df8583]">DASHBOARD</a>
                    </li>
                    <li><a href="/login"
                            class="underline underline-offset-4 decoration-wavy decoration-2 lg:no-underline lg:hover:bg-slate-200 rounded-lg duration-200 p-1 lg:decoration-solid lg:decoration-4 decoration-[#9cb571]">LOGOUT</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>

    <div class="flex items-center justify-center mt-36">
        <div class="flex flex-col space-y-3 text-center">
            <i class=" text-[10vw] fa-solid fa-user"></i>
            <div class=" space-y-1">
                <div class="text-xl">Nama Peserta</div>
                <div class="text-lg">Asal Sekolah</div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center mt-10">
        <div class="bg-[#ffc533] shadow-lg flex flex-col p-4 rounded-xl space-y-2 w-2/3">
            <div class="flex">
                <form action="">
                    <label for="">Pilih Perlombaan :</label>
                    <select name="" id="" class="rounded-md p-1">
                        @foreach ($competitions as $competition)
                            <option>{{$competition->name}}</option>
                        @endforeach
                    </select>
                </form>
            </div>
            <hr class=" border-black">
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div>Peserta</div>
                    <button class="bg-[#CCA952] rounded-md px-1 mx-2" onclick="TambahPeserta('{{csrf_token()}}', {{Auth::user()->id}})">+</button>
                </div>
                <div id="participants">
                    @foreach ($participants as $participant)
                    <div class="flex flex-col my-1">
                        <form method="POST" action="/dashboard/peserta" class=" bg-[#97daf8] p-2 space-y-2 rounded-lg shadow-md">
                            @csrf
                            <input type="hidden" name="participant_id" value="{{$participant->id}}">
                            <div>
                                <label for="">Nama :</label>
                                <input type="text" name="name" value="{{$participant->name}}" id="" class="p-1 rounded-md">
                            </div>
                            <div>
                                <label for="">Kartu Pelajar : </label>
                                <input type="file" name="file" id="">
                            </div>
                            <div>
                                <label for="">Story Instagram : </label>
                                <input type="file" name="file" id="">
                            </div>
                            <div>
                                <label for="">Kartu Pelajar : </label>
                                <input type="file" name="file" id="">
                            </div>

                            <input type="submit" value="Submit" class=" bg-[#a5ce45] py-1 px-2 rounded">
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="relative mt-52">
        <img src="{{ url('img/batasBawah2.svg') }}" class="absolute -translate-y-[5vw] xl:-translate-y-[4.2vw]"
            alt="">
    </div>
    <footer class="bg-[#336b91]  flex flex-col justify-center items-center">
        <div class="flex flex-col lg:flex-row justify-between w-3/4 mt-[150px]">
            <div class="foo-contact lg:w-1/4 mb-8">
                <h3
                    class="font-bold text-4xl text-white mb-4 lg:hover:text-slate-200 duration-200 lg:decoration-8 transition-all decoration-[#ecb573]">
                    CONTACT</h3>
                <a href="https://wa.me/6281269983488">
                    <i class="fa-solid fa-phone"></i>
                    081269983488 (Luthfi)
                </a>
                <a href="mailto:publikasisonlis@gmail.com">
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
            <div class="foo-follow-us lg:w-1/4 mb-8">
                <h3
                    class="font-bold text-4xl text-white mb-3 lg:hover:text-slate-200 duration-200 lg:decoration-8 transition-all decoration-[#df8583]">
                    FOLLOW US</h3>
                <ul>
                    <li><a href="https://www.instagram.com/soniclinguistic"
                            class="text-lg hover:text-white transition-all duration-300"><i
                                class="fa-brands fa-instagram me-2"></i>Instagram</a></li>
                    <li><a href="https://twitter.com/soniclinguistic"
                            class="text-lg hover:text-white transition-all duration-300"><i
                                class="fa-brands fa-x-twitter me-1"></i>Twitter</a></li>
                    <li><a href="https://www.youtube.com/c/SonicLinguistic"
                            class="text-lg hover:text-white transition-all duration-300"><i
                                class="fa-brands fa-youtube me-1"></i>Youtube</a></li>
                    <li><a href="https://www.tiktok.com/@soniclinguistic"
                            class="text-lg hover:text-white transition-all duration-300"><i
                                class="fa-brands fa-tiktok me-2"></i>Tiktok</a></li>
            </div>
            <div class="foo-location lg:w-1/4 mb-8">
                <h3
                    class="font-bold text-4xl text-white mb-5 lg:hover:text-slate-200 duration-200 lg:decoration-8 transition-all decoration-[#a0ba74]">
                    LOCATION</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5269162085324!2d106.67799617460537!3d-6.325690961896418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e51f1977cac5%3A0x4e43fafd7e8d0489!2sMAN%20Insan%20Cendekia%20Serpong!5e0!3m2!1sen!2sid!4v1704569991566!5m2!1sen!2sid"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="flex flex-row gap-5 mt-10">
            <img src="{{ url('/img/logo-3.png') }}" alt="Logo Kemenag" class="h-[2.5rem]">
            <img src="{{ url('/img/logo-2.png') }}" alt="Logo MAN IC" class="h-[2.2rem]">
            <img src="{{ url('/img/logo-4.png') }}" alt="Logo OS Cendekia" class="h-[2.2rem]">
        </div>
        <p class="mt-3 mb-5 text-white">&copy; Copyright SONIC LINGUISTIC 2024</p>
    </footer>

    <script src="{{ url('/js/home.js') }}"></script>
    <script src="{{ url('/js/participant.js') }}"></script>
</body>

</html>
