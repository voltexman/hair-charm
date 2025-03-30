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
    <section class="bg-charm-cream-200 py-20 lg:py-30 flex justify-center">
        <div class="max-w-xl mx-auto px-5 lg:px-0 relative">
            <span
                class="font-[Alex_Brush] text-charm-dark text-4xl xl:text-5xl absolute -top-0 left-1/2 -translate-1/2 opacity-5 drop-shadow-lg font-bold">
                {{ env('APP_NAME') }}
            </span>
            <h2 class="text-xl xl:text-3xl text-charm-dark-500 drop-shadow-lg leading-8 xl:leading-10 text-center uppercase">
                One of the most popular methods is Russian hand tied wefts hair extensions.
            </h2>
        </div>
    </section>

    <section class="grid lg:grid-cols-3">
        <div class="bg-charm-cream-100 px-15 2xl:px-30 2xl:py-15 flex flex-col justify-center items-center relative gap-5">
            <img src="{{ Vite::asset('resources/images/icons/hair-style-salon-circular-badge.svg') }}"
                class="size-40 drop-shadow-lg -z-0" alt="">
            <span class="font-[Boldonse] text-charm-dark-300 text-center text-sm tracking-wide leading-7 uppercase z-10">
                Our company has a great experience in manufacturing similar products, which are deservedly respected by all
                our regular customers.
            </span>
        </div>
        <div class="lg:col-span-2 bg-charm-cream-300 p-20 2xl:px-40 2xl:py-20 flex justify-center items-center">
            <span class="lg:ps-10 lg:border-s-4 font-[Lora] text-xl font-medium text-charm-dark-600">
                Please note our products favourably differ from other competitors in that we use natural virgin Slavic hair
                purchased directly from donors in Ukraine and Russian. In addition, all haircuts that are used in
                <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker> company for production are with dense tips. Such
                bulks are considered to be the most qualitative and healthy. We do not issue non-standard goods as elite
                (for example, giving out Asian hair for a true Slavic hair), so the quality of the wefts from
                <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker> will be the reference quality and will please you
                for a long time. After all, Slavic strands have wonderful appearance, an ideal structure and ease of care.
            </span>
        </div>
    </section>

    <section class="grid lg:grid-cols-3">
        <div class="lg:col-span-1 bg-charm-cream-200 px-10 2xl:px-20 py-20 flex justify-center items-center">
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
        <div class="lg:col-span-2">
            <img src="https://www.hair-charm.com/images/HAIR/wefts/3.jpg" class="object-cover size-full" alt="">
        </div>
    </section>

    <x-section.separate.marquee text="Wefts" />

    <section class="grid lg:grid-cols-3">
        <div>
            <img src="https://www.hair-charm.com/images/HAIR/wefts/1.jpg" class="object-cover size-full" alt="">
        </div>
        <div class="bg-charm-cream-100 px-10 py-20 lg:p-20 flex justify-center items-center">
            <span class="font-[Oswald] font-bold uppercase text-charm-dark-300 text-2xl">
                Hand tied wefts are used for production of wigs and a variety of extension methods. They can be divided into
                three types: thick, standart, micro.
            </span>
        </div>
        <div>
            <img src="https://www.hair-charm.com/images/HAIR/wefts/5.jpg" class="" alt="">
        </div>
        <div class="bg-charm-cream-200 flex flex-col px-10 py-20 justify-center items-center">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="size-50 drop-shadow-lg" alt="">
            <span class="font-[Alex_Brush] text-7xl drop-shadow-lg font-black">charm hair</span>
            <span class="text-xl font-[Oswald] tracking-wider text-charm-brown-600 drop-shadow-lg -mt-2 uppercase">
                stylish hair company
            </span>
        </div>
        <div>
            <img src="https://www.hair-charm.com/images/HAIR/wefts/2.jpg" class="" alt="">
        </div>
        <div class="bg-charm-brown-600 flex justify-center items-center p-20">
            <span class="font-[Oswald] tracking-wider text-charm-cream-200 text-2xl">
                <span class="uppercase block text-center font-black animate-pulse">Warning!</span>
                <span class="mt-5 block">
                    Unlike machine weft, hand tied cannot be cut because the hair is twisted to one whole thread.
                </span>
            </span>
        </div>
    </section>

    <section class="bg-charm-cream-100 py-20">
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

    <section class="bg-charm-cream-200 py-20">
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

    <section class="bg-charm-cream-100 py-20">
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

    <section class="grid lg:grid-cols-6">
        <div
            class="col-span-full lg:col-span-3 bg-charm-cream-100 px-10 py-20 lg:p-20 2xl:px-50 flex justify-center items-center">
            <span class="font-[Lora] text-xl font-medium ">
                Our handtied wefts are expertly made by us are very practical and do not require special care. They can
                easily tolerate heat, and you can create any styling with a hairdryer and a curling iron. Another advantage
                of using a natural material in manufacture is the ease of coloring. As well as their own curls, wefts can be
                dyed.
            </span>
        </div>
        <div
            class="col-span-full lg:col-span-3 bg-charm-cream-200 px-10 py-20 lg:px-30 2xl:px-50 flex justify-center items-center">
            <span class="font-[Lora] text-xl font-medium">
                We have been working in this field for a long time, therefore we have the necessary experience and knowledge
                necessary for producing hand-tied wefts. Our own workshop and high-class equipment allow us to cope with
                large volumes of orders. Also we offer the highest quality of final products.
            </span>
        </div>
        <div
            class="col-span-full lg:col-span-2 bg-charm-cream-100 lg:bg-charm-cream-200 px-10 py-20 lg:p-20 flex justify-center items-center">
            <span class="font-[Lora] font-medium text-charm-dark-500 text-xl">
                It does not matter which initial hair structure you have, we are able to choose exactly that variant that
                will organically complement your own hair and be natural at the same time. With us you will find products of
                any shade and length, therefore using hand-made wefts from the company
                <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker> your hairdo acquires a natural volume, will also
                look natural and attractive.
            </span>
        </div>
        <div
            class="col-span-full lg:col-span-4 bg-charm-cream-300 px-10 py-20 lg:py-20 lg:ps-10 lg:pe-20 2xl:pe-40 flex justify-center items-center gap-2.5">
            <img src="{{ Vite::asset('resources/images/icons/female-hairs.svg') }}"
                class="hidden lg:block w-35 drop-shadow-lg" alt="">
            <span class="font-[Lora] text-2xl border-s-2 ps-10">
                As you can see, <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker> company's products meet the
                highest requirements and will please you for a long time. For additional advice and ordering of the goods,
                write to us on <span class="font-medium">Viber</span> or <span class="font-medium">WhatsApp</span> or you
                can contact with us by e-mail: <span class="font-medium">infohaircharm@gmail.com</span>. Contacting us in
                the showroom, you will not have any difficulties with the terms of order fulfillment and you can always
                count on the perfect quality of the goods purchased!
            </span>
        </div>
    </section>
@endsection
