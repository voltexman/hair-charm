<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ showProductsButton: false, loading: true }" @load.window="loading = false">
    <header x-intersect:enter="showProductsButton = false" x-intersect:leave="showProductsButton = true">
        @section('header')
            <div class="h-screen flex flex-row">
                <div class="flex flex-col lg:flex-row w-full bg-charm-cream relative">
                    @include('partials.header-bg-lines')
                    <div class="lg:w-1/2 flex flex-col justify-between">
                        <div class="text-6xl font-light uppercase ms-auto my-10 text-charm-cream-200 bg-black p-2">
                            Charm
                        </div>
                        <div class="px-10 text-4xl text-black/80 font-black uppercase drop-shadow-lg">
                            Luxury elite Slavic virgin hair cut on the territory of
                            <span class="border-b">Ukraine and Russia</span>.
                            Unique opportunity to buy hair straight from the tin
                        </div>
                        <div class="flex justify-between mb-5 px-10">
                            <button type="button" class="cursor-pointer hover:-translate-x-5 transition-transform">
                                <x-lucide-move-left stroke-width="0.5" class="size-14" />
                            </button>
                            <button type="button" class="cursor-pointer hover:translate-y-5 transition-transform">
                                <x-lucide-move-down stroke-width="0.5" class="size-14" />
                            </button>
                            <button type="button" class="cursor-pointer hover:translate-x-5 transition-transform">
                                <x-lucide-move-right stroke-width="0.5" class="size-14" />
                            </button>
                        </div>
                    </div>
                    <div class="lg:w-1/2 border-s-6 border-double relative">
                        <div
                            class="text-6xl font-light uppercase me-auto absolute top-24 p-2 flex w-auto text-charm-cream-200 bg-black">
                            Hair
                        </div>
                        <img src="https://www.hair-charm.com/images/slideshow/slide-2.jpg"
                            class="object-cover size-full object-right" />
                    </div>
                    <div class="flex lg:flex-col lg:border-s-6 border-double gap-5 bg-charm-cream-300 py-2.5 px-5">
                        <img src="https://www.hair-charm.com/images/carousel/25589953_185101362072182_1658248390_n.jpg"
                            class="size-22 rounded-full border-double border-4" alt="">
                        <img src="https://www.hair-charm.com/images/carousel/25593536_185267385388913_229112911_nn.jpg"
                            class="size-22 rounded-full border-double border-4" alt="">
                        <img src="https://www.hair-charm.com/images/carousel/25589953_185101362072182_1658248390_n.jpg"
                            class="size-22 rounded-full border-double border-4" alt="">
                        <img src="https://www.hair-charm.com/images/carousel/25589953_185101362072182_1658248390_n.jpg"
                            class="size-22 rounded-full border-double border-4" alt="">
                        <img src="https://www.hair-charm.com/images/carousel/25589953_185101362072182_1658248390_n.jpg"
                            class="size-22 rounded-full border-double border-4" alt="">
                        <img src="https://www.hair-charm.com/images/carousel/25589953_185101362072182_1658248390_n.jpg"
                            class="size-22 rounded-full border-double border-4" alt="">
                        <img src="https://www.hair-charm.com/images/carousel/25589953_185101362072182_1658248390_n.jpg"
                            class="size-22 rounded-full border-double border-4" alt="">
                    </div>
                </div>
            </div>
        @show
    </header>

    <div x-data="{ isSticky: false }" x-init="window.addEventListener('scroll', () => {
        isSticky = window.scrollY < $el.offsetTop
    })"
        :class="!isSticky ? 'bg-charm-cream-400/80 backdrop-blur-xs shadow-md shadow-charm-dark-500/10' : 'bg-charm-cream-300'"
        class="sticky top-0 h-18 w-full z-80 transition-all duration-500">
        <div class="flex justify-between px-5 h-full">
            <div class="flex items-center gap-x-2.5 h-full">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="size-9 drop-shadow-lg" alt="">
                <span class="font-[Alex_Brush] text-4xl font-semibold text-charm-dark-300 tracking-wide mt-1">
                    {{ env('APP_NAME') }}
                </span>
            </div>
            <div class="flex items-center">
                <x-lucide-menu class="size-7 text-charm-dark-400" stroke-width="1.5" />
            </div>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <div x-show="loading" x-transition.opacity.duration.1100ms
        class="fixed inset-0 bg-charm-dark-500 z-100 flex justify-center items-center" x-cloak>
        <x-lucide-loader-2 class="absolute left-1/2 top-1/2 -translate-1/2 size-50 text-white animate-spin duration-650"
            stroke-width="1" />
        <img src="{{ Vite::asset('resources/images/icons/logo-light.svg') }}"
            class="absolute left-1/2 top-1/2 -translate-1/2 size-8 lg:size-25 drop-shadow-lg" alt="">
    </div>

    <div x-show="showProductsButton" x-transition.opacity.duration.500ms x-cloak
        class="fixed bottom-3 right-3 size-22 z-50 cursor-pointer">
        <svg viewBox="0 0 200 200"
            class="animate-spin duration-30000 size-full border rounded-full border-charm-brown-600 backdrop-blur-sm bg-charm-brown-600/15">
            <defs>
                <path id="circlePath" d="M 100, 100 m -75, 0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0"></path>
            </defs>
            <text
                class="fill-current font-[Oswald] text-2xl tracking-wider text-charm-dark-500 font-black uppercase invert-25">
                <textPath href="#circlePath" startOffset="0">
                    Our Products {{ env('APP_NAME') }} company
                </textPath>
            </text>
        </svg>
        <div
            class="absolute left-1/2 top-1/2 -translate-1/2 inset-0 flex items-center justify-center bg-charm-brown-600 rounded-full size-15">
            <span class="absolute inline-flex size-12 animate-ping rounded-full bg-charm-brown-600 opacity-60"></span>
            <img src="{{ Vite::asset('resources/images/icons/logo-light.svg') }}"
                class="size-8 lg:size-10 drop-shadow-lg" alt="">
        </div>
    </div>


    <footer class="bg-charm-dark-500 flex flex-col justify-between">
        <div class="grid lg:grid-cols-2 max-w-4xl w-full mx-auto my-20 gap-10">
            <div class="flex flex-col items-center">
                <img src="{{ Vite::asset('resources/images/icons/hair-salon-commercial-signal-light.svg') }}"
                    class="size-35 mb-8" alt="">
                <span class="font-[Oswald] font-black text-xl lg:text-2xl tracking-wider text-charm-cream-200">
                    +380931501651
                </span>
                <span class="font-[Oswald] font- tracking-wide text-charm-cream-200">
                    infohaircharm@gmail.com
                </span>
                <div class="mt-2.5 flex gap-x-2.5">
                    <img src="{{ Vite::asset('resources/images/icons/social/facebook-light.svg') }}"
                        class="size-10 lg:size-12" alt="">
                    <img src="{{ Vite::asset('resources/images/icons/social/whatsapp-light.svg') }}"
                        class="size-10 lg:size-12" alt="">
                    <img src="{{ Vite::asset('resources/images/icons/social/instagram-light.svg') }}"
                        class="size-10 lg:size-12" alt="">
                </div>
            </div>
            <div class="hidden lg:flex">form</div>
        </div>
        <div class="h-12 w-full flex items-center mt-auto border-t border-white/5">
            <div class="max-w-6xl mx-auto text-xs text-gray-400">
                All rights reserved. {{ env('APP_NAME') }} &copy; {{ date('Y') }}
            </div>
        </div>
    </footer>
</body>

</html>
