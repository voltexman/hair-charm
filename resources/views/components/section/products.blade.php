<section class="w-full bg-white h-100 flex items-center relative -z-50 overflow-hidden isolate">
    <span class="fixed top-0 left-0 text-9xl font-black text-stone-500 -rotate-45 opacity-10">
        {{ env('APP_NAME') }}
    </span>
    <span class="fixed top-[5%] left-20 text-6xl font-semibold text-stone-500 -rotate-45 opacity-10">
        {{ env('APP_NAME') }}
    </span>
    <span class="fixed top-[10%] left-[25%] text-7xl font-semibol uppercase text-stone-500 -rotate-45 opacity-10">
        {{ env('APP_NAME') }}
    </span>
    <span class="fixed top-[20%] left-[50%] text-8xl font-black uppercase text-stone-500 -rotate-45 opacity-10">
        {{ env('APP_NAME') }}
    </span>
    <span class="fixed top-[15%] left-[30%] text-8xl font-light uppercase text-stone-500 -rotate-45 opacity-10">
        {{ env('APP_NAME') }}
    </span>
    <span class="fixed top-[80%] left-[80%] text-6xl font-black uppercase text-stone-500 -rotate-45 opacity-10">
        {{ env('APP_NAME') }}
    </span>
    <span class="fixed top-[60%] left-[60%] text-8xl font-thin uppercase text-stone-500 -rotate-45 opacity-10">
        {{ env('APP_NAME') }}
    </span>
    <div class="size-full backdrop-blur-[2px] flex items-center">
        <div class="max-w-6xl w-full mx-auto flex items-center">
            <div class="hidden lg:block w-1/3 max-w-sm">
                <span class="text-5xl drop-shadow-lg uppercase">{{ env('APP_NAME') }}<br>Company</span>
            </div>
            <div class="w-1/2 lg:w-1/3 mb-auto px-5 lg:mb-0 lg:px-0 lg:max-w-sm">
                <span class="text-2xl lg:text-5xl font-bold drop-shadow-lg text-charm-dark-300 font-[Oswald] uppercase">
                    Check out our<br>other products
                </span>
            </div>
            <div class="w-auto relative -bottom-20 ms-auto lg:mx-auto me-5 lg:me-0 border border-charm-brown-600 p-4 rounded-full"
                x-data="{ progress: 0 }" @scroll.window="progress = window.pageYOffset % 360" x-init="progress = window.pageYOffset % 360"
                x-intersect:enter="showProductsButton = false" x-intersect:leave="showProductsButton = true" x-cloak>
                <div class="flex justify-center items-center size-30 rounded-full bg-charm-brown-600"
                    :style="'transform: rotate(' + progress + 'deg)'">
                    <span
                        class="absolute inline-flex size-20 animate-ping rounded-full bg-charm-brown-600 opacity-75"></span>
                    <span class="text-white text-sm font-black tracking-widest leading-5 text-center animate-pulse">
                        Our<br>Products
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
