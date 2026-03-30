@props(['images'])

<div {{ $attributes->class('relative size-full overflow-hidden py-10 sm:py-16 md:py-20') }}>
    @if ($images && count($images) > 1)
    @else
        <img src="{{ $images[0] }}"
            class="absolute inset-0 size-full object-cover object-center z-0 animate-scale-pulse" alt="" />
    @endif

    <div class="h-full absolute inset-0 bg-charm-cream-100/60 backdrop-blur-lg z-10 product-section-halftone">
        <div class="relative flex justify-center items-center mx-auto overflow-hidden z-20 h-full">
            <img src="{{ $images[0] }}" alt=""
                class="lg:h-[80%] max-w-[90%] mx-auto object-cover object-center 
                        bg-charm-cream-500/25 p-4 sm:p-5 aspect[4/3] aspect-square backdrop-blur-xs shadow-xl" />
        </div>
    </div>
</div>


<style>
    .product-section-halftone::after {
        content: '';
        position: absolute;
        inset: 0;

        /* Маска (можеш змінити або прибрати, якщо не потрібна) */
        mask-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.18), rgba(255, 255, 255, 0.18));

        /* Квадратна сітка з напівпрозорим білим */
        background-image:
            repeating-linear-gradient(0deg, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8) 0.05rem, transparent 0.05rem, transparent 0.35rem),
            repeating-linear-gradient(90deg, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8) 0.05rem, transparent 0.05rem, transparent 0.35rem);

        background-size: 0.25rem 0.25rem;
        background-position: 0 0;
    }
</style>
