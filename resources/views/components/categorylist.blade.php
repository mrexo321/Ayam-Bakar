<div class="py-4">
    <div class="w-full flex flex-col gap-y-2">
        <div class="text-xl font-semibold text-slate-900 tracking-tight leading-relaxed">
            <span>Belanja sesuai kategori</span>
        </div>
        <div class=" text-lg text-orange-500 tracking-tight leading-relaxed ">
            <span>Setiap minggu kami menyediakan produk ayam yang segar langsung dari peternakan</span>
        </div>
    </div>

    <div class="w-full">
        <ul class="grid grid-cols-3 gap-12">
            @foreach ($categories as $category)
                <a href="{{ route('categories.show', $category->slug) }}">
                    <li class="">
                        <div class="flex flex-col gap-y-2">
                            <div>
                                <img class="shadow-2xl rounded-lg w-auto flex-shrink-0"
                                    src="{{ asset('assets/Logo.png') }}" alt="">
                            </div>
                            <div class="text-base text-slate-800 font-semibold tracking-tighter">
                                <span>{{ $category->name }}</span>
                            </div>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</div>
