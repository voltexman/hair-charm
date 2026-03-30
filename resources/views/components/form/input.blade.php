@props(['type' => 'text', 'variant' => 'light', 'icon' => null])

@php
    $base = "w-full px-5 py-3.5 font-medium placeholder:font-medium placeholder:text-sm 
             focus:outline-none focus-visible:outline-none transition duration-250";

    $light = "bg-charm-cream-200 border border-charm-brown-200 
              text-charm-brown-700 placeholder:text-charm-cream-600 
              focus:ring-2 focus:ring-charm-brown-400 focus:ring-offset-2";

    $dark = "bg-charm-dark-800/40 border border-charm-brown-800
             text-charm-cream-200 placeholder:text-charm-brown-400/60
             focus:ring-2 focus:ring-charm-brown-500 focus:ring-offset-2";

    $withIcon = $icon ? 'pl-11' : '';
@endphp

<div class="relative w-full">
    @if ($icon)
        <x-dynamic-component :component="'lucide-' . $icon"
            class="absolute left-3.5 top-1/2 -translate-y-1/2 size-5 stroke-charm-brown-500" />
    @endif

    <input
        {{ $attributes->merge(['type' => $type])->class("$base $withIcon " . ($variant === 'dark' ? $dark : $light)) }} />
</div>
