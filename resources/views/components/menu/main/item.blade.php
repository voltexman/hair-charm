@props(['icon' => null, 'link' => null])

<a
    {{ $attributes->class('flex flex-col items-center lg:flex-row border rounded-lg lg:border-0 border-charm-cream-200/10 bg-charm-brown-600/50 lg:bg-transparent p-5 lg:p-0 gap-2.5 group main-menu-item') }}>
    @if ($icon)
        <x-dynamic-component :component="'lucide-' . $icon"
            class="size-10 flex-none text-charm-cream-200 group-hover:text-charm-cream-600 transition-colors duration-300"
            stroke-width="1.2" />
    @endif
    <div class="lg:-mb-2.5 flex flex-col gap-2.5 overflow-hidden">
        <span
            class="lg:text-4xl text-charm-cream-200 font-[Oswald] font-light tracking-wider drop-shadow-lg uppercase group-hover:text-charm-cream-600 transition-colors duration-300">
            {{ $slot }}
        </span>
        <span
            class="hidden lg:block w-1/2 h-0.5 bg-charm-cream-600 -translate-x-full opacity-0 group-hover:opacity-100 group-hover:translate-x-0 transition-transform duration-300"></span>
    </div>
</a>
