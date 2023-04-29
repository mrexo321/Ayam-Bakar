<div class="flex flex-col justify-between items-center w-16 pb-4 overflow-auto border-r border-gray-300">
    <div>
        <a class="flex items-center justify-center flex-shrink-0 w-full h-16" href="#">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
        </a>
        <div class="h-px w-full bg-black"></div>
        <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded {{ Request::is(!`/dashboard`) ? '' : 'bg-gray-300' }}"
            href="dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="32"
                height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <rect x="10" y="12" width="4" height="4" />
            </svg>
        </a>
        @foreach ($menus as $menu => $url)
            <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded {{ Request::is(`dashboard/$url`) ? 'bg-gray-300' : '' }} hover:bg-gray-300 zhover:rounded-md"
                href="/dashboard/{{ $url }}">
                {!! $menu !!}
            </a>
        @endforeach
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="32" height="32"
        viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round"
        stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
        <path d="M7 12h14l-3 -3m0 6l3 -3" />
    </svg>

</div>
