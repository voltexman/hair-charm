@props(['link'])

<a {{ $attributes->class('text-charm-cream-100 text-lg font-[Poppins] flex gap-1.5 lg:gap-2.5 items-center group') }}
    href="{{ route($link) }}">
    <span
        class="size-3 bg-charm-cream-100 rotate-45 group-hover:rotate-90 transition-transform duration-300 block"></span>
    <span class="group-hover:translate-x-2.5 transition-transform duration-300">{{ $slot }}</span>
</a>
