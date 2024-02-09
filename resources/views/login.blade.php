<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')

    <link rel="icon" type="image/x-icon" href="{{ url('img/logoIcon.ico') }}">
    <script src="https://kit.fontawesome.com/e2e4af9857.js" crossorigin="anonymous"></script>
</head>

<body style="background-image: url({{ url('img/flowerBg.png') }})"
    class="bg-center bg-fixed items-center justify-center font-montserrat">
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
                            class="lg:hover:bg-slate-200 rounded-lg duration-200 p-1  transition-all ">COMPETITIONS</a>
                    </li>
                </div>
                <div
                    class="nav-right hidden lg:col-span-2 lg:flex space-y-2 lg:space-y-0 lg:flex-row flex-col lg:items-center lg:justify-center lg:order-last gap-4 lg:gap-5 my-0 ms-1 me-0">
                    <li><a href="/register" class=" lg:hover:bg-slate-200  rounded-lg duration-200 p-1  ">REGISTER</a>
                    </li>
                    <li><a href="/login" class=" lg:hover:bg-slate-200 rounded-lg duration-200 p-1 ">LOGIN</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
    <div class="flex items-center justify-center">
        <div
            class="flex flex-col bg-[#f6a192] drop-shadow-[0_15px_15px_rgba(0,0,0,0.3)] w-5/6 md:w-2/3 lg:w-1/2 xl:w-1/3 mt-36 rounded-xl py-5 px-10">
            <div class="text-2xl font-montserrat font-bold mb-4">Login</div>
            <form method="POST" action="/login" class=" space-y-4">
                @csrf
                <div>
                    <label for="" class="block mb-2">Email</label>
                    <input type="email" name="email" placeholder="name@domain.com"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        name="" id="">
                </div>
                <div>
                    <label for="" class="block mb-2">Password</label>
                    <input type="password" name="password" placeholder="*******"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        name="" id="">
                </div>
                <div>
                    <a href="/forgotPassword" class=" hov underline text-blue-900">Forgot Password</a>
                </div>
                <button type="submit" class=" bg-[#F5C390] rounded-md w-full p-1 hov">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
