<?php
use function Laravel\Folio\{name, render};
use App\Models\Page;
name('products.training');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', 'training')->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->meta_title" :description="$page->meta_description" :keywords="$page->meta_keywords">
    <x-slot:header>
        <x-page-header image="training">
            <x-slot:title>Professional Training for Hair Extension Specialists</x-slot>
            <x-slot:caption>
                Learn how to work with premium Slavic hair and create high-quality hair extension products your clients
                will love and trust.
            </x-slot>
            <a href="{{ route('contact') }}"
                class="bg-charm-cream-100 text-charm-dark-800 font-[Oswald] text-lg px-3 py-2.5 mt-5 mx-auto flex justify-center items-center w-fit">
                Contact Us
                <x-lucide-move-right class="size-5 inline-flex shrink-0 ms-1.5" />
            </a>
        </x-page-header>
    </x-slot:header>

    <section class="grid xl:grid-cols-2">
        <div class="bg-charm-cream-100 text-charm-dark-300 px-10 py-20 lg:px-0 flex justify-center items-center">
            <x-list variant="dark" class="max-w-lg">
                <x-slot:caption>What You Will Learn</x-slot>
                <x-list.item>
                    How to select high-quality Slavic hair
                </x-list.item>
                <x-list.item>
                    How to work with tape hair and other extensions
                </x-list.item>
                <x-list.item>
                    How to create clean and professional products
                </x-list.item>
                <x-list.item>
                    How to maintain hair quality for long-term results
                </x-list.item>
                <x-list.item>
                    How to avoid common mistakes in hair extension work
                </x-list.item>
            </x-list>
        </div>
        <div class="bg-charm-dark-400 text-charm-cream-100 px-10 py-20 lg:px-0 flex justify-center items-center">
            <x-list variant="light" class="max-w-lg">
                <x-slot:caption>Who This Training Is For</x-slot>
                <x-list.item>Hair stylists</x-list.item>
                <x-list.item>Salon owners</x-list.item>
                <x-list.item>Beginners in hair extensions</x-list.item>
                <x-list.item>Professionals who want to improve their skills</x-list.item>
            </x-list>
        </div>
    </section>

    <x-section class="bg-charm-cream-200 section">
        <div class="max-w-lg lg:max-w-xl mx-auto space-y-5">
            <x-section.title class="text-center">
                Training <x-slot:last><x-marker color="black">Format</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="text-center uppercase text-lg text-balance">
                <p>The training includes video lessons, step-by-step instructions, and professional guidance.</p>

                <p>We provide full support and answer all your questions throughout the entire training process.</p>
            </x-section.content>
        </div>
    </x-section>

    <x-section.marquee text="Training" bg="from-charm-cream-200 to-charm-cream-100" />

    <x-section class="bg-charm-cream-100 section">
        <div class="max-w-lg lg:max-w-xl mx-auto space-y-5">
            <x-section.title class="text-center">
                <x-slot:first>Why</x-slot:first> Choose<br>Slavena
                <x-slot:last><x-marker color="black">Hair</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="text-center uppercase text-lg text-balance">
                <p>We work directly with raw Slavic hair and understand every step of the process.</p>

                <p>Our experience allows us to teach real, practical skills that you can immediately use in your
                    business.</p>
            </x-section.content>
        </div>
    </x-section>

    <x-section.categories />

    <x-section class="bg-charm-cream-100 section">
        <div class="max-w-lg lg:max-w-xl mx-auto space-y-5">
            <x-section.title class="text-center">
                <x-slot:first>Start</x-slot:first> Your Journey<br>with Premium
                <x-slot:last><x-marker color="black">Slavic Hair</x-marker></x-slot:last>
            </x-section.title>
            <x-section.content class="text-center uppercase text-lg text-balance">
                <p>Contact us to learn more about the training program and start working with premium Slavic hair.</p>
            </x-section.content>
            <a href="{{ route('contact') }}"
                class="bg-charm-dark-800 text-charm-cream-100 font-[Oswald] text-lg px-3 py-2.5 mt-5 mx-auto flex justify-center items-center w-fit">
                Contact Us
                <x-lucide-move-right class="size-5 inline-flex shrink-0 ms-1.5" />
            </a>
        </div>
    </x-section>
</x-layouts.base>

@vite('resources/js/pages/training.js')
