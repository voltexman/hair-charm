<?php
use function Laravel\Folio\name;

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
    <x-section.header>
        One of the interesting solutions for quickly giving volume and length to your hairstyle is clip-in hair
        extensions. We use Virgin Russian hair clip-ins for sale.
    </x-section.header>

    <section class="grid sm:grid-cols-2">
        <div class="bg-charm-cream-100 flex justify-center items-center px-10 py-20">
            <div class="max-w-lg">
                <div class="font-[Oswald] text-center text-xl sm:text-2xl lg:text-3xl tracking-wide uppercase text-balance">
                    This product is suitable for those customers who have not yet decided to have
                    <span class="font-bold text-charm-brown-600">permanent hair</span> extension and want to
                    <span class="font-bold text-charm-brown-600">experiment</span> with their appearance.
                </div>
            </div>
        </div>
        <div class="bg-charm-cream-300 px-10 py-20">
            <x-list class="max-w-xl mx-auto">
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

    <section class="bg-charm-dark-400 py-20 lg:py-30">
        <div
            class="font-[Lora] max-w-xl lg:max-w-3xl mx-auto text-charm-cream-100 text-xl md:text-2xl lg:text-3xl px-5 lg:px-0 text-center uppercase">
            What are the advantages of goods from {{ env('APP_NAME') }} company?
        </div>
    </section>

    <section class="grid sm:grid-cols-2">
        <div class="bg-charm-cream-200 px-10 py-20 flex justify-center">
            <div class="max-w-xl flex flex-col justify-center gap-y-5">
                <div class="font-[Oswald] font-medium text-xl md:text-2xl tracking-wide uppercase">
                    Firstly, all our goods are made by hand and have the highest quality.
                </div>
                <span class="block w-1/2 h-0.5 bg-charm-dark-500"></span>
                <div class="font-[Lora] text-lg md:text-xl font-medium italic">
                    Strands are sewn onto thin hand-tied wefts, then special hairpins are attached to them. Creating perfect
                    clip-in that are increased easy to use.
                </div>
            </div>
        </div>
        <div class="bg-charm-cream-100 px-10 py-20 flex justify-center items-center">
            <x-list class="max-w-xl">
                <x-slot:caption>
                    Since we produce products individually, to order, you can choose several options
                </x-slot>

                <x-list.item>
                    It can be a product of 5 parts, which are distributed over the entire surface of the head
                    <span class="text-charm-brown-600 italic">(for example 2 temple parts, 3 occiput parts)</span>
                </x-list.item>
                <x-list.item>
                    One entire product <span class="text-charm-brown-600 italic">(all in one)</span>.
                    Achieving a full-head look is created using one piece
                </x-list.item>
            </x-list>
        </div>
    </section>

    <section class="grid lg:grid-cols-2">
        <div class="bg-charm-cream-300 order-1 px-10 py-20 flex justify-center h-full">
            <div class="max-w-xl flex flex-col justify-center gap-y-5">
                <div class="font-[Oswald] text-xl md:text-2xl font-medium uppercase tracking-wide">
                    When ordering goods from {{ env('APP_NAME') }} salon, you can choose the desired shade, structure and
                    weight of product, appropriate length and width of product.
                </div>
                <span class="w-1/2 h-0.5 bg-charm-dark-500"></span>
                <div class="font-[Lora] text-lg md:text-xl font-medium italic">
                    Our specialists take customer's requirements seriously, so your wishes will be taken into account during
                    the execution of order. Contacting to our company, you always get exactly the products wich you wish.
                </div>
            </div>
        </div>
        <div class="order-2">
            <x-section.image :images="['https://www.hair-charm.com/images/2.jpg']" alt="" />
        </div>
    </section>

    <section class="grid lg:grid-cols-2">
        <div class="order-2 lg:order-1">
            <x-section.image :images="['https://www.hair-charm.com/images/3.jpg']" alt="" />
        </div>
        <div class="bg-charm-cream-200 order-1 lg:order-2 px-10 py-20 flex justify-center items-center h-full">
            <div class="font-[Lora] text-lg lg:text-xl font-medium max-w-xl">
                Another important point, which is necessary to mention, is the material used.
                <span class="font-black">We prefer virgin Slavic hair that is not colored</span>, so you get the hairs most
                natural characteristics. They do not require complicated care, silicone is not used during processing, Hair
                does not tangled, and will always look as if you just visited a salon. Our company is one of the few ones
                that offer children's strands. Such material has the greatest value and looks great on the head.
            </div>
        </div>
    </section>

    <x-section.marquee text="Clip-Ins" />

    <x-section.products />

    <section class="grid md:grid-cols-2">
        <div class="col-span-full bg-charm-cream-100 px-10 py-20 md:py-30 flex justify-center items-center">
            <div class="max-w-3xl font-[Lora] text-lg md:text-center md:text-xl text-pretty font-medium">
                It is possible to buy 1-2 items, and also large order. Working with large orders, we are always ready to
                provide you with excellent discounts and offer the best conditions for cooperation. Be sure that in future
                you no longer have to look for new suppliers, because our company will become your reliable regular partner.
                In addition, we work quickly and do not violate the deadlines, so it is not necessary to wait for delivery
                for weeks.
            </div>
        </div>
        <div class="bg-charm-cream-200 px-10 py-20 md:py-30 flex justify-center items-center">
            <div class="max-w-xl font-[Lora] text-lg md:text-center md:text-xl text-pretty font-medium">
                Our employees are ready at any time to consult you on purchasing the right products and advise clients the
                best value for money. Contact us using WhatsApp or Viber, or by email.
            </div>
        </div>
        <div class="bg-charm-cream-300 px-10 py-20 md:py-30 flex justify-center items-center">
            <div class="max-w-xl font-[Lora] text-lg md:text-center md:text-xl text-pretty font-medium">
                If you need clip-ins made from virgin Slavic hair that will serve for a long time and meet world standards
                of quality, {{ env('APP_NAME') }} company is a reasonable choice. Please contact us and our managers will
                choose the best option for you!
            </div>
        </div>
    </section>
@endsection
