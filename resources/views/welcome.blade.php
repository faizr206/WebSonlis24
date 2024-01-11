<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/frontpage.css') }}" media="screen" />
    <link rel = "stylesheet" type = "text/css" href = "{{ url('/css/animation.css') }}" media="screen">
</head>

<body style="overflow: hidden">
    <div class = "tap z-50 text-center text-[22px] font-bold animate-pulse text-white">
        Tap
        anywhere to
        enter</div>
    <div class='the_animation w-screen bg-[#0C1E1E] flex h-screen animate-light'>
        <section class = 'animate-transparan flex h-screen w-screen'>
            <div class = 'm-auto w-[500px] h-[470px] pt-[42px] self-end relative flex'>
                <div class = 'left-1/2 -translate-x-[196px] relative flex'>
                    <div style = 'background-image:url({{ url('img/frontpage/2.svg') }});'
                        class = 'absolute m-auto w-96 h-96 animate-rescale scale-[0] bg-contain bg-bottom bg-no-repeat'>
                    </div>
                </div>
                <div style = 'background-image:url({{ url('img/frontpage/3.svg') }});'
                    class = 'w-40 h-40 -bottom-24 -right-5 animate-naik absolute bg-contain bg-no-repeat z-50'></div>
                <div style = 'background-image:url({{ url('img/frontpage/4.svg') }});'
                    class = 'animate-muncul-1 opacity-0 w-8 h-8 bg-contain right-[140px] top-[156px] bg-no-repeat z-10 absolute'>
                    <div
                        class = 'w-[10px] h-[300px] rounded-xl  translate-x-[6.2px] overflow-hidden translate-y-[23px]'>
                        <div class = 'w-20 h-96 -top-96 bg-[#80BBE6] absolute z-40 animate-terjun'></div>
                    </div>
                </div>
                <div class = 'water_drop  z-50'>
                    <div
                        class = 'w-12 h-12 bg-[#80BBE6] opacity-0 animate-muncul-2 absolute -bottom-5 right-[152px] z-50 blur-sm rounded-full '>
                    </div>
                    <div
                        class = 'w-12 h-12 bg-[#80BBE6] opacity-0 animate-muncul-3 absolute -bottom-5 right-[128px] z-50 blur-sm rounded-full '>
                    </div>
                    <div
                        class = 'w-12 h-12 bg-[#80BBE6] opacity-0 animate-muncul-4 absolute -bottom-2 right-[136px] z-50 blur-sm rounded-full '>
                    </div>
                </div>
                <div style = 'background-image:url({{ url('img/frontpage/1.svg') }});'
                    class = 'my-auto z-0 mx-auto w-[200px] h-[450px] mb-2 bg-contain bg-bottom bg-no-repeat'></div>
            </div>
        </section>
    </div>




    <script>
        var APP_URL = {!! json_encode(url('/')) !!}
        window.onload = setTimeout(function() {
            window.location = APP_URL + "/home";
        }, 7500); //delay is in milliseconds 

        document.body.addEventListener('click', function() {
            window.location = APP_URL + "/home";
        }, true);
    </script>
</body>

</html>
