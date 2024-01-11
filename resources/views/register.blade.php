<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body class=" bg-green-300">
    <div class="flex items-center justify-center mx-auto px-6 py-10">
        <div class=" bg-slate-500 w-1/3 rounded-xl py-5 px-10">
            <div class="text-2xl font-montserrat font-bold mb-4">Registrasi</div>
            <form method="POST" action="/register" class=" space-y-4">
                @csrf
                <div>
                    <label for="" class="block mb-2">Email</label>
                    <input type="email" name="email" placeholder="name@domain.com"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        name="" id="">
                </div>
                <div>
                    <label for="" class="block mb-2">Username</label>
                    <input type="text" name="username" placeholder="conton_username"
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
                    <label for="" class="block mb-2">Asal Sekolah</label>
                    <input type="text" name="sekolah" placeholder="kosongkan jika lomba umum"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        name="" id="">
                </div>

                <div>
                    <label for="" class="block mb-2">Jenjang</label>
                    <select name="jenjang" id=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        <option value="smp">SMP</option>
                        <option value="sma">SMA</option>
                        <option value="umum">Umum</option>
                    </select>
                </div>
                <button type="submit"
                    class=" bg-slate-200 rounded-md w-full p-1 hover:bg-slate-100">Registrasi</button>
            </form>
        </div>
    </div>
</body>

</html>