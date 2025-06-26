@props(['icon' => null, 'link' => null])

<a href="{{ $link }}"
    class="flex flex-col items-center lg:flex-row border rounded-lg lg:border-0 border-charm-cream-200/10 bg-charm-brown-600/30 lg:bg-transparent p-5 lg:p-0 gap-2.5 block group">
    @if ($icon)
        @svg('lucide-' . $icon, 'size-8 lg:size-10 flex-none text-charm-cream-200 group-hover:text-charm-cream-600 transition-colors duration-300 stroke-[1.3]')
    @endif
    <div class="lg:-mb-2.5 flex flex-col gap-2.5 overflow-hidden">
        <span
            class="text-xl lg:text-4xl text-charm-cream-200 font-[Oswald] font-thin tracking-wider drop-shadow-lg uppercase group-hover:text-charm-cream-600 transition-colors duration-300">
            {{ $slot }}
        </span>
        <span
            class="hidden lg:block w-1/2 h-0.5 bg-charm-cream-600 -translate-x-full opacity-0 group-hover:opacity-100 group-hover:translate-x-0 transition-transform duration-300"></span>
    </div>
</a>
