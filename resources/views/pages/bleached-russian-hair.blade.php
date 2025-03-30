<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\ProductCategory;

name('products.bleached-russian-hair');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/Bleached-Russian-hair.jpg">
        <x-slot:title>
            Bleached Russian hair
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="bg-charm-cream-200 py-20 lg:py-30 flex justify-center">
        <div class="max-w-xl mx-auto px-5 lg:px-0 relative">
            <span
                class="font-[Alex_Brush] text-charm-dark text-4xl xl:text-5xl absolute -top-0 left-1/2 -translate-1/2 opacity-5 drop-shadow-lg font-bold">
                {{ env('APP_NAME') }}
            </span>
            <h2 class="text-xl xl:text-3xl text-charm-dark-500 drop-shadow-lg leading-8 xl:leading-10 text-center uppercase">
                Today, Russian blonde hair extensions are very popular. Charm Hair company offers for wholesale a special
                product - Bleached Slavic bulk hair.
            </h2>
        </div>
    </section>

    <section class="grid sm:grid-cols-4 xl:grid-cols-3">
        <div class="sm:col-span-2 xl:col-span-1 bg-charm-cream-100 px-10 py-20 2xl:px-30 flex items-center">
            <x-list>
                <x-list.item>
                    Base: Virgin Russian hair, which has been bleached
                </x-list.item>
                <x-list.item>
                    Result: Vanilla blonde, Platinum blonde
                </x-list.item>
                <x-list.item>
                    Soft, thin, silky texture
                </x-list.item>
                <x-list.item>
                    Intact healthy cuticles
                </x-list.item>
                <x-list.item>
                    When processing, we do not use silicone or other harmful substances
                </x-list.item>
            </x-list>
        </div>
        <div class="sm:col-span-2 xl:col-span-1 bg-charm-cream-300 px-10 py-20 2xl:px-30 flex items-center">
            <span class="font-[Lora] text-lg lg:text-xl font-medium">
                As it is known, the most popular shades of braids are blond and very light brown. Many customers want to
                purchase Russian natural blonde. However, this type of raw material is quite rare and scarce in the market.
                Collecting it in the right quantities is more and more difficult, which affects its price. Many consumers,
                for this reason, prefer bleached Uzbek or Asian bulks.
            </span>
        </div>
        <div class="sm:col-span-2 xl:hidden bg-charm-cream-200 flex flex-col px-10 py-20 justify-center items-center">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="size-50 drop-shadow-lg" alt="">
            <span class="font-[Alex_Brush] text-7xl drop-shadow-lg font-black">charm hair</span>
            <span class="text-xl font-[Oswald] tracking-wider text-charm-brown-600 drop-shadow-lg -mt-2 uppercase">
                stylish hair company
            </span>
        </div>
        <div class="sm:col-span-2 xl:col-span-1 bg-charm-cream-100 px-10 py-20 lg:p-20 flex items-center">
            <span class="font-[Oswald] text-xl sm:text-2xl tracking-wide">
                Unlike most companies in {{ env('APP_NAME') }} prefer only Russian hair. Therefore, we offer a profitable
                solution - the acquisition of lightened Slavic strands. They perfectly retain a thin healthy structure, and
                also remain soft, shiny and silky.
            </span>
        </div>
    </section>

    <x-section.products />

    <section class="grid sm:grid-cols-6">
        <div class="sm:col-span-3 bg-charm-cream-100 px-10 py-20 xl:p-20 2xl:px-40 flex items-center">
            <span class="font-[lora] text-lg xl:text-xl font-medium">
                Thanks to modern staining technology, you get strands with intact cuticles that will last you a long time.
                When processing materials, we rule out the use of silicone and other harmful substances. Our hair itself
                looks great and doesn’t require special care. Our own customized production allows us to control quality of
                products at all stages of production.
            </span>
        </div>
        <div class="sm:col-span-3 bg-charm-cream-200 px-10 py-20 lg:p-20 2xl:px-30 flex flex-col justify-center gap-y-5">
            <x-list>
                <x-slot:caption>
                    It can be as bleached strands
                </x-slot>
                <x-list.item>
                    without a shade
                </x-list.item>
                <x-list.item>
                    platinum blonde
                </x-list.item>
                <x-list.item>
                    vanilla blonde
                </x-list.item>
            </x-list>

            <span class="w-1/2 h-0.5 bg-charm-dark-500 block"></span>
            <span class="block font-[Lora] text-sm uppercase tracking-wide font-bold text-charm-brown-700 drop-shadow-lg">
                Whatever option you choose, it will be quality and healthy.
            </span>
        </div>
        <div
            class="hidden sm:col-span-3 xl:col-span-2 bg-charm-cream-100 xl:bg-charm-cream-200 xl:flex flex-col px-10 py-20 justify-center items-center">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="size-50 drop-shadow-lg" alt="">
            <span class="font-[Alex_Brush] text-7xl drop-shadow-lg font-black">charm hair</span>
            <span class="text-xl font-[Oswald] tracking-wider text-charm-brown-600 drop-shadow-lg -mt-2 uppercase">
                stylish hair company
            </span>
        </div>
        <div
            class="sm:col-span-3 xl:col-span-2 bg-charm-cream-100 xl:bg-charm-cream-300 sm:bg-charm-cream-200 px-10 py-20 2xl:px-30 flex items-center">
            <span class="font-[lora] text-lg 2xl:text-xl font-medium">
                If you decide to purchase a truly exclusive product, then contacting us is the best solution. Great
                experience of our employees, efficiency in work, own workshops and equipment, unique technology and
                professional materials - all these advantages you will feel in cooperation with us.
            </span>
        </div>
        <div
            class="sm:col-span-3 xl:col-span-2 bg-charm-cream-300 xl:bg-charm-cream-100 px-10 py-20 2xl:px-30 flex items-center">
            <span class="font-[lora] text-lg 2xl:text-xl font-medium">
                Our company works both with retail orders and wholesale buyers. For regular customers, we always provide
                discounts and special conditions. Hope that our company will become your reliable partner for a long time,
                and you will appreciate the advantage of working with professionals in this field!
            </span>
        </div>
    </section>
@endsection
