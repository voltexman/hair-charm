<?php
use function Laravel\Folio\{name, render};
use App\Enums\ProductCategory;
use App\Models\Page;
name('products.gray-slavic-hair-wholesale');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', ProductCategory::GRAY_SLAVIC_HAIR_WHOLESALE)->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->meta_title" :description="$page->meta_description" :keywords="$page->meta_keywords">
    <x-slot:header>
        <x-page-header :image="ProductCategory::GRAY_SLAVIC_HAIR_WHOLESALE->value">
            <x-slot:title>Gray Slavic <br> hair wholesale</x-slot>
            <x-slot:caption>Special product for sale<br>GRAY SLAVIC HAIR.</x-slot>
        </x-page-header>
    </x-slot:header>

    <x-section class="bg-charm-cream-100 relative overflow-hidden section-1">
        <div class="md:max-w-lg mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Natural</x-slot>
                Slavic<br>Gray Hair
                <x-slot:last><x-marker color="black">Supply</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center">
                The company <x-marker variant="font">{{ env('APP_NAME') }}</x-marker> is a supplier of Slavic gray hair,
                which is cut off by our employees in territory of <span class="font-semibold">Ukraine</span> and
                <span class="font-semibold">Russia</span>. Donors are elderly people of Slavic appearance.
            </x-section.content>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-200 section-2">
        <div class="md:max-w-lg mx-auto flex flex-col items-center space-y-5">
            <img src="{{ Vite::asset('resources/images/icons/logo-dark.svg') }}" class="size-30" alt="">
            <div class="font-[Lora] text-xl md:text-2xl font-medium text-center box-content">
                This type of hair has a fine structure, soft and silky to touch. Gray hair is purchased by enterprises
                in large volumes for industrial clarification <i>(bleaching)</i>.
            </div>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-100 overflow-hidden section-3">
        <div class="max-w-2xl mx-auto space-y-5">
            <div class="font-[Oswald] text-xl md:text-4xl lg:text-4xl/10 md:font-light uppercase text-balance box-text">
                Due to its light shade, it <span class="font-bold">quickly</span> and easily acquires a snow-white
                color, while not losing quality. Then used for <span class="font-bold">hair extension</span> in beauty
                salons.
            </div>
        </div>
    </x-section>

    <x-section.categories />

    <x-section class="bg-charm-cream-200 overflow-hidden section-4">
        <div class="max-w-2xl lg:max-w-3xl mx-auto grid md:grid-cols-2 justify-items-center gap-5">
            <img src="{{ Vite::asset('resources/images/icons/female-long-dark-hair-wig.svg') }}"
                class="size-60 md:size-100 drop-shadow-xl box-image" alt="">
            <div
                class="font-[Oswald] text-2xl md:text-5xl lg:text-6xl md:font-light uppercase text-center md:text-end text-balance box-text">
                <span class="font-bold">Gray hair</span> is also used in the manufacture of wigs for
                <span class="font-bold">older</span> people.
            </div>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-100 overflow-hidden">
        <div class="max-w-2xl mx-auto space-y-5">
            <div
                class="font-[Oswald] text-xl md:text-4xl lg:text-4xl lg:font-light text-end uppercase text-balance ms-auto section-5-text">
                <span class="font-bold">Minimum</span> wholesale order of such type of hair is
                <span class="font-bold">3 kg</span>, which includes length
                <span class="font-bold">from 45 to 70 cm</span>.
            </div>
        </div>
    </x-section>
</x-layouts.base>

@vite('resources/js/pages/gray-russian-hair-wholesale.js')
