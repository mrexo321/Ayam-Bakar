@props(['styles'])
<button type="submit"
    class="group relative flex w-full justify-center rounded-md border border-transparent {{ $styles }} py-2 px-4 text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
    {{ $slot }}
</button>
