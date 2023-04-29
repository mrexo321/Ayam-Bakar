@props(['title', 'content'])
<div class="bg-orange-400">
    <x-nav :cartItem={{ $cartItem }} />

    <div class="flex justify-center min-h-screen text-white items-center">
        <div class="flex flex-col gap-y-6 w-1/2 text-center">
            <div class="text-4xl tracking-wide antialiased font-semibold">
                <span class="">{{ $title }}</span>
            </div>
            <div class=" leading-relaxed tracking-tighter ">
                <p>{{ $content }}</p>
            </div>
            <div class="flex justify-center gap-x-4 items-center text-sm">

            </div>
        </div>
    </div>
</div>
