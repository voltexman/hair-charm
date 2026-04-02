<?php
use function Laravel\Folio\{name, render};
use App\Enums\ProductCategory;
use App\Models\Page;
name('products.training');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', ProductCategory::TRAINING)->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->meta_title" :description="$page->meta_description" :keywords="$page->meta_keywords">
    <x-slot:header>
        <x-page-header :image="ProductCategory::TRAINING->value">
            <x-slot:title>{{ env('APP_NAME') }} Training</x-slot>
            <x-slot:caption>
                If your business is hair extension, if you use tape hair, if you have to order ready-made product and if
                you are not completely satisfied with its quality, then this video is for you.
            </x-slot>
        </x-page-header>
    </x-slot:header>

    <x-section.header class="bg-charm-cream-100">
        <div class="max-w-3xl mx-auto">
            <div class="font-[Lora] text-2xl font-medium text-balance">
                <p>Our company offers not only a <span class="font-bold">wide range of hair products</span>,
                    but also <span class="font-bold text-charm-brown-600">professional hair extension courses</span>.</p>
                <p><span class="italic">Contact us, and we will reveal all the secrets to improve your business.</span>
                </p>
            </div>
        </div>
    </x-section.header>

    <x-section class="bg-charm-cream-200 section-2">
        <div class="max-w-3xl mx-auto grid md:grid-cols-3 relative md:static">
            <div class="md:col-span-2 space-y-5">
                <x-section.title>
                    Increase Your <x-slot:last><x-marker color="black">Income</x-marker></x-slot>
                </x-section.title>
                <div class="font-[Oswald] text-xl md:text-3xl/8 md:font-light tracking-wide box-static-text-left">
                    The advantage of the training is that you will be able to make products from any strands by
                    yourself, depending on your client needs. Your income will undoubtedly increase after completing
                    this training.
                </div>
            </div>
            <div class="md:relative">
                <img src="{{ Vite::asset('resources/images/icons/badge-with-scissors.svg') }}"
                    class="absolute top-0 left-1/2 -translate-x-1/2 size-[95%] md:size-full opacity-5 md:opacity-100 drop-shadow-lg z-0 section-image image-rotate-left"
                    alt="">
            </div>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-100">
        <div class="max-w-3xl mx-auto space-y-5 relative">
            <img src="{{ Vite::asset('resources/images/icons/video-play.svg') }}"
                class="absolute left-0 top-1/2 -translate-y-1/2 opacity-7 size-90 rotate-12 z-0 image-rotate"
                alt="">
            <x-section.title class="md:text-end">
                Complete Training <x-slot:last><x-marker color="black">Program</x-marker></x-slot>
            </x-section.title>
            <div
                class="max-w-xl font-[Oswald] text-xl md:text-3xl/8 md:font-light md:text-end ms-auto tracking-wide box-static-text-right">
                The training course includes video tutorials, as well as a detailed description of the entire process.
                We will answer all your questions that appear during training.
            </div>
        </div>
    </x-section>

    <x-section.categories />

    <x-section class="bg-charm-cream-200 section-4">
        <div class="max-w-3xl mx-auto grid md:grid-cols-2 gap-x-5 relative">
            <img src="{{ Vite::asset('resources/images/scissors-cutting-hair-lines.svg') }}"
                class="size-[85%] md:size-65 mx-auto md:ms-auto drop-shadow-lg section-image image-rotate-right"
                alt="">
            <div
                class="max-w-sm font-[Boldonse] text-xl lg:text-2xl md:leading-10 self-center me-auto tracking-wide uppercase text-center md:text-start box-dynamic-text-right">
                Tape hair production is the manufacture of strands that are used for extensions.
            </div>
        </div>
    </x-section>

    <section class="grid xl:grid-cols-2">
        <div class="bg-charm-cream-100 text-charm-dark-300 px-10 py-20 lg:px-0 flex justify-center items-center">
            <x-list variant="dark" class="max-w-lg">
                <x-slot:caption>For work you will need:</x-slot>
                <x-list.item>
                    cut glass
                </x-list.item>
                <x-list.item>
                    reinforcement
                </x-list.item>
                <x-list.item>
                    adhesive for the manufacture of tapes
                </x-list.item>
                <x-list.item>
                    drying cabinet (if necessary, to speed up the process). You can make it yourself.
                </x-list.item>
                <x-list.item>
                    polymer adhesive tape
                </x-list.item>
                <x-list.item>
                    equipment for cutting finished tapes. It is used to create a neat regular shape, but you can do with
                    ordinary scissors as well.
                </x-list.item>
            </x-list>
        </div>
        <div class="bg-charm-dark-400 text-charm-cream-100 px-10 py-20 lg:px-0 flex justify-center items-center">
            <x-list variant="light" class="max-w-lg">
                <x-slot:caption>The process consists of the following steps:</x-slot>
                <x-list.item>hair placement</x-list.item>
                <x-list.item>gluing in several stages</x-list.item>
                <x-list.item>drying</x-list.item>
                <x-list.item>machine processing</x-list.item>
                <x-list.item>applying polymer tape.</x-list.item>
            </x-list>
        </div>
    </section>

    <x-section class="bg-charm-cream-200 section">
        <div class="max-w-lg lg:max-w-xl mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Where </x-slot>
                Quality <br> Meets
                <x-slot:last><x-marker color="black">Expertise</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center">
                The quality of our products is at a high level. We have all the necessary skills in working with hair.
                If you study with us, you will get a thin, elastic, flexible and long lasting tape for extension.
            </x-section.content>
        </div>
    </x-section>

    <x-section.marquee :text="ProductCategory::TRAINING->getLabel()" bg="from-charm-cream-200 to-charm-cream-100" />

    <x-section class="bg-charm-cream-100 overflow-hidden section-7">
        <div class="max-w-2xl lg:max-w-3xl mx-auto grid md:grid-cols-2 relative md:static">
            <div class="md:relative">
                <img src="{{ Vite::asset('resources/images/icons/badge-for-female-hair-salon.svg') }}"
                    class="absolute top-1/2 left-1/2 -translate-1/2 opacity-5 md:opacity-100 w-full md:size-80 z-0 section-image image-rotate-right"
                    alt="">
            </div>
            <div
                class="text-3xl md:text-4xl lg:text-5xl font-[Oswald] self-center md:font-light uppercase text-center md:text-end box-dynamic-text-right split-text">
                You can purchase everything that is necessary for work from us. We ship worldwide.
            </div>
        </div>
    </x-section>

    <section class="grid md:grid-cols-2">
        <div class="bg-charm-cream-200 px-8 py-20 md:py-30">
            <div class="max-w-lg ms-auto flex self-center">
                <div
                    class="font-[Oswald] text-2xl md:text-3xl text-charm-dark-300 text-center md:text-end tracking-wide">
                    Nowadays only a <span class="font-semibold">limited number</span> of factories, located in
                    <span class="font-semibold">Russia and Ukraine</span>, are engaged in this process.
                    <span class="font-semibold">{{ env('APP_NAME') }}</span> is one of the best in this field.
                </div>
            </div>
        </div>
        <div class="bg-charm-cream-300 px-8 py-20">
            <div class="max-w-xl mx-auto grid gap-5 md:gap-10">
                <img src="{{ Vite::asset('resources/images/50-percent-off.svg') }}"
                    class="size-35 mx-auto drop-shadow-lg section-image discount" alt="">
                <div
                    class="max-w-sm mx-auto text-xl md:text-2xl lg:text-2xl font-[Oswald] uppercase text-charm-brown-600 text-center font-black">
                    For the <span class="text-charm-brown-800 drop-shadow-lg">first three</span> clients we offer
                    <span class="text-charm-brown-800 drop-shadow-lg">50 percent</span> discount. So hurry up not to
                    lose your chance!
                </div>
            </div>
        </div>
    </section>
</x-layouts.base>

@vite('resources/js/pages/training.js')
