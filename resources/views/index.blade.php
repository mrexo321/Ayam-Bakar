<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>isann</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans">
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
    <x-productlist>
        <div class="leading relax tracking-tight">
            <span class="font-semibold tracking-wide text-xl "> List Product </span>
            <p class="text-sm text-orange-700">Produk produk terbaru kami</p>
        </div>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-24 lg:grid-cols-3">
            @foreach ($products as $product)
                <x-card styles="bg-orange-400">
                    <a href="{{ route('product.show', $product->identifier) }}">
                        <img class="w-48 flex-shrink-0 h-full rounded-lg" src="{{ asset('assets/Logo.png') }}"
                            alt="">
                    </a>
                    <div class="font-semibold flex flex-col gap-y-2">
                        <div>
                            <a class="text-white hover:text-slate-800"
                                href="/categories/{{ $product->category->slug }}">{{ $product->category->name }}</a>
                        </div>
                        <a class="tracking-tighter leading-relaxed text-slate-900"
                            href="{{ route('product.show', $product->identifier) }}">
                            <div class="flex flex-col">
                                <span>{{ $product->name }}</span>
                                <span>Rp.{{ number_format($product->price) }}</span>
                            </div>

                            <div class="text-gray-500 text-sm">
                                <a href="{{ route('product.show', $product->identifier) }}">
                                    <x-button
                                        styles="bg-white text-black transition duration-300 hover:bg-slate-900 hover:text-white">
                                        Lihat
                                    </x-button>
                                </a>
                            </div>
                        </a>
                    </div>
                </x-card>
            @endforeach
        </ul>
        <div class="flex justify-end w-full">
            <div>
                <a href="{{ route('product.index') }}">
                    <x-button styles="bg-orange-500 text-white shadow-lg hover:bg-orange-700 transition duration-300">
                        Lihat lebih banyak >
                    </x-button>
                </a>
            </div>
        </div>
    </x-productlist>
    <x-articles>

    </x-articles>
</body>

</html>
