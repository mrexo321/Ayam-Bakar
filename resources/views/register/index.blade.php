<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body class=" bg-orange-400 antialiased font-sans">
    <div class="flex min-h-screen flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <a href="/">
                    <img class="mx-auto w-24 flex-shrink-0" src="{{ asset('assets/Logo.png') }}" alt="Your Company">
                </a>
                <div class="text-center text-white leading-relaxed">
                    <h2 class="mt-6 text-3xl font-semibold tracking-tighter text-white">Daftar akun</h2>
                    <span class="font-semibold">Sudah punya akun ?
                        <a class="text-orange-600 " href="{{ route('login') }}">
                            Login
                        </a>
                    </span>
                </div>

            </div>
            <form class="mt-8 space-y-6 p-12 bg-orange-500 shadow shadow-slate-900 rounded-xl"
                action="{{ route('register.store') }}" method="POST">
                @csrf
                <input type="hidden" name="remember">

                <div class=" space-y-6  flex flex-col text-white rounded-md shadow-sm">
                    <div>
                        <label for="name">Nama</label>
                        <input value="{{ old('name') }}" id="email-address" name="name" type="text"
                            class="relative bg-white block w-full appearance-none rounded-md  px-3 py-2 text-gray-700 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm"
                            placeholder="Ketik nama anda">

                        @error('name')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="email-address">Alamat email</label>
                        <input value="{{ old('email') }}" id="email-address" name="email" type="email"
                            class="relative bg-white block w-full appearance-none rounded-md  px-3 py-2 text-gray-700 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm"
                            placeholder="Ketik email anda">
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password"
                            class="relative bg-white block w-full appearance-none rounded-md  px-3 py-2 text-gray-700 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm"
                            placeholder="Password">

                        @error('password')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">


                    <div class="text-sm">
                        <a href="#" class="font-medium text-white hover:text-black">Lupa password?</a>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center justify">
                        <x-button styles="bg-orange-600 hover:bg-orange-700 transition duration-300 tracking-tight">
                            Register
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
