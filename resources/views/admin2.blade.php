<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin2</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ url('/css/home.css') }}">
    <script src="https://kit.fontawesome.com/e2e4af9857.js" crossorigin="anonymous"></script>


    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
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

    <div class="flex flex-row items-center justify-center mt-52">
        <div class="flex flex-col basis-1/2 items-start justify-start p-3 rounded-2xl bg-blue-200 my-10 mx-10">
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div><b>Email : </b>{{$user->email}}</div>
                </div>
                <div class="flex flex-row">
                    <div><b>Sekolah : </b>{{$user->sekolah}}</div>
                </div>
                <div class="flex flex-row">
                    <div><b>Jenjang : </b>{{$user->jenjang}}</div>
                </div>
                <div class="flex flex-row">
                    <div><b>Lomba : </b>{{$user->lomba}}</div>
                </div>
            </div>
            <table class="my-5">
                <tr>
                    <th>Nama</th>
                    <th>Kartu Pelajar</th>
                </tr>
                @foreach ($user->participants as $participant)
                <tr>
                    <td>{{$participant->name}}</td>
                    <td><a href="/admin2/file/nama/namafile.extension" class="underline" target="_blank">ini</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="flex flex-col items-start rounded-2xl justify-start p-3 bg-red-200 mx-10">
            <form method="POST" action="/admin/user-{{$user->id}}/edit" class="space-y-2">
                @csrf
                <div>
                    <label for="">Status :</label>
                    <select name="status" id="" class="rounded-md p-1">
                        <option @if($user->status == 'Belum') selected @endif>Belum</option>
                        <option @if($user->status == 'Menunggu') selected @endif>Menunggu</option>
                        <option @if($user->status == 'Valid') selected @endif>Valid</option>
                        <option @if($user->status == 'Tidak Valid') selected @endif>Tidak Valid</option>
                    </select>
                </div>
                <div>
                    <label for="">Deskripsi (bila tidak valid) : </label>
                    <input type="text" name="comment" id="" value="{{$user->comment}}">
                </div>
                <div class=" items-end justify-end">
                    <button type="submit" class="bg-red-400 rounded-md hover:opacity-70 p-1">save</button>
                </div>
            </form>
        </div>
    </div>


    <script src="{{ url('/js/home.js') }}"></script>
</body>

</html>
