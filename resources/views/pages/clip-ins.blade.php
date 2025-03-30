<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\ProductCategory;

name('products.clip-ins');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/clip-ins.jpg">
        <x-slot:title>
            Clip-Ins
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
            <h2 class="text-xl xl:text-3xl text-charm-dark drop-shadow-lg leading-8 xl:leading-10 text-center uppercase">
                One of the interesting solutions for quickly giving volume and length to your hairstyle is clip-in hair
                extensions. We use Virgin Russian hair clip-ins for sale.
            </h2>
        </div>
    </section>

    <section class="grid sm:grid-cols-2">
        <div class="bg-charm-cream-100 flex items-center px-10 py-20 sm:px-10 lg:p-20 2xl:px-40">
            <span class="font-[Oswald] text-xl sm:text-2xl lg:text-3xl tracking-wide uppercase">
                This product is suitable for those customers who have not yet decided to have permanent hair extension and
                want to experiment with their appearance.
            </span>
        </div>
        <div class="bg-charm-cream-300 px-10 py-20 sm:px-10 lg:p-20 2xl:px-40">
            <x-list>
                <x-slot:caption>There a lot of advantages of this kind of goods</x-slot>

                <x-list.item>
                    You can always fix and remove the hair, there is nothing complicated in this process
                </x-list.item>
                <x-list.item>
                    Сlip-in hairextensions are not harmful for your hair and there are no contraindications for using them
                </x-list.item>
                <x-list.item>
                    Another advantage is the ability to change your image without any hassle
                </x-list.item>
            </x-list>
        </div>
    </section>

    <section class="bg-charm-brown-600 py-20 lg:py-30">
        <div class="max-w-3xl mx-auto text-charm-cream-100 text-lg px-5 lg:px-0 lg:text-3xl text-center uppercase">
            What are the advantages of goods from {{ env('APP_NAME') }} company?
        </div>
    </section>

    <section class="grid sm:grid-cols-2">
        <div class="bg-charm-cream-200 px-10 py-20 lg:px-20 2xl:px-40 flex flex-col justify-center gap-y-5">
            <span class="font-[Oswald] text-xl sm:text-2xl tracking-wide uppercase">
                Firstly, all our goods are made by hand and have the highest quality.
            </span>
            <span class="block w-1/2 h-0.5 bg-charm-dark-500"></span>
            <span class="font-[Oswald] text-lg tracking-wide sm:text-xl">
                Strands are sewn onto thin hand-tied wefts, then special hairpins are attached to them. Creating perfect
                clip-in that are increased easy to use.
            </span>
        </div>
        <div class="bg-charm-cream-100 px-10 py-20 lg:px-20 2xl:px-40 flex justify-center items-center">
            <x-list>
                <x-slot:caption>
                    Since we produce products individually, to order, you can choose several options
                </x-slot>

                <x-list.item>
                    It can be a product of 5 parts, which are distributed over the entire surface of the head
                    <i>(for example 2 temple parts, 3 occiput parts)</i>
                </x-list.item>
                <x-list.item>
                    One entire product <i>(all in one)</i>. Achieving a full-head look is created using one piece
                </x-list.item>
            </x-list>
        </div>
    </section>

    <section class="grid sm:grid-cols-3">
        <div class="col-span-2 bg-charm-cream-300 p-20 2xl:px-40 flex flex-col justify-center gap-y-5">
            <span class="font-[Oswald] text-xl uppercase tracking-wide">
                When ordering goods from {{ env('APP_NAME') }} salon, you can choose the desired shade, structure and
                weight of product, appropriate length and width of product.
            </span>
            <span class="w-1/2 h-0.5 bg-charm-dark-500"></span>
            <span class="font-[Lora] text-2xl font-medium">
                Our specialists take customer's requirements seriously, so
                your wishes will be taken into account during the execution of order. Contacting to our company, you always
                get exactly the products wich you wish.
            </span>
        </div>
        <div class="">
            <img src="https://www.hair-charm.com/images/2.jpg" class="" alt="">
        </div>
        <div class="">
            <img src="https://www.hair-charm.com/images/3.jpg" class="" alt="">
        </div>
        <div class="col-span-2 bg-charm-cream-200 p-20 2xl:px-40 flex items-center">
            <span class="font-[Lora] text-2xl font-medium">
                Another important point, which is necessary to mention, is the material used.
                <span class="font-black">We prefer virgin Slavic hair that is not colored</span>, so you get the hairs most
                natural characteristics. They do not require complicated care, silicone is not used during processing, Hair
                does not tangled, and will always look as if you just visited a salon. Our company is one of the few ones
                that offer children's strands. Such material has the greatest value and looks great on the head.
            </span>
        </div>
    </section>

    <x-section.products />

    <section class="grid sm:grid-cols-4">
        <div class="col-span-2 bg-charm-cream-100 px-10 py-20 flex items-center">
            <span class="font-[Lora] text-xl font-medium">
                It is possible to buy 1-2 items, and also large order. Working with large orders, we are always ready to
                provide you with excellent discounts and offer the best conditions for cooperation. Be sure that in future
                you no longer have to look for new suppliers, because our company will become your reliable regular partner.
                In addition, we work quickly and do not violate the deadlines, so it is not necessary to wait for delivery
                for weeks.
            </span>
        </div>
        <div class="bg-charm-cream-200 px-10 py-20 flex items-center">
            <span class="font-[Lora] text-xl font-medium">
                Our employees are ready at any time to consult you on purchasing the right products and advise clients the
                best value for money. Contact us using WhatsApp or Viber, or by email.
            </span>
        </div>
        <div class="bg-charm-cream-300 px-10 py-20 flex items-center">
            <span class="font-[Lora] text-xl font-medium">
                If you need clip-ins made from virgin Slavic hair that will serve for a long time and meet world standards
                of quality, {{ env('APP_NAME') }} company is a reasonable choice. Please contact us and our managers will
                choose the best option for you!
            </span>
        </div>
    </section>
@endsection
