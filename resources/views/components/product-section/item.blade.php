@props(['image', 'link' => '#', 'title' => '', 'caption' => ''])

<div {{ $attributes->class('relative transition-all duration-500 border-b lg:border-e lg:border-b-0 border-charm-dark-300 last:border-0 shadow-[0px_10px_12px_3px] lg:shadow-[10px_0px_12px_3px] shadow-black/50 overflow-hidden') }}"
    x-data="{ id: $id('accordion') }" :class="activeAccordion === id ? 'h-full lg:w-1/2' : 'w-full lg:w-1/8 h-25 lg:h-full'"
    @mouseenter="setActiveAccordion(id)" @mouseleave="setActiveAccordion(null)">

    <div x-show="activeAccordion !== id" x-cloak class="absolute inset-0 flex flex-col justify-center items-center p-5">
        <div class="uppercase text-white lg:[writing-mode:vertical-lr] text-center text-2xl lg:text-3xl drop-shadow-lg">
            {{ $title }}
        </div>
    </div>

    <div x-show="activeAccordion === id" x-cloak
        class="absolute inset-0 flex flex-col justify-center items-center bg-black/60">
        <div class="max-w-sm flex flex-col gap-5 px-5 py-10">
            <div class="text-charm-cream-100 font-medium lg:font-normal text-xl lg:text-3xl drop-shadow-lg uppercase"
                x-show="activeAccordion === id" x-transition:enter="transition-opacity duration-300 delay-150"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                {{ $title }}
            </div>
            <div class="font-[Lora] font-medium lg:text-lg text-charm-cream-300" x-show="activeAccordion === id"
                x-transition:enter="transition-opacity duration-500 delay-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100">
                {{ $caption }}
            </div>
            <a href="{{ $link }}" class="me-auto rounded-full bg-white px-5 py-2.5 font-medium"
                x-show="activeAccordion === id" x-transition:enter="transition-opacity duration-500 delay-500"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">Open</a>
        </div>
    </div>

    <img src="{{ $image }}" class="object-cover size-full" alt="{{ $title }}">
</div>
