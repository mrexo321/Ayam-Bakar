{{-- @dd($cartItem) --}}
<div
    class="w-full flex container justify-between mx-auto text-sm tracking-tight text-white font-semibold items-center p-4">
    <div class="flex items-center gap-x-4">
        <a href="/">
            <img class="flex-shrink-0 w-12" src="{{ asset('assets/Logo.png') }}" alt="">
        </a>
        @foreach ($menus as $menu => $url)
            <a class="transition duration-300 hover:text-black {{ Request::is($url) ? 'text-black' : '' }}"
                href="/{{ $url }}">{{ $menu }}</a>
        @endforeach
    </div>
    <div class="flex gap-x-4">
        @auth
            <div class="flex gap-x-2 items-center">

                {{-- <a href="">
                        <x-button styles="bg-orange-600 flex hover:bg-orange-800 tracking-tight shadow-lg">
                            <p>{{ auth()->user()->name }}</p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>


                        </x-button>
                    </a> --}}
                <div class="dropdown dropdown-hover">
                    <x-button styles="bg-orange-600 flex items-center gap-x-2">
                        {{ auth()->user()->name }}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </x-button>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-orange-600 rounded-box w-32">
                        <li>
                            <a href="{{ route('profile.show', auth()->user()->identifier) }}">
                                {{ auth()->user()->name }}
                            </a>
                        </li>
                        @if (auth()->user()->role == 'admin')
                            <li>
                                <a href="{{ route('dashboard.index') }}">
                                    Dashboard
                                </a>
                            </li>
                        @endif
                        <div class="h-px px-4 bg-gray-400"></div>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('cart.index') }}">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span class="badge badge-ghost relative inset-0 w-3"></span>
                    </div>
                </a>
            </div>
        @else
            <x-authenticate />
        @endauth
    </div>
</div>
