<?php
use function Laravel\Folio\name;
use App\Enums\ProductCategory;
name('products.bleached-russian-hair');
?>

@extends('layouts.base')

@section('header')
    <x-page-header :image="ProductCategory::BLEACHED_RUSSIAN_HAIR->value">
        <x-slot:title>Bleached <br> Russian hair</x-slot>
        <x-slot:caption>
            Today, Russian blonde hair extensions are very popular. Charm Hair company offers for wholesale a special
            product - Bleached Slavic bulk hair.
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section class="bg-charm-cream-100">
        <div class="max-w-xl lg:max-w-3xl xl:max-w-4xl mx-auto grid lg:grid-cols-2 gap-y-5 gap-x-10">
            <div class="font-[Lora] text-4xl md:text-5xl lg:text-7xl/19 font-medium md:font-normal lg:text-end list-caption">
                <span class="">Exceptional</span><br class="hidden lg:block">
                <span class="font-semibold">Hair</span><br class="hidden md:block">
                Quality,<br class="hidden"> <span class="italic">Expertly</span> Processed
            </div>
            <x-list variant="dark">
                <x-list.item index="01" class="text-xl! md:text-2xl! font-medium!">
                    Base: Virgin Russian hair, which has been bleached
                </x-list.item>
                <x-list.item index="02" class="text-xl! md:text-2xl! font-medium!">
                    Result: Vanilla blonde, Platinum blonde
                </x-list.item>
                <x-list.item index="03" class="text-xl! md:text-2xl! font-medium!">
                    Soft, thin, silky texture
                </x-list.item>
                <x-list.item index="04" class="text-xl! md:text-2xl! font-medium!" brown>
                    Intact healthy cuticles
                </x-list.item>
                <x-list.item index="05" class="text-xl! md:text-2xl! font-medium!">
                    When processing, we do not use silicone or other harmful substances
                </x-list.item>
            </x-list>
        </div>
    </x-section>

    <x-section.marquee :text="ProductCategory::BLEACHED_RUSSIAN_HAIR->getLabel()" bg="from-charm-cream-100 to-charm-cream-200" />

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl lg:max-w-2xl mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Why</x-slot>
                Natural Russian<br>Blonde Is
                <x-slot:last><x-marker color="black">Rare</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center text-balance">
                As it is known, the most popular shades of braids are blond and very light brown. Many customers want to
                purchase Russian natural blonde. However, this type of raw material is quite rare and scarce in the market.
                Collecting it in the right quantities is more and more difficult, which affects its price. Many consumers,
                for this reason, prefer bleached Uzbek or Asian bulks.
            </x-section.content>
        </div>
    </x-section>

    <x-section class="bg-charm-dark-400">
        <div class="max-w-2xl mx-auto flex flex-col items-center space-y-5">
            <div
                class="font-[Lora] text-2xl md:text-2xl lg:text-3xl md:font-light text-center text-charm-cream-100 text-balance">
                Unlike most companies in {{ env('APP_NAME') }} prefer only <b>Russian hair</b>. Therefore, we offer a
                profitable solution - the acquisition of lightened <b>Slavic strands</b>. They perfectly retain a thin
                healthy structure, and also remain soft, shiny and silky.
            </div>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-100">
        <div class="max-w-xl lg:max-w-2xl mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Technology</x-slot>
                That<br>Protects Hair
                <x-slot:last><x-marker color="black">Beauty</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center text-balance">
                Thanks to modern staining technology, you get strands with intact cuticles that will last you a long time.
                When processing materials, we rule out the use of silicone and other harmful substances. Our hair itself
                looks great and doesn’t require special care. Our own customized production allows us to control quality of
                products at all stages of production.
            </x-section.content>
        </div>
    </x-section>

    <x-section.categories />

    <section class="bg-charm-cream-200 px-8 py-20 lg:px-0 md:py-30">
        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-10">
            <x-section.title
                class="text-4xl! md:text-5xl! lg:text-7xl/16! font-medium md:font-thin! md:text-end list-caption">
                <span class="italic">It can</span> be <br> as <span class="font-semibold">bleached</span> <br>
                <span class="italic">strands</span>
            </x-section.title>
            <x-list variant="dark">
                <x-list.item index="01" class="text-2xl! lg:text-5xl! font-medium! lg:font-thin!">
                    without a shade
                </x-list.item>
                <x-list.item index="02" class="text-2xl! lg:text-5xl! font-medium! lg:font-thin!" brown>
                    platinum blonde
                </x-list.item>
                <x-list.item index="03" class="text-2xl! lg:text-5xl! font-medium! lg:font-thin!">
                    vanilla blonde
                </x-list.item>
            </x-list>
            <div class="col-span-full mx-auto font-[Poppins] text-charm-dark-300 leading-5 font-medium text-center hint">
                Whatever option you choose, <br>it will be quality and healthy.
            </div>
        </div>
    </section>

    <x-section class="bg-charm-cream-100 overflow-hidden section-6">
        <div class="max-w-3xl mx-auto grid md:grid-cols-3 gap-5 relative md:static">
            <div class="md:col-span-2 space-y-5">
                <x-section.title>
                    <x-slot:first>Where</x-slot>
                    Exclusivity <br> Meets
                    <x-slot:last><x-marker color="black">Expertise</x-marker></x-slot>
                </x-section.title>
                <x-section.content>
                    If you decide to purchase a truly exclusive product, then contacting us is the best solution. Great
                    experience of our employees, efficiency in work, own workshops and equipment, unique technology and
                    professional materials - all these advantages you will feel in cooperation with us.
                </x-section.content>
            </div>
            <div class="md:relative">
                <img src="{{ Vite::asset('resources/images/icons/badge-for-female-hair-salon.svg') }}"
                    class="absolute top-0 left-1/2 -translate-x-1/2 size-[95%] md:size-60 opacity-5 md:opacity-100 drop-shadow-lg z-0 section-image-right"
                    alt="">
            </div>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-3xl mx-auto grid md:grid-cols-3 gap-5 relative md:static">
            <div class="md:relative">
                <img src="{{ Vite::asset('resources/images/icons/salon-circular-badge.svg') }}"
                    class="absolute top-0 left-1/2 -translate-x-1/2 size-[90%] md:size-60 opacity-5 md:opacity-100 drop-shadow-lg z-0 section-image-left"
                    alt="">
            </div>
            <div class="md:col-span-2 space-y-5">
                <x-section.title>
                    <x-slot:first>Your</x-slot>
                    Reliable <br>Long-Term
                    <x-slot:last><x-marker color="black">Partner</x-marker></x-slot>
                </x-section.title>
                <x-section.content>
                    Our company works both with retail orders and wholesale buyers. For regular customers, we always provide
                    discounts and special conditions. Hope that our company will become your reliable partner for a long
                    time, and you will appreciate the advantage of working with professionals in this field!
                </x-section.content>
            </div>
        </div>
    </x-section>
@endsection

@vite('resources/js/pages/bleached-russian-hair.js')
