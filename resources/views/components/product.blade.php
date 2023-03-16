<div>

    <section class="container mx-auto py-16 flex flex-col gap-y-8">
        <div class="leading relax tracking-tight">
            <div class="flex gap-x-2 items-center capitalize font-semibold tracking-wide text-base ">
                <span class=""> List Product</span>
                <span>></span>
                <a href="/{{ Request::path() }}">
                    <span class="hover:text-orange-600">{{ Request::path() }}</span>
                </a>
            </div>
            <p class="text-sm text-orange-700">Produk produk rekomendasi galeri kami</p>
        </div>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-24 lg:grid-cols-3">
            @for ($i = 1; $i < 10; $i++)
                <li>
                    <div class="text-left flex flex-col gap-y-2">
                        <a href="">
                            <img class="w-48 flex-shrink-0 h-full rounded-lg shadow"
                                src="{{ asset('assets/Logo.png') }}" alt="">
                        </a>
                        <div class="font-semibold flex flex-col gap-y-2">
                            <div>
                                <a class="text-orange-700 hover:text-orange-800" href="#">Food</a>
                            </div>
                            <a class="tracking-tighter leading-relaxed" href="#">
                                <div class="">
                                    <span>Ayam bakar bu ratna</span>
                                </div>

                                <div class="text-gray-500 text-sm">
                                    <span>10 menit</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
            @endfor
        </ul>
        <div class="flex justify-end w-full">
            <div>
                <a href="#">
                    {{-- <button
                        class="py-1 px-4 bg-orange-600 rounded-lg text-white text-base shadow-lg hover:bg-orange-700 tracking-tight">
                        Lihat lebih >
                    </button> --}}
                    <x-button styles="bg-orange-600 shadow-lg hover:bg-orange-700 transition duration-300">
                        Lihat lebih >
                    </x-button>
                </a>
            </div>
        </div>
    </section>
</div>
