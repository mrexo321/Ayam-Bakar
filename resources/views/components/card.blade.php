@props(['styles'])
<li class="">
    <div class="text-left shadow-lg rounded-xl {{ $styles }} flex flex-col justify-center gap-y-2 max-w-max p-8">
        {{ $slot }}
    </div>
</li>
