@props(['variant' => 'marker', 'color' => 'light'])

@php
    $variantClass = match ($variant) {
        'marker' => 'before:absolute before:-inset-1 before:block before:-skew-y-3',
        'font' => 'font-[Pacifico]',
        default => '',
    };

    $colorClass = match ($color) {
        'light' => 'before:bg-charm-cream-400 text-charm-dark-600',
        'dark' => 'before:bg-charm-dark-300 text-charm-cream-100',
        'black' => 'before:bg-charm-dark-400 text-charm-cream-200',
        default => 'text-inherit',
    };
@endphp

<span {{ $attributes->class(['relative inline-block', $variantClass, $variant === 'marker' ? $colorClass : null]) }}>
    <span class="{{ $variant !== 'marker' ? $colorClass : '' }} relative">
        {{ $slot }}
    </span>
</span>
