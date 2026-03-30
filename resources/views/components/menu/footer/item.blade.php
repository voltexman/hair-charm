@props(['link'])

<a {{ $attributes->class('text-charm-cream-100 font-[Poppins] flex gap-1.5 items-center group') }}
    href="{{ route($link) }}">
    <span
        class="size-2 bg-charm-cream-100 rotate-10 group-hover:rotate-90 transition-transform duration-300 block"></span>
    <span class="group-hover:translate-x-2.5 transition-transform duration-300">{{ $slot }}</span>
</a>
