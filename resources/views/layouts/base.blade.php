<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('meta')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Boldonse&family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body x-data="{ showProductsButton: false, loading: true }" @load.window="loading = false">
    @hasSection('header')
        <header x-intersect="showProductsButton = false" x-intersect:enter="showProductsButton = false"
            x-intersect:leave="showProductsButton = true" x-cloak>
            @yield('header')
        </header>
    @endif

    <main class="flex flex-col lg:flex-row">
        <div
            class="bg-charm-dark-700/85 backdrop-blur-xs shadow-lg shadow-charm-dark-500/15 sticky top-0 h-16 lg:h-full w-full lg:w-16 flex-none z-80 transition-[colors, shadow] duration-300 lg:bg-charm-dark-400/95">
            <div class="flex flex-row lg:flex-col justify-between items-center px-5 lg:px-0 h-full lg:h-screen lg:py-5">
                <div class="flex flex-row lg:flex-col items-center">
                    <a href="{{ route('main') }}">
                        <img src="{{ Vite::asset('resources/images/icons/logo-light.svg') }}"
                            class="size-8 drop-shadow-lg transition-all duration-300" alt="">
                    </a>
                </div>

                <div class="ms-2.5 me-auto lg:mx-auto">
                    <a href="{{ route('main') }}"
                        class="text-charm-cream-200 font-[Alex_Brush] mt-1.5 text-3xl lg:text-4xl drop-shadow-lg font-semibold tracking-wide lg:text-charm-cream-200 lg:[writing-mode:vertical-lr] block transition-colors duration-300">
                        {{ env('APP_NAME') }}
                    </a>
                </div>

                <x-menu.main>
                    <x-menu.main.item icon="home" link="main">Home Page</x-menu.main.item>
                    <x-menu.main.item icon="badge-info" link="about-us">About Us</x-menu.main.item>
                    <x-menu.main.item icon="newspaper" link="posts">Blog</x-menu.main.item>
                    <x-menu.main.item icon="image" link="gallery">Photos</x-menu.main.item>
                    <x-menu.main.item icon="user-circle" link="contact">Contacts</x-menu.main.item>
                </x-menu.main>
            </div>
        </div>
        <div class="grow overflow-hidden">
            @yield('content')
        </div>
    </main>

    <div x-show="loading" x-transition.opacity.duration.1100ms
        class="fixed inset-0 bg-charm-dark-500 z-100 flex justify-center items-center" x-cloak>
        <x-lucide-loader-2 class="absolute left-1/2 top-1/2 -translate-1/2 size-50 text-white animate-spin duration-650"
            stroke-width="0.5" />
        <img src="{{ Vite::asset('resources/images/icons/logo-light.svg') }}"
            class="absolute left-1/2 top-1/2 -translate-1/2 size-22 drop-shadow-lg" alt="">
    </div>

    @if (request()->route()->getName() !== 'main')
        <x-drawer variant="slide">
            <x-slot:open>
                <div x-show="showProductsButton" x-transition.opacity.duration.500ms x-cloak
                    class="fixed bottom-3 right-3 size-22 z-50 cursor-pointer">
                    <svg viewBox="0 0 200 200"
                        class="animate-spin duration-30000 size-full border rounded-full border-charm-brown-600 backdrop-blur-sm bg-charm-cream-600/60">
                        <defs>
                            <path id="circlePath" d="M 100, 100 m -75, 0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0">
                            </path>
                        </defs>
                        <text
                            class="fill-current font-[Oswald] text-2xl tracking-wider text-charm-dark-500 font-black uppercase invert-10">
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
            </x-slot>
            <x-slot:header>
                <div class="font-[Boldonse] text-2xl/10 uppercase text-charm-cream-200 flex items-center">
                    Our<br>Products
                </div>
                <div class="h-25 ms-5 md:h-auto w-18">
                    <img src="{{ Vite::asset('resources/images/icons/female-long-hair-with-ponytails-light.svg') }}"
                        class="size-full object-cover" alt="">
                </div>
            </x-slot>
            <x-product-section.list variant="sidebar">
                @foreach (\App\Enums\ProductCategory::cases() as $category)
                    <x-product-section.item class="z-{{ $loop->count - $loop->index }}" :index="$loop->index"
                        :category="$category" />
                @endforeach
            </x-product-section.list>
        </x-drawer>
    @endif

    <footer x-intersect.margin.-100px="showProductsButton = false"
        x-intersect:enter.margin.-100px="showProductsButton = false"
        x-intersect:leave.margin.-100px="showProductsButton = true"
        class="bg-cover bg-right md:bg-center flex flex-col justify-between relative overflow-hidden shrink-0"
        style="background-image: url('{{ Vite::asset('resources/images/bg-footer.png') }}')">
        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/50 to-black/20"></div>
        <div class="grid md:grid-cols-3 max-w-5xl px-8 w-full mx-auto my-10 md:my-30 relative z-10">
            <div class="flex justify-center md:justify-start">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" class="size-45 md:size-35" alt="">
            </div>
            <div class="flex flex-col font-[Poppins] text-sm text-center md:text-left gap-y-1.5 text-white">
                <div class="text-3xl font-[Lora]">{{ env('APP_NAME') }}</div>
                <div class="text-sm">Premium Slavic Hair from Ukraine</div>
            </div>

            <x-menu.footer class="hidden lg:flex flex-col mx-auto justify-center items-center">
                <x-menu.footer.item link="gallery">Photos</x-menu.footer.item>
                <x-menu.footer.item link="posts">Blog</x-menu.footer.item>
            </x-menu.footer>

            <div class="bg-linear-to-r from-transparent via-white/50 to-transparent h-px w-full my-5 px-10"></div>

            <div class="flex flex-col items-center md:items-end">
                <div class="flex gap-x-2.5">
                    <img src="{{ Vite::asset('resources/images/icons/social/facebook-light.svg') }}"
                        class="size-10 lg:size-12" alt="">
                    <img src="{{ Vite::asset('resources/images/icons/social/whatsapp-light.svg') }}"
                        class="size-10 lg:size-12" alt="">
                    <img src="{{ Vite::asset('resources/images/icons/social/instagram-light.svg') }}"
                        class="size-10 lg:size-12" alt="">
                </div>

                <div class="mt-5 text-center text-xs text-charm-cream-100">
                    Contact us on WhatsApp for fast response
                </div>
                <div class="text-center font-semibold text-xs text-charm-cream-100">
                    Ukraine
                </div>
            </div>
        </div>
        <div class="h-12 w-full flex items-center mt-auto border-t border-white/5 relative z-10">
            <div class="max-w-6xl mx-auto text-xs text-charm-cream-200/50">
                {{ env('APP_NAME') }} &copy; {{ date('Y') }} All rights reserved.
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>

</html>
