@props(['image', 'title', 'caption', 'description'])

<div class="overflow-hidden h-100 md:h-120 bg-no-repeat bg-cover bg-center relative page-header"
    style="background-image: image-set(
            url('{{ Vite::asset("resources/images/main-$image.webp") }}') type('image/webp'),
            url('{{ Vite::asset("resources/images/main-$image.png") }}') type('image/png'));">
    <div
        class="flex justify-center items-center backdrop-blur-xs bg-black/45 size-full page-header-halftone relative z-20">
        <div class="w-full md:max-w-xl mx-auto px-5 py-2.5 md:p-0 relative z-30 space-y-5">
            <h1
                class="font-[Lora] font-semibold uppercase text-2xl lg:text-4xl text-charm-cream-100 text-center page-header-title">
                {{ $title }}
            </h1>
            @isset($caption)
                <div
                    class="font-[Lora] text-xl md:text-xl text-charm-cream-200/90 text-center text-balance page-header-caption">
                    {{ $caption }}
                </div>
            @endisset
            @isset($description)
                <div class="font-[Lora] text-lg md:text-xl text-white text-center italic">
                    {{ $description }}
                </div>
            @endisset
            {{ $slot }}
        </div>
    </div>
</div>

<style>
    .page-header-halftone::after {
        /* Cover our element */
        content: '';
        position: absolute;
        inset: 0;
        mask-image: linear-gradient(rgb(0 0 0 / .25), rgb(0 0 0 / .25));

        /* Dotted background */
        background-image: radial-gradient(circle at center, black 0.06rem, transparent 0);
        background-size: .32rem .32rem;
        background-position: 0 0, 0.5rem 0.5rem;
    }

    @keyframes move {
        100% {
            transform: translate3d(0, 0, 1px) rotate(360deg);
        }
    }
</style>
