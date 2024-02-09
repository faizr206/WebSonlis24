<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ url('img/logoIcon.ico') }}">
</head>

<body style="background-image: url({{ url('img/skyBg.png') }})"
    class=" bg-fixed bg-cover font-[montserrat] overflow-x-hidden">
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
    <div class="p-5 m-10 bg-white bg-opacity-75 rounded-3xl mt-32 text-xl">
        @if (Session::has('edit') && Session::get('edit'))
            <form method="POST" class="text-xl">
                @csrf
                Username: <br>
                <div class="border-black border-2 rounded-md p-1"><input type="text" name="username"
                        value="{{ Auth::user()->username }}" class="border-black border-0 rounded-md border-opacity-50">
                </div> <br>
                Email: <br>
                <div class="border-black border-2 rounded-md p-1"><input type="email" name="email"
                        value="{{ Auth::user()->email }}" class="border-black border-0 rounded-md border-opacity-50">
                </div> <br>
                Asal Sekolah: <br>
                <div class="border-black border-2 rounded-md p-1"><input type="text" name="sekolah"
                        value="{{ Auth::user()->sekolah }}" class="border-black border-0 rounded-md border-opacity-50">
                </div> <br>
                <button type="submit" class="bg-purp text-white rounded-3xl hov mt-3 py-1 px-3">Save</button>
            </form>
        @else
            Username: <br>
            <div class="border-black border-2 rounded-md p-1">{{ Auth::user()->username }}</div><br>
            Email: <br>
            <div class="border-black border-2 rounded-md p-1">{{ Auth::user()->email }}</div><br>
            Asal Sekolah: <br>
            <div class="border-black border-2 rounded-md p-1">{{ Auth::user()->sekolah }}</div><br>
            <div class="flex flex-row space-x-2">
                <form method="POST" action="/profile/edit">
                    @csrf
                    <button type="submit" class=" bg-purp text-white rounded-3xl hov mt-3 py-1 px-3 ">Edit</button>
                </form>
                <a href="/dashboard" class="bg-purp text-white rounded-3xl hov mt-3 py-1 px-3 inline-flex ">Back</a>
            </div>
        @endif
    </div>
</body>

</html>
