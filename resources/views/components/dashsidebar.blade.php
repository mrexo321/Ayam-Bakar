<div class='min-h-screen border-r w-40'>
    <div class="flex items-center gap-x-2 justify-center">
        <div>
            <img class="flex-shrink-0 w-8" src="{{ asset('assets/Logo.png') }}" alt="foto profile">
        </div>
        <div class="flex flex-col">
            <div class="text-sm font-semibold">
                <span>{{ auth()->user()->name }}</span>
            </div>
            <div>{{ auth()->user()->role }}</div>
        </div>
    </div>
</div>
