<section
    class="w-full bg-[url(https://png.pngtree.com/thumb_back/fh260/background/20231229/pngtree-abstract-texture-realistic-hair-with-brown-highlights-in-a-fluffy-style-image_13913659.png)] bg-cover bg-fixed flex justify-center items-center relative -z-50 overflow-hidden isolate">
    <div class="size-full flex items-center product-section-halftone bg-black/40 backdrop-blur-sm px-5 xl:px-0 py-20">
        <div class="max-w-6xl size-full mx-auto flex flex-col space-y-5 relative z-20">
            <div class="text-4xl md:text-5xl xl:text-6xl text-center text-charm-cream-500 text-shadow-lg uppercase">
                {{ env('APP_NAME') }}<br>Company
            </div>
            <div
                class="text-3xl md:text-4xl lg:text-5xl font-bold text-center text-shadow-lg text-charm-cream-500 font-[Oswald] uppercase">
                Check out our<br>other products
            </div>

            <button type="button"" class="mt-5 p-2.5 mx-auto border border-charm-cream-500">
                <span class="bg-charm-cream-500 block px-10 py-2.5 text-xl text-charm-dark-300 font-black font-[Oswald]">
                    Our Product
                </span>
            </button>
            {{-- <div class="w-auto relative -bottom-20 ms-auto lg:mx-auto me-5 lg:me-0 border border-charm-cream-500 p-4 rounded-full z-50"
                x-data="{ progress: 0 }" @scroll.window="progress = window.pageYOffset % 360" x-init="progress = window.pageYOffset % 360"
                x-intersect:enter="showProductsButton = false" x-intersect:leave="showProductsButton = true" x-cloak>
                <div class="flex justify-center items-center size-30 rounded-full bg-charm-cream-500"
                    :style="'transform: rotate(' + progress + 'deg)'">
                    <span
                        class="absolute inline-flex size-20 animate-ping rounded-full bg-charm-cream-500 opacity-75"></span>
                    <span
                        class="text-charm-brown-700 uppercase text-xs font-black tracking-widest leading-4 text-center animate-pulse relative z-40">
                        Our<br>Products
                    </span>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<style>
    .product-section-halftone::after {
        content: '';
        position: absolute;
        inset: 0;

        /* Маска (можеш змінити або прибрати, якщо не потрібна) */
        mask-image: linear-gradient(to bottom, rgba(100, 100, 100, .1), rgba(100, 100, 100, .1));

        /* Квадратна сітка */
        background-image:
            repeating-linear-gradient(0deg, #ffffff, #ffffff 0.05rem, transparent 0.05rem, transparent 0.35rem),
            repeating-linear-gradient(90deg, #ffffff, #ffffff 0.05rem, transparent 0.05rem, transparent 0.35rem);

        background-size: .25rem .25rem;
        background-position: 0 0;
    }
</style>
