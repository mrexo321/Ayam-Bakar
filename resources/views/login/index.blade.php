<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body class=" bg-orange-400 antialiased">
    <div class="flex min-h-screen flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <a href="/">
                    <img class="mx-auto w-24 flex-shrink-0" src="{{ asset('assets/Logo.png') }}" alt="Your Company">
                </a>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tighter text-white">Masuk ke akun anda</h2>
                <p class="mt-2 text-center tracking-tight text-sm text-white">
                    Belum punya akun? Daftar
                    <a href="/register"
                        class="font-semibold decoration-indigo-500 text-black hover:decoration-orange-600 hover:text-orange-600">Disini</a>
                </p>
            </div>
            <form class="mt-8 space-y-6 p-12 bg-orange-500 shadow shadow-slate-900 rounded-xl"
                action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <div class="space-y-2 rounded-md shadow-sm">
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input value="{{ old('email') }}" id="email-address" name="email" type="email"
                            autocomplete="email"
                            class="relative  bg-white block w-full appearance-none rounded-md  px-3 py-2 text-gray-700 placeholder-gray-500 focus:z-10 focus:border-gray-500 focus:outline-none focus:ring-gray-500 sm:text-sm"
                            placeholder="abc@domain.com">
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>

                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password"
                            class="relative block w-full appearance-none rounded-md  px-3 py-2 text-gray-700 placeholder-gray-500 focus:z-10 focus:border-gray-500 focus:outline-none focus:ring-gray-500 sm:text-sm"
                            placeholder="Password">
                        @error('password')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror


                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember_me" type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="remember-me" class="ml-2 block text-sm text-white">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-white hover:text-black">Lupa Password?</a>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center justify">
                        <div>
                            <x-button styles="bg-orange-600 hover:bg-orange-700 transition duration-300 tracking-tight">
                                Sign In
                            </x-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
