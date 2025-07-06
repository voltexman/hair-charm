@props(['images'])

<div {{ $attributes->class('relative size-full overflow-hidden') }}>
    <!-- Фонове зображення -->
    <img src="{{ $images[0] }}" class="size-full object-cover object-center z-0 animate-scale-pulse" alt="" />

    <!-- Півпрозорий шар з розмиттям -->
    <div
        class="size-full absolute inset-0 bg-charm-cream-900/40 backdrop-blur-md z-10 flex justify-center items-center product-section-halftone">
        <!-- Зображення на передньому плані -->
        @foreach ($images as $image)
            @if ($loop->count > 1)
                <img src="{{ $image }}" @class([
                    'w-auto h-2/3 md:h-4/5 lg:w-2/3 lg:h-auto top-[5%] left-[5%] z-20' =>
                        $loop->index === 0,
                    'w-auto h-2/3 md:h-4/5 lg:w-2/3 lg:h-auto bottom-[5%] right-[5%] z-30' =>
                        $loop->index === 1,
                    'object-cover backdrop-blur-xs absolute border border-charm-cream-300 p-2.5 md:p-5',
                ]) alt="" />
            @else
                <img src="{{ $images[0] }}"
                    class="w-3/4 object-cover object-center backdrop-blur-sm relative z-20 shadow-xl shadow-charm-cream-900/35 bg-charm-dark-200/10 border border-charm-cream-300/60 p-2.5 md:p-5"
                    alt="" />
            @endif
        @endforeach
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
