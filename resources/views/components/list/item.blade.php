@props(['index', 'brown'])

<div
    class="flex gap-x-2.5 lg:gap-x-5 border-b group-data-[variant=light]:border-white/25 group-data-[variant=dark]:border-black/25 last:border-0 border-dashed py-2.5 lg:py-3.5 last:pb-0 first:pt-0 relative">
    @isset($index)
        <span @class([
            'absolute top-2.5 left-0 text-xs font-[Poppins] font-bold opacity-80',
            'text-charm-brown-600 rotate-30' => isset($brown),
        ])>{{ $index }}</span>
    @endisset
    <li
        {{ $attributes->class('text-lg uppercase font-semibold font-[Lora] lg:stracking-wide group-data-[variant=light]:text-white group-data-[variant=dark]:text-charm-dark-400') }}>
        <span @class([
            'ms-7.5' => isset($index),
            'text-charm-brown-600' => isset($brown),
        ])>{{ $slot }}</span>
    </li>
</div>
