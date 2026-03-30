@props(['variant' => 'dark', 'link' => null])

@php
    $base = 'flex rounded-full justify-center items-center px-5 py-2.5 font-medium cursor-pointer font-[Oswald]
    disabled:opacity-50 disabled:cursor-not-allowed transition-colors duration-200';

    $variants = [
        'light' => 'bg-charm-cream-100 text-charm-dark-300 hover:bg-charm-cream-200',
        'dark' => 'bg-charm-dark-300 text-charm-cream-200 hover:bg-charm-dark-400',
    ];
@endphp

@if ($link)
    <a href="{{ route($link) }}" {{ $attributes->class([$base, $variants[$variant] ?? $variants['dark']]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'button'])->class([$base, $variants[$variant] ?? $variants['dark']]) }}>
        {{ $slot }}
    </button>
@endif
