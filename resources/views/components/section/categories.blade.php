<section x-intersect:enter="showProductsButton = false" x-intersect:leave="showProductsButton = true" x-cloak
    class="w-full bg-cover bg-fixed flex justify-center items-center relative -z-50 overflow-hidden isolate"
    style="background-image: url('{{ Vite::asset('resources/images/bg-section-categories.png') }}')">
    <div
        class="size-full flex items-center product-section-halftone bg-charm-brown-300/5 backdrop-blur-xs px-0 py-20 lg:px-0 md:py-30">
        <div
            class="bg-charm-cream-100/85 w-full max-w-3xl mx-5 md:mx-10 lg:mx-auto flex flex-col relative z-20 p-5 shadow-lg box-category-select">
            <div
                class="sixe-full px-5 py-10 md:py-15 border-black border flex flex-col space-y-5 justify-center items-center relative">
                <img src="{{ Vite::asset('resources/images/icons/woman-hair-extended-in-front-of-the-head-dark.svg') }}"
                    class="absolute top-1/2 left-1/2 -translate-1/2 size-[98%] md:size-[160%] opacity-3 z-0"
                    alt="">
                <div class="text-4xl/9 md:text-5xl/11 text-center font-[Pacifico] font-thin text-shadow-lg">
                    {{ env('APP_NAME') }}<br>Company
                </div>
                <div class="mt-2.5 text-xl/6 md:text-2xl/6 text-gray-800 text-center uppercase">
                    Check out our<br>other products
                </div>

                <button type="button"" class="p-2.5 mx-auto borde border-charm-dark-300">
                    <span
                        class="bg-charm-dark-300 block px-10 py-2.5 text-xl text-charm-cream-300 font-bold font-[Oswald]">
                        Our Products
                    </span>
                </button>
            </div>
        </div>
    </div>
</section>

<style>
    .product-section-halftone::after {
        content: '';
        position: absolute;
        inset: 0;

        /* Маска (можеш змінити або прибрати, якщо не потрібна) */
        mask-image: linear-gradient(to bottom, rgba(100, 100, 100, .05), rgba(100, 100, 100, .05));

        /* Квадратна сітка */
        background-image:
            repeating-linear-gradient(0deg, #000, #000 0.05rem, transparent 0.05rem, transparent 0.3rem),
            repeating-linear-gradient(90deg, #000, #000 0.05rem, transparent 0.05rem, transparent 0.3rem);

        background-size: .25rem .25rem;
        background-position: 0 0;
    }
</style>
