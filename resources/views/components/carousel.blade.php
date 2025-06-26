<div x-data="{
    init() {
        const content = this.$refs.content;
        const item = this.$refs.item;
        const clone = item.cloneNode(true);
        content.appendChild(clone);
    }
}" x-init="init"
    class="relative order-1 lg:order-3 h-35 flex w-full lg:h-screen lg:w-32 bg-charm-dark-400 lg:bg-charm-dark-500/40 backdrop-blur-xs border-b-6 border-charm-gold lg:border-charm-dark-500 lg:border-s-6 lg:border-b-0 border-double overflow-hidden group carousel-halftone">
    {{-- <div class="absolute top-0 z-20 w-full h-10 bg-gradient-to-b from-charm-dark-400 to-transparent"></div> --}}
    {{-- <div class="absolute bottom-0 z-20 w-full h-10 bg-gradient-to-t from-charm-dark-400 to-transparent"></div> --}}

    <!-- Контейнер з анімацією -->
    <div x-ref="content"
        class="flex flex-row lg:flex-col justify-center lg:w-full animate-marquee-x lg:animate-marquee-y group-hover:paused relative z-20">
        <!-- Оригінальний блок -->
        <div x-ref="item" class="flex flex-row lg:flex-col justify-around flex-shrink-0 w-full items-center">
            @foreach ($carousel as $image)
                <img src="{{ $image->getFirstMediaUrl('carousel', 'preview') }}"
                    class="size-24 lg:my-1.5 border border-charm-gold relative z-20" alt="">
            @endforeach
        </div>
    </div>
</div>

<style>
    .carousel-halftone::after {
        /* Cover our element */
        content: '';
        position: absolute;
        inset: 0;
        mask-image: linear-gradient(rgb(0 0 0 / .25), rgb(0 0 0 / .25));

        /* Dotted background */
        background-image: radial-gradient(circle at center,
                black 0.06rem,
                transparent 0);
        background-size: .35rem 0.35rem;
        background-position: 0 0, 0.15rem 0.15rem;
    }

    .group:hover .animate-marquee {
        animation-play-state: paused;
    }
</style>
