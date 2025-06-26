<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\ProductCategory;

$products = Product::where(['category' => ProductCategory::TAPE_HAIR])->get();

name('products.tape-hair');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/tape-hair.jpg">
        <x-slot:title>
            Tape Hair
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section.header>
        Tape in hair extensions is one of the most popular methods of extensions. <span class="font-semibold">Russian hair
            Tape</span> - is, first of all, a wonderful appearance, an <span class="font-semibold">ideal structure</span> and
        ease of care. Such products allow you to give your hair the right volume quickly, as well as increase the length of
        hair.
    </x-section.header>

    <section class="grid lg:grid-cols-6">
        <div class="col-span-4 bg-charm-cream-100 flex justify-center items-center px-10 py-20 lg:p-20 2xl:px-40">
            <span class="font-[Lora] tracking-wide text-2xl lg:text-6xl italic">
                Our company uses only <span class="not-italic uppercase">virgin Slavic</span> bundles for manufacturing, so
                the result will exceed all <span class="not-italic uppercase">your expectations!</span>
            </span>
        </div>
        <div class="hidden lg:flex flex-col lg:col-span-2 px-10 py-20 justify-center items-center bg-charm-cream-300">
            <x-section.company />
        </div>
    </section>

    {{-- <section class="bg-charm-dark-400 py-2.5">
        <div></div>
    </section> --}}

    <section class="grid lg:grid-cols-6">
        <div class="col-span-3 bg-charm-cream-200">
            <h3
                class="font-[Boldonse] bg-charm-dark-600 text-charm-cream-100 tracking-wider text-sm leading-6 lg:leading-8 lg:text-xl uppercase px-5 lg:px-10 py-5">
                Why should you choose a tape hair
            </h3>
            <div class="p-10 xl:px-20 my-auto">
                <x-list>
                    <x-list.item>
                        We are pleased to offer you a truly exclusive product from real Russian Virgin hair, which is
                        obtained
                        from one donor. We are proud to use the best
                    </x-list.item>
                    <x-list.item>
                        Product has thick ends, which gives a thicker overall look
                    </x-list.item>
                    <x-list.item>
                        Silicone or other harmful substances are not used
                    </x-list.item>
                    <x-list.item>
                        Strands is evenly distributed and securely attached to the tape. Hair does not shed
                    </x-list.item>
                    <x-list.item>
                        Tape has a neat appearance, elastic and flexible, thin in thickness. Absolutely not noticeable on
                        the
                        head and does not present any discomfort when you wear it
                    </x-list.item>
                    <x-list.item>
                        Available in 7 colors. Curls are Virgin so you can lighten them with bleach
                    </x-list.item>
                </x-list>
            </div>
        </div>
        <div class="col-span-3 flex">
            <img src="https://www.hair-charm.com/images/HAIR/tape-hair/4.jpg.pagespeed.ce.KBL-CbPpZO.jpg"
                class="object-cover w-1/2" alt="">
            <img src="https://www.hair-charm.com/images/HAIR/tape-hair/2.jpg"
                class="object-cover w-1/2 border-e-4 border-charm-cream-200 " alt="">
        </div>
    </section>

    <x-section.marquee text="Tape Hair" />

    <section class="bg-charm-cream-100 py-20">
        <x-product>
            @foreach ($products as $product)
                <x-product.card :product="$product" />
            @endforeach
        </x-product>
    </section>

    <section class="bg-charm-dark-400 py-20 lg:py-30">
        <div class="max-w-3xl mx-auto px-5 lg:px-0 ">
            <div class="text-charm-cream-100 font-[Lora] text-lg lg:text-4xl text-center uppercase">
                What is it necessary to pay attention to when selecting hair for extensions? We’ll try to explain you:
            </div>
        </div>
    </section>

    <section class="bg-charm-cream-200 px-10 py-20 lg:p-10">
        <div class="max-w-6xl mx-auto grid grid-cols-3 gap-40">
            <div><span class="text-[300px] rotate-90 block font-[Oswald] opacity-5 font-black">01</span></div>
            <div class="col-span-2 flex flex-col justify-center">
                <div class="font-[Oswald] text-xl lg:text-2xl uppercase drop-shadow-lg">
                    First, you need to know the origin of the material from which this product was manufactured.
                </div>
                <span class="block w-1/2 h-0.5 my-5 bg-charm-dark-300"></span>
                <span class="font-[Lora] text-lg font-medium">
                    The majority of tape hair is made in China and in countries of southeast Asia. Accordingly, their
                    products are made from Asian raw. Russian companies purchase such products and sell them as Slavic hair.
                    Be careful and do not fall for such tricks. <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker>
                    company works directly with donors of natural Slavic tresses. We make Tape hair in our own production,
                    so you cannot doubt the top-quality of finished goods. The entire range of our tape hair is created
                    exclusively from not dyed Russian strands.
                </span>
            </div>
        </div>
    </section>

    <section class="bg-charm-cream-100 px-10 py-20 lg:p-10 overflow-hidden">
        <div class="max-w-6xl mx-auto grid grid-cols-3 gap-40 justify-center items-center">
            <div class="col-span-2 flex justify-center flex-col">
                <div class="font-[Oswald] text-xl lg:text-2xl uppercase drop-shadow-lg">
                    Second important factor is the processing of raw materials.
                </div>
                <span class="block w-1/2 h-0.5 my-5 bg-charm-dark-300"></span>
                <span class="font-[Lora] text-lg font-medium">
                    Unscrupulous manufacturers often use silicone, which, at first glance, gives shine and beauty to curls,
                    but after a month of wear, the silicone layer begins to wash off, wefts become brittle and dull. Our
                    specialists completely exclude any harmful additives at manufactoring, therefore our products have a
                    healthy appearance and serve for a long time.
                </span>
            </div>
            <div><span class="text-[300px] block rotate-90 font-[Oswald] opacity-5 font-black">02</span></div>
        </div>
    </section>

    <section class="bg-charm-cream-200 px-10 py-20 lg:p-20 lg:py-40">
        <div class="grid grid-cols-2 max-w-6xl mx-auto items-center gap-20">
            <div class="col-span2">
                <span class="font-[Oswald] text-xl lg:text-2xl uppercase drop-shadow-lg">
                    Great advantage of our product is the thickness of the tape itself.
                </span>
                <span class="block w-1/2 h-0.5 my-5 bg-charm-dark-300"></span>
                <span class="font-[Lora] text-lg font-medium">
                    It is always minimal and for this reason is absolutely invisible on head. And also hair does not leak
                    from the tape.
                </span>
            </div>
            <div class="col-span2">
                <span class="font-[Oswald] text-xl lg:text-2xl uppercase drop-shadow-lg">
                    Another important point when choosing tape hair is selection of the shade you need.
                </span>
                <span class="block w-1/2 h-0.5 my-5 bg-charm-dark-300"></span>
                <span class="font-[Lora] text-lg font-medium">
                    In our salon it's possible to find the color that will exactly match your native color.
                </span>
            </div>
        </div>
    </section>

    <x-section.products />

    <section class="grid lg:grid-cols-6">
        <div class="lg:col-span-2">
            <img src="https://www.hair-charm.com/images/HAIR/tape-hair/one.jpg.pagespeed.ce.46b790xMG_.jpg"
                class="object-cover size-full" alt="">
        </div>
        <div class="lg:col-span-2 bg-charm-cream-100 lg:p-15 2xl:p-30 flex items-center relative">
            <img src="{{ Vite::asset('resources/images/icons/logo-dark.svg') }}"
                class="size-[70%] drop-shadow-lg absolute top-1/2 left-1/2 -translate-1/2 z-0 opacity-5" alt="">
            <span class="font-[Oswald] text-charm-dark-400 tracking-wide lg:text-2xl 2xl:leading-9 relative z-10">
                As you can see, when buying tape hair, you need to pay attention to a few moments for the purchase
                really pleased the eye. {{ env('APP_NAME') }} company, which has been specialized in manufacture of various
                products for many years, is glad to offer you a truly exclusive product from the real
                <span class="font-semibold text-charm-dark-600">Virgin Slavic</span> not dyed tresses.
            </span>
        </div>
        <div class="lg:col-span-2">
            <img src="https://www.hair-charm.com/images/HAIR/tape-hair/two.jpg.pagespeed.ce._v7KLPw6Kq.jpg"
                class="object-cover size-full" alt="">
        </div>
    </section>

    <section class="grid grid-cols-2">
        <div class="bg-charm-cream-200 flex justify-center items-center pe-20 ps-10 py-40">
            <div class="text-lg lg:text-xl font-[Lora] font-medium max-w-xl mx-auto text-right">
                The tape hair from {{ env('APP_NAME') }} have all the properties of quality products. Contacting us, you get
                tape hair from professionals in their field, who have a lot of experience in manufactoring such products. We
                always listen to the requirements of the customer, so we can execute any of your individual orders in the
                shortest possible time. On average, you will receive finished products in 3-4 days after ordering, and up to
                a week if the goods are not on stock.
            </div>
        </div>
        <div class="bg-charm-dark-400 flex justify-center items-center ps-20 pe-10 py-40">
            <div class="text-lg lg:text-xl font-[Lora] font-medium max-w-xl text-charm-cream-200">
                View the full range of our services you can on the web-site, or by contacting us directly on Viber or
                WhatsApp. Our experienced staff will help you choose exactly that kind of tape hair, which suit you
                personally. If you are looking for high-quality service, efficiency in work and high skill of
                performers, then {{ env('APP_NAME') }} is your choice number 1!
            </div>
        </div>
    </section>
@endsection
