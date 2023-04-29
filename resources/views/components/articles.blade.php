<div>
    <section class="container mx-auto py-16 flex flex-col gap-y-8">
        @if ($articles->count() == 0)


            <div class="leading relax tracking-tight text-center">
                <span class="font-semibold tracking-wide text-2xl"> Artikel</span>
                <p class="text-orange-700 text-xl">
                    Jika Anda mempunyai waktu yang singkat, dan ingin dimanfaatkan,<br>
                    kami telah
                    menyediakan Anda beberapa artikel yang mungkin bermanfaat.</p>
            </div>

            <p>Article Belum ada</p>
        @else
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-24 lg:grid-cols-3">
                @foreach ($articles as $article)
                    <x-card styles="bg-slate-900">
                        <a href="{{ route('articles.show', $article->slug) }}">
                            <img class="w-48 flex-shrink-0 h-full rounded-lg shadow" src="{{ $article->image }}"
                                alt="">
                        </a>
                        <div class="font-semibold flex flex-col gap-y-2">
                            <div class="">
                                @foreach ($article->tags as $tag)
                                    <a class="text-orange-400 hover:text-orange-800"
                                        href="{{ route('tags.show', $tag->slug) }}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                            <a class="tracking-tighter leading-relaxed text-slate-200" href="#">
                                <div class="">
                                    <span>{{ $article->title }}</span>
                                </div>

                                <div class="text-gray-500 text-sm">
                                    <a href="{{ route('articles.show', $article->slug) }}">
                                        <x-button
                                            styles="bg-white text-black transition duration-300 hover:bg-orange-500 hover:text-white">
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
                    <a href="{{ route('articles.index') }}">
                        {{-- <button
                        class="py-1 px-4 bg-orange-600 rounded-lg text-white text-base shadow-lg hover:bg-orange-700 tracking-tight">
                        Lihat lebih >
                    </button> --}}
                        <x-button styles="bg-black text-white shadow-lg hover:bg-orange-700 transition duration-300">
                            Lihat lebih banyak >
                        </x-button>
                    </a>
                </div>
            </div>
        @endif
    </section>
</div>
