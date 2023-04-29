<x-master title="{{ $product->name }}">
    <div class="container">
        <div class="grid grid-cols-2  min-h-screen justify-center gap-x-4">
            <div class="w-full flex flex-col justify-center">
                <img class="w-80 flex-shrink-0 " src="{{ asset('assets/Logo.png') }}" alt="">
            </div>
            <div class="w-full flex flex-col items-start justify-center">
                <form action="{{ route('cart.store') }}" method="post">
                    <div class="flex flex-col gap-5">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div>
                            <span class="font-bold text-5xl tracking-wide leading-relaxed text-slate-800">
                                {{ $product->name }}</span>
                        </div>
                        <div class="flex item-start gap-x-4">
                            <div class="">
                                @foreach ($product->categories as $category)
                                    <a class="font-semibold border rounded-md py-1 px-2 text-center text-sm bg-slate-800 hover:bg-orange-600 transition duration-300 text-white"
                                        href="{{ route('categories.show', $category->name) }}">{{ $category->name }}</a>
                                @endforeach
                                |
                            </div>
                            <div class="">
                                <span class="font-bold">12</span>
                                <span class="text-gray-500">Penilaian</span>
                            </div>
                            |
                            <div class="">
                                <span class="font-bold">12</span>
                                <span class="text-gray-500">Penilaian</span>
                            </div>
                        </div>
                        <div class="flex items-start text-4xl font-semibold">
                            <span>Rp.{{ number_format($product->price) }}</span>
                        </div>

                        <div class="flex items-center gap-x-4">
                            <span class="font-semibold text-gray-500 text-xl">Kuantitas</span>
                            @if ($product->stock > 0)
                                <div class="">
                                    <input class="w-8 text-center" type="number" min="1"
                                        max="{{ $product->stock }}" name="quantity" id="quantity">
                                </div>
                                <span>Tersisa {{ $product->stock }} pcs</span>
                            @else
                                <span class="text-red-600">Produk Habis !!!!</span>
                            @endif
                        </div>

                        <div>
                            <x-button styles="bg-slate-700 text-white">Masukan Keranjang</x-button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-master>
