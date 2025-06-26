@props(['variant' => 'light', 'logo' => false])

@php
    $variantClass = match ($variant) {
        'dark' => 'bg-charm-dark-500 text-charm-cream-100',
        'light' => 'bg-charm-cream-100 text-charm-dark-400',
        'cream' => 'bg-charm-cream-500 text-charm-dark-400',
        default => 'bg-transparent text-charm-dark-400',
    };
@endphp

<span {{ $attributes->class([$variantClass, 'px-1 inline-block']) }}>
    @if ($logo)
        <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="size-5 inline-block" alt="">
    @endif
    {{ $slot }}
</span>
