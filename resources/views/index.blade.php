@if (session()->has('success'))
    <div class="alert alert-success shadow-lg w-1/4 overflow-hidden fixed bottom-0 right-0">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="#fff"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-white text-sm">{{ session()->get('success') }}</span>
        </div>
    </div>
@endif
<x-master title="Homepage">
    <x-hero>
        @slot('title')
            Ayam bakar bu ratna
        @endslot
        @slot('content')
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione temporibus quod esse nisi ipsa officiis ea
            quisquam fugit eligendi earum magni eaque minus quo cumque, nulla numquam fuga? Aliquam quos soluta ad
            voluptatum dolor et veritatis voluptates eveniet officia ipsam!
        @endslot
    </x-hero>

    <div class="container mx-auto">

        <x-categorylist />
        <x-productlist>
            @if ($products->count() == 0)
                <div class="leading relax tracking-tight">
                    <span class="font-semibold tracking-wide text-xl "> List Product </span>
                    <p class="text-sm text-orange-700">Produk produk terbaru kami</p>
                </div>
                <p>Produk Belum ada</p>
            @else
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-24 lg:grid-cols-3">
                    @foreach ($products as $product)
                        <x-card styles="bg-orange-400">
                            <a href="{{ route('product.show', $product->identifier) }}">
                                <img class="w-48 flex-shrink-0 h-full rounded-lg" src="{{ asset('assets/Logo.png') }}"
                                    alt="Ayam-Bakar">
                            </a>
                            <div class="font-semibold flex flex-col gap-y-2">
                                <div>
                                    @foreach ($product->categories as $tag)
                                        <a class="text-white hover:text-slate-800"
                                            href="/categories/{{ $tag->name }}">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                                <a class="tracking-tighter leading-relaxed text-white"
                                    href="{{ route('product.show', $product->identifier) }}">
                                    <div class="flex flex-col">
                                        <span>{{ $product->name }}</span>
                                        <span>Rp.{{ number_format($product->price) }}</span>
                                    </div>

                                    <div class="text-gray-500 text-sm">
                                        @if ($product->stock == 0)
                                            <x-button
                                                styles="bg-white text-black transition duration-300 hover:bg-slate-900 hover:text-white">
                                                Produk Habis
                                            </x-button>
                                        @else
                                            <a href="{{ route('product.show', $product->identifier) }}">
                                                <x-button
                                                    styles="bg-white text-black transition duration-300 hover:bg-slate-900 hover:text-white">
                                                    Lihat
                                                </x-button>
                                            </a>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        </x-card>
                    @endforeach
                </ul>
                <div class="flex justify-end w-full">
                    <div>
                        <a href="{{ route('product.index') }}">
                            <x-button
                                styles="bg-orange-500 text-white shadow-lg hover:bg-orange-700 transition duration-300">
                                Lihat lebih banyak >
                            </x-button>
                        </a>
                    </div>
                </div>
            @endif
        </x-productlist>
        <x-articles />
    </div>

    <x-footer />

</x-master>
