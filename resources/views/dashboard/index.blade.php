<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- <div class="w-full">
        <x-dashsidebar>
        </x-dashsidebar>

    </div> --}}
    <div class="flex w-screen h-screen text-gray-700">

        <!-- Component Start -->
        <x-dash-menu />
        {{-- <div class="flex flex-col w-56 border-r border-gray-300">
            <button class="relative text-sm focus:outline-none group">
                <div
                    class="flex items-center justify-between w-full h-16 px-4 border-b border-gray-300 hover:bg-gray-300">
                    <span class="font-medium">
                        Dropdown
                    </span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="absolute z-10 flex-col items-start hidden w-full pb-1 bg-white shadow-lg group-focus:flex">
                    <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Menu Item 1</a>
                    <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Menu Item 1</a>
                    <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Menu Item 1</a>
                </div>
            </button>
            <div class="flex flex-col flex-grow p-4 overflow-auto">
                <a class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300"
                    href="#">
                    <span class="leading-none">Item 1</span>
                </a>
                <a class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300"
                    href="#">
                    <span class="leading-none">Item 2</span>
                </a>
                <a class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300"
                    href="#">
                    <span class="leading-none">Item 3</span>
                </a>
                <a class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300"
                    href="#">
                    <span class="leading-none">Item 4</span>
                </a>
                <a class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300"
                    href="#">
                    <span class="leading-none">Item 5</span>
                </a>
                <a class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300"
                    href="#">
                    <span class="leading-none">Item 6</span>
                </a>
                <a class="flex items-center flex-shrink-0 h-10 px-3 mt-auto text-sm font-medium bg-gray-200 rounded hover:bg-gray-300"
                    href="#">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    <span class="ml-2 leading-none">New Item</span>
                </a>
            </div>

        </div> --}}
        <div class="flex flex-col flex-grow">
            <x-nav-dash title="Homepage" />
            <div class="flex-grow p-6 overflow-auto bg-gray-200">
                <div class="grid grid-cols-3 gap-6">
                    <x-dashcard title="Users" numbers="{{ $users }}">
                        <x-slot:svg>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-user-circle bg-violet-200 p-4 rounded-full"
                                width="64" height="64" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5F264A"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="" />
                                <circle cx="12" cy="12" r="9" />
                                <circle cx="12" cy="10" r="3" />
                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                            </svg>
                        </x-slot:svg>
                    </x-dashcard>
                    <x-dashcard title="Invoices" numbers="{{ $invoices }}">
                        <x-slot:svg>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-receipt bg-blue-200 p-4 rounded-full" width="64"
                                height="64" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" />
                            </svg>
                        </x-slot:svg>
                    </x-dashcard>
                    <x-dashcard title="Income" numbers="Rp.{{ number_format($incomes) }}">
                        <x-slot:svg>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-cash p-4 rounded-full bg-green-200" width="64"
                                height="64" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="7" y="9" width="14" height="10" rx="2" />
                                <circle cx="14" cy="14" r="2" />
                                <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" />
                            </svg>
                        </x-slot:svg>
                    </x-dashcard>
                    <div class="h-24 col-span-2 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-2 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-3 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-2 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-2 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-3 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-2 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-1 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-2 bg-white border border-gray-300"></div>
                    <div class="h-24 col-span-3 bg-white border border-gray-300"></div>
                </div>
            </div>
        </div>
        <!-- Component End  -->

    </div>

    <a class="fixed flex items-center justify-center h-8 pr-2 pl-1 bg-blue-600 rounded-full bottom-0 right-0 mr-4 mb-4 shadow-lg text-blue-100 hover:bg-blue-600"
        href="https://twitter.com/lofiui" target="_top">
        <div class="flex items-center justify-center h-6 w-6 bg-blue-500 rounded-full">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"
                class="r-jwli3a r-4qtqp9 r-yyyyoo r-16y2uox r-1q142lx r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue">
                <g>
                    <path
                        d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
                    </path>
                </g>
            </svg>
        </div>
        <span class="text-sm ml-1 leading-none">@lofiui</span>
    </a>
</body>

</html>
