<x-master title="Products Page">
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
    <div class="container mx-auto">
        <x-productlist>
            <div class="leading relax tracking-tight">
                <div class="flex gap-x-2 items-center capitalize font-semibold tracking-wide text-base ">
                    <span class=""> List Product</span>
                    <span>></span>
                    <a href="{{ Request::path() }}">
                        <span class="hover:text-orange-600">{{ Request::path() }}</span>
                    </a>
                </div>
                <p class="text-sm text-orange-700">Produk produk rekomendasi galeri kami</p>
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
                                @foreach ($product->categories as $category)
                                    <a class="text-white hover:text-slate-800"
                                        href="/categories/{{ $category->name }}">{{ $category->name }}</a>
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
            <div class="w-full flex items-center justify-end">
                {{ $products->links() }}
            </div>
        </x-productlist>
    </div>
</x-master>
