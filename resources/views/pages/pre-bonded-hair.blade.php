<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\ProductCategory;

$products = Product::where(['category' => ProductCategory::PRE_BONDED_HAIR])->get();

name('products.pre-bonded-hair');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/pre-bonded-hair.jpg">
        <x-slot:title>
            Pre Bonded Hair
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section.header>
        Are you looking for the highest quality micro ring hair extensions, pre bonded hair?
        Our company {{ env('APP_NAME') }} will help with this.
    </x-section.header>

    <section class="bg-charm-dark-400 px-10 py-20 lg:py-40 flex items-center">
        <div class="font-[Lora] text-4xl font-medium max-w-3xl mx-auto text-center italic text-charm-cream-200">
            Such kind of product must be purchased only from professionals in their field, who have excellent raw
            materials and know how to prepare it for sale.
        </div>
    </section>

    <section class="grid sm:grid-cols-2 lg:grid-cols-2">
        <div class="bg-charm-cream-100 px-20 py-40">
            <div class="font-[Lora] text-xl font-medium max-w-xl mx-auto">
                In our production we use only Virgin Slavic hair, which are cut off from Slavic girls. They are considered
                elite, because they look stunningly, easy for wearing without causing trouble to their possessor, are easy
                to care for and do not differ from native tresses.
            </div>
        </div>
        <div class="bg-charm-cream-200 px-20 py-40">
            <div class="font-[Lora] text-xl font-medium max-w-xl mx-auto">
                Pre-tipped hair from the company <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker> will serve you
                3-4 years and will look great. Our craftsmen do all this laborious process manually. Our employees use only
                strong Italian keratin. The advantage of our pre-bonded strands is hair does not shed.
            </div>
        </div>
    </section>

    <section class="bg-charm-brown-600 py-20 lg:py-30">
        <div class="max-w-3xl mx-auto text-charm-cream-100 text-lg px-5 lg:px-0 lg:text-3xl text-center uppercase">
            Pre-bonded strands can be<br>divided into three types:
        </div>
    </section>

    <section class="grid sm:grid-cols-4">
        <div class="sm:col-span-2 xl:col-span-1 bg-charm-cream-200 px-10 py-20 2xl:p-20 relative">
            <span class="absolute right-0 top-0 opacity-5 font-[Oswald] text-8xl font-black">01</span>
            <span class="font-[Oswald] text-xl font-medium uppercase">U-tips (flat-tips)</span>
            <span class="font-[Lora] text-xl font-medium text-charm-dark-400">
                –are special keratinous flat capsules that are designed for hot hair extensions. A
                special feature of this method is the thermal impact on the material, due to which donor strand is perfectly
                attached to your own curls.
            </span>
        </div>
        <div class="sm:col-span-2 xl:col-span-1 bg-charm-cream-100 px-10 py-20 2xl:p-20 relative">
            <span class="absolute right-0 top-0 opacity-5 font-[Oswald] text-8xl font-black">02</span>
            <span class="font-[Oswald] text-xl font-medium uppercase">I-tips</span>
            <span class="font-[Lora] text-xl font-medium text-charm-dark-400">
                – this method is designed for hair extensions by micro-rings. Such method is considered to be more
                gentle for tresses, because the process of extensions is made without the influence of high temperature.
            </span>
        </div>
        <div class="sm:col-span-2 xl:col-span-1 xl:bg-charm-cream-200 sm:bg-charm-cream-100 px-10 py-20 2xl:p-20 relative">
            <span class="absolute right-0 top-0 opacity-5 font-[Oswald] text-8xl font-black">03</span>
            <span class="font-[Oswald] text-xl font-medium uppercase">Nano - tips <i>(nano-rings)</i></span>
            <span class="font-[Lora] text-xl font-medium text-charm-dark-400">
                – are round keratin capsules with a special tip, which when clamped is clamped by a
                ring. This method is one of the latest achievements in the field of hair extensions on capsules.
            </span>
        </div>
        <div class="sm:col-span-2 xl:col-span-1 bg-charm-cream-300 px-10 py-20 2xl:p-20 flex items-center relative">
            <img src="{{ Vite::asset('resources/images/icons/hair-style-badge-for-female-hair-salon.svg') }}"
                class="absolute left-1/2 top-1/2 -translate-1/2 opacity-10 z-0 size-60 2xl:size-80 drop-shadow-lg"
                alt="">
            <span class="font-[Oswald] text-xl tracking-wide uppercase relative z-10">
                You can get about 100 ready-made strands from 100 grams of materia. In addition, we are considering the
                possibility of creating micro-tips.
            </span>
        </div>
    </section>

    <x-section.marquee text="Pre Bonded Hair" />

    <section class="bg-charm-cream-100 px-10 py-20">
        <x-product>
            @foreach ($products as $product)
                <x-product.card :product="$product" />
            @endforeach
        </x-product>
    </section>

    <section class="bg-charm-dark-500 px-20 py-40 flex items-center">
        <div class="font-[Lora] text-4xl font-medium max-w-4xl mx-auto text-center text-charm-cream-300">
            It's a matter of taste to choose which types of the proposed Pre-bonded hair you prefer. We guarantee
            <span class="text-charm-cream-600/80 font-black italic">perfect quality</span> of the finished products and
            <span class="text-charm-cream-600/80 font-black italic">fast lead-time</span>.
            Our company is manufacturing goods for
            <span class="text-charm-cream-600/80 font-black italic">hair extensions</span> for a long time, so it has
            tremendous experience in this field of activity.
        </div>
    </section>

    <section class="grid sm:grid-cols-3">
        <div class="bg-charm-cream-300 px-10 py-20 2xl:px-20 2xl:py-40 flex flex-col items-center gap-y-5">
            <img src="{{ Vite::asset('resources/images/icons/discount-shape.svg') }}"
                class="size-45 rotate-6 drop-shadow-lg" alt="">
            <span class="font-[Oswald] tracking-wide uppercase text-xl font-medium max-w-sm text-center">
                For wholesale customers, we always have pleasant discounts. So a large order of goods will cost somewhat
                cheaper than usual.
            </span>
        </div>
        <div class="sm:bg-charm-cream-200 px-10 py-20 2xl:px-20 2xl:py-40 flex items-center">
            <span class="font-[Lora] text-xl font-medium">
                Choosing our company, you can not doubt the high quality of the products. All used material was sanitized
                and is safe for health. In addition, cases of using mixed strands in one product are excluded, because we
                adhere to the principle - one hair donor - one product.
            </span>
        </div>
        <div class="bg-charm-cream-100 px-10 py-20 2xl:px-20 2xl:py-40 flex items-center">
            <span class="font-[Lora] text-xl font-semibold tracking-wide uppercase">
                Do not hesitate, <x-marker variant="cream">{{ env('APP_NAME') }}</x-marker> company is responsible for all
                its orders, so we hope to become a regular reliable partner for you in matter of regular deliveries of
                exclusive goods.
            </span>
        </div>
    </section>
@endsection
