@props(['type' => 'info', 'icon', 'title', 'message'])

<div
    {{ $attributes->class('bg-charm-cream-200 min-h-50 border border-dashed border-charm-brown-200 px-4 py-10 flex flex-col justify-center items-center relative z-10') }}>
    @isset($icon)
        <x-dynamic-component :component="'lucide-' . $icon" class="size-15 flex-none stroke-charm-brown-400 mx-auto" stroke-width="1.5" />
    @endisset
    <div class="text-center text-lg mt-5 text-charm-brown-600 font-[Oswald]">{{ $title }}</div>
    @isset($message)
        <div class="w-xs text-center mt-2.5 text-charm-brown-400 font-[Poppins] text-sm/5 px-4">{{ $message }}</div>
    @endisset
</div>
