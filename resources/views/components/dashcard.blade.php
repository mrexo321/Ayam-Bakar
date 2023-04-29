@props(['svg', 'numbers', 'title'])
<div
    class="h-24 shadow-xl rounded-lg col-span-1 bg-white border border-gray-300 flex justify-center  items-center gap-x-4">
    {!! $svg !!}
    <div class="flex flex-col">
        <span class="text-gray-600 text-lg">{{ $title }}</span>
        <span class="font-semibold">{{ $numbers }}</span>
    </div>
</div>
