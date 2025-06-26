<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\ProductCategory;

$products = Product::where(['category' => ProductCategory::WEFTS])->get();

name('products.wefts');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/wefts.jpg">
        <x-slot:title>
            Wefts
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section.header>
        One of the most popular methods is Russian hand tied wefts hair extensions.
    </x-section.header>

    <section class="grid md:grid-cols-6">
        <div
            class="md:col-span-3 xl:col-span-2 bg-charm-cream-100 px-10 py-10 xl:px-20 2xl:px-30 md:py-20 flex flex-col justify-center items-center relative gap-5">
            <img src="{{ Vite::asset('resources/images/icons/hair-style-salon-circular-badge.svg') }}"
                class="size-40 drop-shadow-lg -z-0" alt="">
            <div
                class="font-[Boldonse] text-charm-dark-300 text-center text-sm tracking-wide leading-7 uppercase z-10 max-w-sm">
                Our company has a great experience in manufacturing similar products, which are deservedly respected by all
                our regular customers.
            </div>
        </div>

        <div
            class="md:order-3 md:col-span-full xl:col-span-4 bg-charm-cream-200 xl:bg-charm-cream-300 px-5 py-20 md:px-10 lg:p-20 2xl:px-40 2xl:py-20 flex justify-center items-center">
            <div class="font-[Lora] text-lg md:text-xl 2xl:text-2xl font-semibold text-charm-dark-600 italic">
                Please note our products favourably differ from other competitors in that we use natural virgin Slavic hair
                purchased directly from donors in <b>Ukraine</b> and <b>Russian</b>. In addition, all haircuts that are used
                in <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker> company for production are with dense tips.
                Such bulks are considered to be the most qualitative and healthy. We do not issue non-standard goods as
                elite (for example, giving out Asian hair for a true Slavic hair), so the quality of the wefts from
                <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker> will be the reference quality and will please you
                for a long time. After all, Slavic strands have wonderful appearance, an ideal structure and ease of care.
            </div>
        </div>

        <div
            class="md:order-2 xl:order-3 xl:col-span-2 md:col-span-3 bg-charm-cream-300 lg:bg-charm-cream-300 px-10 2xl:px-20 py-20 flex justify-center items-center">
            <x-list>
                <x-slot:caption>So, what do you get by contacting us?</x-slot>
                <x-list.item>
                    Product will look great, because they are produced only from natural Russian double-drawn bundles, which
                    have the greatest value
                </x-list.item>
                <x-list.item>
                    During manufacturing goods we don't use silicone and other components harmful to hair tresses
                </x-list.item>
                <x-list.item>
                    You can have: 11 inch wide and 14 to 28inch long, three types, depending on your preferences
                </x-list.item>
                <x-list.item>
                    Advantage is the hair does not shed
                </x-list.item>
            </x-list>
        </div>

        <div class="md:order-4 xl:order-4 md:col-span-full xl:col-span-4">
            <img src="https://www.hair-charm.com/images/HAIR/wefts/3.jpg" class="object-cover size-full" alt="">
        </div>
    </section>

    {{-- <x-section.marquee text="Wefts" /> --}}

    <section class="grid md:grid-cols-2 xl:grid-cols-3">
        <div class="md:col-span-1 md:order-1">
            <img src="https://www.hair-charm.com/images/HAIR/wefts/1.jpg" class="object-cover size-full" alt="">
        </div>
        <div class="md:col-span-1 md:order-2 bg-charm-cream-100 px-10 py-20 lg:p-20 flex justify-center items-center">
            <span class="font-[Oswald] font-bold uppercase text-charm-dark-300 text-2xl">
                Hand tied wefts are used for production of wigs and a variety of extension methods. They can be divided into
                three types: thick, standart, micro.
            </span>
        </div>
        <div class="md:order-4 xl:order-3">
            <img src="https://www.hair-charm.com/images/HAIR/wefts/5.jpg" class="" alt="">
        </div>
        <div class="md:order-3 bg-charm-cream-200 flex-col px-10 py-10 justify-center items-center">
            <x-section.company />
        </div>
        <div class="md:order-5">
            <img src="https://www.hair-charm.com/images/HAIR/wefts/2.jpg" class="" alt="">
        </div>
        <div class="md:order-6 bg-charm-brown-600 flex justify-center items-center px-10 py-20 lg:p-20">
            <span class="font-[Oswald] tracking-wider text-charm-cream-200 text-2xl">
                <span class="uppercase block text-center font-black animate-pulse">Warning!</span>
                <span class="mt-5 block">
                    Unlike machine weft, hand tied cannot be cut because the hair is twisted to one whole thread.
                </span>
            </span>
        </div>
    </section>

    <section class="bg-charm-cream-100 px-10 py-20">
        <div class="max-w-6xl mx-auto flex flex-col">
            <div class="font-[Boldonse] text-2xl text-charm-dark-300">Thick wefts</div>
            <div class="max-w-xl font-[Lora] text-lg leading-6 text-charm-dark-200 mt-2.5">
                This type is characterized by an even greater density and thickness. It weights 50 grams. It is suitable,
                mainly, only for hair extensions. This product is ordered from us, mainly, by customers from the UK, where
                such product is extremely popular.
            </div>
        </div>

        <x-product class="mt-5">
            @foreach ($products as $product)
                <x-product.card :product="$product" />
            @endforeach
        </x-product>
    </section>

    <section class="bg-charm-cream-200 px-10 py-20">
        <div class="max-w-6xl mx-auto flex flex-col">
            <div class="font-[Boldonse] text-2xl text-charm-dark-300">Standard wefts</div>
            <div class="max-w-xl font-[Lora] text-lg leading-6 text-charm-dark-200 mt-2.5">
                The next type of wefts can be called a neutral variant with weight 25 grams. They have good density, but
                they will not be rough at the base. This is a universal product that can be used in production or in
                extensions.
            </div>
        </div>

        <x-product class="mt-5">
            @foreach ($products as $product)
                <x-product.card :product="$product" />
            @endforeach
        </x-product>
    </section>

    <section class="bg-charm-cream-100 px-10 py-20">
        <div class="max-w-6xl mx-auto flex flex-col">
            <div class="font-[Boldonse] text-2xl text-charm-dark-300">Micro wefts</div>
            <div class="max-w-xl font-[Lora] text-lg leading-6 text-charm-dark-200 mt-2.5">
                For the production of hairpieces and wigs, the most acceptable options are weight of 10 grams. They differ
                in their fineness and are ideal for the production of various products. Most of our partners from Israel
                make wholesale orders for just such type of goods.
            </div>
        </div>

        <x-product class="mt-5">
            @foreach ($products as $product)
                <x-product.card :product="$product" />
            @endforeach
        </x-product>
    </section>

    <x-section.products />

    <section class="grid md:grid-cols-6">
        <div
            class="col-span-full md:col-span-3 bg-charm-cream-100 px-10 py-20 xl:px-20 xl:py-40 2xl:px-40 flex justify-center items-center relative">
            <div class="absolute top-10 left-10 flex gap-x-2.5">
                <span class="rounded-full bg-charm-dark-500/80 block size-5"></span>
                <span class="rounded-full bg-charm-cream-600 block size-5"></span>
                <span class="rounded-full bg-charm-brown-600/60 block size-5"></span>
                <span class="rounded-full bg-charm-cream-600/60 block size-5"></span>
            </div>
            <div class="font-[Lora] leading-6 lg:leading-7 text-lg lg:text-xl font-medium">
                Our handtied wefts are expertly made by us are very practical and do not require special care. They can
                easily tolerate heat, and you can create any styling with a hairdryer and a curling iron. Another advantage
                of using a natural material in manufacture is the ease of coloring. As well as their own curls, wefts can be
                dyed.
            </div>
            <span
                class="font-[Alex_Brush] opacity-6 text-charm-brown-700 text-shadow-sm text-5xl absolute bottom-5 right-8 font-black">
                {{ env('APP_NAME') }}
            </span>
        </div>
        <div
            class="col-span-full md:col-span-3 bg-charm-dark-400 px-10 py-20 md:px-10 xl:py-40 xl:px-20 2xl:px-40 flex justify-center items-center">
            <div class="font-[Lora] text-xl font-medium text-charm-cream-300">
                We have been working in this field for a long time, therefore we have the necessary experience and knowledge
                necessary for producing hand-tied wefts. Our own workshop and high-class equipment allow us to cope with
                large volumes of orders. Also we offer the highest quality of final products.
            </div>
        </div>
    </section>

    <section class="grid md:grid-cols-6">
        <div
            class="col-span-full md:col-span-3 bg-charm-cream-100 md:bg-charm-cream-200 px-10 py-20 md:px-10 xl:py-40 xl:px-20 2xl:px-40 flex justify-center items-center">
            <div class="font-[Lora] font-medium leading-6 lg:leading-7 text-charm-dark-500 text-lg lg:text-xl">
                It does not matter which initial hair structure you have, we are able to choose exactly that variant that
                will organically complement your own hair and be natural at the same time. With us you will find products of
                any shade and length, therefore using hand-made wefts from the company
                <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker> your hairdo acquires a natural volume, will also
                look natural and attractive.
            </div>
        </div>
        <div
            class="col-span-full md:col-span-3 bg-charm-cream-300 px-10 py-20 md:px-10 xl:py-40 xl:px-20 2xl:px-40 flex justify-center items-center gap-10">
            <div class="font-[Lora] font-medium leading-6 lg:leading-7 text-lg lg:text-xl">
                As you can see, <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker> company's products meet the
                highest requirements and will please you for a long time. For additional advice and ordering of the goods,
                write to us on <span class="font-medium">Viber</span> or <span class="font-medium">WhatsApp</span> or you
                can contact with us by e-mail: <span class="font-medium">infohaircharm@gmail.com</span>. Contacting us in
                the showroom, you will not have any difficulties with the terms of order fulfillment and you can always
                count on the perfect quality of the goods purchased!
            </div>
        </div>
    </section>
@endsection
