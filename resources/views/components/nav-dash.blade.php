@props(['title' => 'Ayam Bakar'])
<div class="flex justify-between items-center flex-shrink-0 h-16 px-8 border-b border-gray-300">
    <h1 class="text-lg font-medium">{{ $title }}</h1>

    <div class="flex items-center">
        <button
            class="flex uppercase items-center justify-center h-10 px-4 ml-2 text-sm font-medium bg-gray-200 rounded hover:bg-gray-300">
            {{ auth()->user()->name }}
        </button>

        <button class="relative ml-2 text-sm focus:outline-none group">
            <div class="flex items-center justify-center w-10 h-10 rounded hover:bg-gray-300">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="32"
                        height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </a>
            </div>
        </button>
    </div>
</div>
