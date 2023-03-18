<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    <x-hero>
        @slot('title')
            Product
        @endslot
        @slot('content')
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, corrupti officiis molestias quasi veritatis
            illo
            minus culpa natus optio, labore repellendus harum itaque porro et earum repellat accusamus blanditiis. Deleniti.
        @endslot
    </x-hero>
    <x-productlist>
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
            @foreach ($products as $product)
                <x-card styles="bg-orange-400">
                    <a href="/product/{{ $product->identifier }}">
                        <img class="w-48 flex-shrink-0 h-full rounded-lg" src="{{ asset('assets/Logo.png') }}"
                            alt="">
                    </a>
                    <div class="font-semibold flex flex-col gap-y-2">
                        <div>
                            <a class="text-white hover:text-orange-800"
                                href="{{ route('categories.show', $product->category->slug) }}">{{ $product->category->name }}</a>
                        </div>
                        <a class="tracking-tighter leading-relaxed" href="/product/{{ $product->identifier }}">
                            <div class="">
                                <span>{{ $product->name }}</span>
                            </div>

                            <div class="text-sm flex container mx-auto">
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
            {{ $products->links() }}
        </div>
    </x-productlist>
</body>

</html>
