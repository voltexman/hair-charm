@props(['images'])

<div {{ $attributes->class('relative w-full h-96 overflow-hidden py-20') }}>
    <!-- Фонове зображення -->
    <img src="{{ $images[0] }}" class="absolute inset-0 size-full object-cover object-center z-0 animate-scale-pulse"
        alt="" />

    <!-- Півпрозорий шар з розмиттям -->
    <div class="size-full absolute inset-0 bg-zinc-800/50 backdrop-blur-md z-10 product-section-halftone">

        <div x-data="carousel()" x-init="init" class="relative mx-auto overflow-hidden z-20"
            @wheel.passive="onScroll_" @touchstart="onTouchStart" @touchend="onTouchEnd">
            <!-- Слайди -->
            <div class="flex transition-transform duration-500 ease-in-out select-none"
                :style="`transform: translateX(-${active * 90}%);`">
                <template x-for="(slide, index) in slides" :key="index">
                    <div class="w-[80%] mr-[5%] ms-5 flex-shrink-0 cursor-pointer" @click="goTo(index)">
                        <div class="h-auto rounded-lg flex items-center justify-center">
                            <img :src="slide" alt=""
                                class="w-full h-auto object-cover object-center" />
                        </div>
                    </div>
                </template>
            </div>

            <!-- Кнопки -->
            <button @click="prev"
                class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow"
                x-show="active > 0">
                &larr;
            </button>
            <button @click="next"
                class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow"
                x-show="active < slides.length - 1">
                &rarr;
            </button>
        </div>

        <!-- Зображення на передньому плані -->
        {{-- @foreach ($images as $image)
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
                    class="w-[85%] object-cover object-center backdrop-blur-sm relative z-20 shadow-xl shadow-charm-cream-900/35 bg-charm-dark-200/10 border border-charm-cream-300/60 p-2.5 md:p-5"
                    alt="" />
            @endif
        @endforeach --}}
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

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('carousel', () => ({
            active: 0,
            slides: @json($images),
            startX: 0,
            endX: 0,

            next() {
                if (this.active < this.slides.length - 1) this.active++;
            },

            prev() {
                if (this.active > 0) this.active--;
            },

            goTo(index) {
                this.active = index;
            },

            onScroll(e) {
                if (Math.abs(e.deltaY) < Math.abs(e.deltaX)) return;

                if (e.deltaY > 0) this.next();
                else this.prev();
            },

            onTouchStart(e) {
                this.startX = e.changedTouches[0].clientX;
            },

            onTouchEnd(e) {
                this.endX = e.changedTouches[0].clientX;
                const diff = this.endX - this.startX;

                if (Math.abs(diff) > 30) {
                    if (diff < 0) this.next();
                    else this.prev();
                }
            }
        }))
    })
</script>
