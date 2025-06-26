<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Boldonse&family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ showProductsButton: false, loading: true }" @load.window="loading = false">
    @hasSection('header')
        <header x-intersect="showProductsButton = false" x-intersect:enter="showProductsButton = false"
            x-intersect:leave="showProductsButton = true" x-cloak>
            @yield('header')
        </header>
    @endif

    <main class="flex flex-col lg:flex-row">
        <div x-data="{ isSticky: false, lastScrollY: 0 }" x-init="window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            if (currentScrollY >= $el.offsetTop && lastScrollY < $el.offsetTop) {
                isSticky = true;
            } else if (currentScrollY < $el.offsetTop && lastScrollY >= $el.offsetTop) {
                isSticky = false;
            }
            lastScrollY = currentScrollY;
        })"
            :class="isSticky ? 'bg-charm-dark-500/90 backdrop-blur-xs shadow-lg shadow-charm-dark-500/15' :
                'bg-charm-cream-300'"
            class="sticky top-0 h-16 lg:h-full w-full lg:w-16 flex-none z-80 transition-[colors, shadow] duration-300 lg:bg-charm-dark-400/95">
            <div class="flex flex-row lg:flex-col justify-between items-center px-5 lg:px-0 h-full lg:h-screen lg:py-5">
                <div class="flex flex-row lg:flex-col items-center gap-2.5">
                    <a href="{{ route('main') }}">
                        <img src="{{ Vite::asset('resources/images/icons/logo-dark.svg') }}"
                            :class="isSticky ? 'lg:hidden' : 'block'"
                            class="size-8 drop-shadow-lg transition-all duration-300" alt="">
                    </a>
                    <a href="{{ route('main') }}">
                        <img src="{{ Vite::asset('resources/images/icons/logo-light.svg') }}"
                            :class="isSticky ? 'lg:block' : 'hidden'"
                            class="size-8 drop-shadow-lg transition-all duration-300" alt="">
                    </a>
                </div>

                <div class="me-auto lg:mx-auto">
                    <a href="{{ route('main') }}" :class="isSticky ? 'text-charm-cream-200' : 'text-charm-dark-300'"
                        class="font-[Alex_Brush] text-3xl lg:text-4xl drop-shadow-lg font-semibold tracking-wide lg:text-charm-cream-200 lg:[writing-mode:vertical-lr] block transition-colors duration-300">
                        {{ env('APP_NAME') }}
                    </a>
                </div>

                <x-drawer>
                    <x-slot:open>
                        <button type="button" class="flex flex-col justify-center items-center cursor-pointer">
                            <x-lucide-menu x-bind:class="isSticky ? 'text-charm-cream-200' : 'text-charm-dark-400'"
                                class="size-7 lg:text-charm-cream-200 transition-colors duration-300"
                                stroke-width="1.5" />
                            <span
                                class="hidden lg:block font-[Oswald] text-xs uppercase font-bold tracking-widest text-charm-cream-200 mt-1">
                                Menu
                            </span>
                        </button>
                    </x-slot>

                    <x-menu>
                        <x-menu.item icon="home" :link="route('main')">Home Page</x-menu.item>
                        <x-menu.item icon="home" :link="route('about-us')">About Us</x-menu.item>
                        <x-menu.item icon="image" :link="route('gallery')">Gallery</x-menu.item>
                        <x-menu.item icon="user-circle" :link="route('contact')">Contacts</x-menu.item>
                    </x-menu>
                </x-drawer>
            </div>
        </div>
        <div class="grow">
            @yield('content')
        </div>
    </main>

    <div x-show="loading" x-transition.opacity.duration.1100ms
        class="fixed inset-0 bg-charm-dark-500 z-100 flex justify-center items-center" x-cloak>
        <x-lucide-loader-2 class="absolute left-1/2 top-1/2 -translate-1/2 size-50 text-white animate-spin duration-650"
            stroke-width="1" />
        <img src="{{ Vite::asset('resources/images/icons/logo-light.svg') }}"
            class="absolute left-1/2 top-1/2 -translate-1/2 size-8 lg:size-25 drop-shadow-lg" alt="">
    </div>

    @if (request()->route()->getName() !== 'main')
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
                <span
                    class="absolute inline-flex size-12 animate-ping rounded-full bg-charm-brown-600 opacity-60"></span>
                <img src="{{ Vite::asset('resources/images/icons/logo-light.svg') }}"
                    class="size-8 lg:size-10 drop-shadow-lg" alt="">
            </div>
        </div>
    @endif

    <footer x-intersect.margin.-100px="showProductsButton = false"
        x-intersect:enter.margin.-100px="showProductsButton = false"
        x-intersect:leave.margin.-100px="showProductsButton = true"
        class="bg-charm-dark-600 flex flex-col justify-between relative overflow-hidden shrink-0">
        <div class="grid lg:grid-cols-2 max-w-4xl w-full mx-auto my-20 gap-10">
            <div class="flex flex-col items-center">
                <img src="{{ Vite::asset('resources/images/icons/hair-salon-commercial-signal-light.svg') }}"
                    class="size-35 mb-8" alt="">
                <span class="font-[Oswald] font-black text-xl lg:text-2xl tracking-wider text-charm-cream-200">
                    +380931501651
                </span>
                <span class="font-[Oswald] tracking-wide text-charm-cream-200">
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
            <div class="hidden lg:flex">
                @include('partials.footer-tags')
            </div>
            {{-- <div class="absolute left-1/2 -translate-x-1/2 bottom-0 w-full">
                <span class="font-[Boldonse] text-[200px] text-charm-cream-700/75 opacity-5">
                    {{ env('APP_NAME') }}
                </span>
            </div> --}}
        </div>
        <div class="h-12 w-full flex items-center mt-auto border-t border-white/5">
            <div class="max-w-6xl mx-auto text-xs text-gray-400">
                All rights reserved. {{ env('APP_NAME') }} &copy; {{ date('Y') }}
            </div>
        </div>
    </footer>
</body>

</html>
