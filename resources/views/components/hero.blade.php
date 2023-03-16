@props(['title', 'content'])
<div class="bg-orange-400">
    <div
        class="w-full flex container justify-between mx-auto text-sm tracking-tight text-white font-semibold items-center p-4">
        <div>
            <a href="/">
                <img class="flex-shrink-0 w-12" src="{{ asset('assets/Logo.png') }}" alt="">
            </a>
        </div>
        <div class="flex gap-x-4">
            @foreach ($menus as $menu => $url)
                <a class="transition duration-300 hover:text-black {{ Request::is($url) ? 'text-black' : '' }}"
                    href="/{{ $url }}">{{ $menu }}</a>
            @endforeach
        </div>
        @auth
            <div class="flex gap-x-2 items-center">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                <a href="">
                    <x-button styles="bg-orange-600 hover:bg-orange-800 tracking-tight shadow-lg">
                        Profile
                    </x-button>
                </a>
            </div>
        @endauth
    </div>

    <div class="flex justify-center min-h-screen text-white items-center">
        <div class="flex flex-col gap-y-6 w-1/2 text-center">
            <div class="text-4xl tracking-wide antialiased font-semibold">
                <span class="">{{ $title }}</span>
            </div>
            <div class=" leading-relaxed tracking-tighter ">
                <p>{{ $content }}</p>
            </div>
            <div class="flex justify-center gap-x-4 items-center text-sm">
                @guest
                    <a class="" href="{{ route('login.index') }}">
                        <button class="rounded-md text-orange-600 font-semibold bg-white px-4 py-1">Login</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="rounded-md text-orange-600 font-semibold bg-white px-4 py-1">Register</button>
                    </a>
                @endguest
            </div>
        </div>
    </div>
</div>
