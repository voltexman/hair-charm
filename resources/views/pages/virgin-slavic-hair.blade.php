<?php

use function Laravel\Folio\name;

name('products.virgin-slavic-hair');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/virgin-slavic-hair.jpg">
        <x-slot:title>
            Vigrin Russian <br class="lg:hidden">Hair Wholesale
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section.header>
        <span class="font-medium">What is the most popular and valuable product to buy?</span><br>
        Undoubtedly, it's Virgin Russian hair, which has all the properties of beautiful and healthy strands.
    </x-section.header>

    <section class="bg-charm-dark-400 grid lg:grid-cols-2 xl:h-screen">
        <div class="flex flex-col justify-center mx-auto gap-10 p-10 lg:p-20 lg:max-w-3xl">
            <div class="text-xl xl:text-3xl text-white uppercase">
                Which you can buy wholesale at {{ env('APP_NAME') }}. Now we will tell you why buying treeses at our
                company is a good idea!
            </div>
            <div class="font-[Lora] text-lg text-charm-cream-200/90">
                It is well known that virgin Russian hair demanded all over the world. They are the most luxurious. This
                is why we offer such type to our customers.
            </div>
        </div>
        <x-section.image :images="['https://www.hair-charm.com/images/HAIR/virgin-russian-hair/6.jpg.pagespeed.ce.uObjNX7Z61.jpg']" class="hidden lg:block" />
    </section>

    <section class="bg-charm-cream-200 flex flex-col lg:flex-row h-auto xl:h-screen">
        <div class="lg:w-1/2 flex">
            <x-section.image :images="[
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/1.jpg',
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/5.jpg',
            ]" />
        </div>
        <div class="lg:w-1/2 flex flex-col">
            <h3
                class="font-[Boldonse] bg-charm-dark-600 text-charm-cream-100 tracking-wider text-sm leading-6 lg:leading-8 lg:text-xl uppercase px-5 lg:px-10 py-5">
                What is the advantage of buying loose bundles in our company?
            </h3>
            <div class="p-10 xl:px-20 my-auto">
                <x-list>
                    <x-list.item>
                        Product has a fine and silky texture
                    </x-list.item>
                    <x-list.item>
                        The ends are thick
                    </x-list.item>
                    <x-list.item>
                        All haircuts are from one donor, which eliminates the cases of blended strands. There are only remy
                        hair used
                    </x-list.item>
                    <x-list.item>
                        Material is not treated with silicone and other harmful ingredients
                    </x-list.item>
                    <x-list.item>
                        Wide assortment of different shades
                    </x-list.item>
                    <x-list.item>
                        Available bundles with lengths from 14inch to 40inch
                    </x-list.item>
                </x-list>
            </div>
        </div>
    </section>

    <x-section.products />

    <section class="grid md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-6 2xl:grid-cols-6 bg-white relative z-10">
        <div class="col-span-1 md:col-span-2 2xl:col-span-2 px-10 py-20 lg:p-20 2xl:p-20 bg-charm-cream-200 flex">
            <span
                class="text-lg xl:text-2xl uppercase font-[Oswald] font-medium tracking-wider text-charm-dark-400 self-center">
                Acquiring virgin Russian hair from <span class="font-medium">{{ env('APP_NAME') }}</span>, customers get
                goods of exceptional quality, which will serve for a long time.
            </span>
        </div>
        <div class="col-span-1 md:col-span-2 2xl:col-span-2 px-10 py-20 lg:p-20 2xl:p-20 bg-charm-cream-100 flex">
            <span class="text-lg font-medium lg:text-2xl uppercase font-[Oswald] text-charm-dark-400 self-center">
                We have several types of wefts with the different structure. We can offer straight, wavy, or curly hair.
            </span>
        </div>
        <div class="col-span-1 md:col-span-2 2xl:col-span-2 px-10 py-20 lg:px-15 2xl:p-20 bg-charm-cream-300 flex">
            <span class="text-lg text-charm-dark-400 tracking-wider font-[Oswald] font-medium uppercase self-center">
                Virgin Russian bulk hair fits perfectly into any hairstyle, it has a great structure and is very practical.
                Our products can withstand many corrections, after which they look no less impressive than on the day of
                visiting the salon.
            </span>
        </div>
        <div
            class="hidden col-span-2 lg:flex flex-col px-10 py-20 justify-center items-center bg-charm-cream-100 lg:bg-charm-cream-200 xl:bg-charm-cream-100">
            <x-section.company />
        </div>
        <div class="md:col-span-2 lg:col-span-4 flex items-center p-10 lg:p-20 bg-charm-dark-400">
            <div class="font-[Lora] text-xl lg:text-2xl xl:text-4xl text-charm-cream-300 italic font-light">
                Company works
                <span class="not-italic text-2xl lg:text-3xl xl:text-5xl font-normal text-white">individually</span> with
                each client, so we try our best to find out the requirements of our customers according to the structure,
                color and length of cuts. Our employees can consult you
                <span class="not-italic text-2xl lg:text-3xl xl:text-5xl font-normal text-white">at any time</span>
                and answer questions about choosing the product that is
                <span class="not-italic text-2xl lg:text-3xl xl:text-5xl font-normal text-white">right for you</span>.
            </div>
        </div>
    </section>

    <x-section.marquee text="Vigrin Russian Hair Wholesale" />

    <section class="bg-charm-cream-100 grid lg:grid-cols-6 relative z-10 overflow-hidden">
        <div
            class="flex-nowrap flex lg:col-span-4 overflow-x-auto h-80 lg:h-130 gap-x-2.5 touch-pan-x touch-manipulation snap-x snap-mandatory relative scroll-smooth">
            <a href="#image-1"
                class="hidden lg:flex absolute left-0 top-1/2 -translate-y-1/2 w-12 h-full justify-center items-center backdrop-blur-xs bg-charm-cream-500/20 shadow-lg shadow-black/35 hover:w-14 hover:shadow-xl hover:backdrop-blur-sm hover:bg-charm-cream-500/30 transition-all duration-250 cursor-pointer">
                <x-lucide-chevron-left class="size-10 stroke-charm-cream-200" stroke-width="1" />
            </a>
            <a href="#image-2"
                class="hidden lg:flex absolute right-0 top-1/2 -translate-y-1/2 w-12 h-full justify-center items-center backdrop-blur-xs bg-charm-cream-500/20 shadow-lg shadow-black/35 hover:w-14 hover:shadow-xl hover:backdrop-blur-sm hover:bg-charm-cream-500/30 transition-all duration-250 cursor-pointer">
                <x-lucide-chevron-right class="size-10 stroke-charm-cream-200" stroke-width="1" />
            </a>
            <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/10.jpg.pagespeed.ce.n-qNGr3kMX.jpg"
                class="object-cover w-full bg-charm-brown/20 snap-start min-w-[70%] sm:min-w-[40%]" id="image-1"
                alt="">
            <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/4.jpg.pagespeed.ce.XxuoJjzrFh.jpg"
                class="object-cover w-full bg-charm-brown/20 snap-start min-w-[70%] sm:min-w-[40%]" id="image-2"
                alt="">
        </div>
        <div
            class="lg:col-span-2 font-[Lora] leading-7 2xl:leading-9 font-semibold uppercase p-10 md:p-20 lg:px-15 lg:py-0 2xl:text-xl self-center order-2 lg:order-1">
            Most of our customers prefer large wholesale purchases. For us, this isn't a problem. Employees work quickly
            and efficiently, so we can fulfill your order in the shortest possible time. You do not have to wait a long
            time for the delivery of the material, because we hold sufficient quantities in stock. Chossing wholesale
            purchase of the uncolored Slavic hair in company "{{ env('APP_NAME') }}", you make a correct choice.
        </div>
    </section>

    <section class="bg-charm-cream-100 grid lg:grid-cols-3 relative z-10 overflow-hidden">
        <div class="p-10 md:p-20 lg:px-15 lg:py-0 self-center order-2 lg:order-1">
            <div class="font-[Lora] leading-7 2xl:leading-9 font-semibold uppercase 2xl:text-xl">
                Our specialists undergo long training and constantly improve their skills. Therefore, purchasing goods from
                us, you will never encounter product quality problems. Be confident that working with our company
                permanently will bring you only positive customer relation, and after the completion of the next order, you
                can recommend us with an easy heart!
            </div>
        </div>
        <div
            class="flex lg:col-span-2 h-80 lg:h-130 gap-x-2.5 touch-pan-x touch-manipulation snap-x snap-mandatory relative scroll-smooth order-1 lg:order-2">
            <a href="#image-3"
                class="hidden lg:flex absolute left-0 top-1/2 -translate-y-1/2 w-12 h-full justify-center items-center backdrop-blur-xs bg-charm-cream-500/20 shadow-lg shadow-black/35 hover:w-14 hover:shadow-xl hover:backdrop-blur-sm hover:bg-charm-cream-500/30 transition-all duration-250 cursor-pointer">
                <x-lucide-chevron-left class="size-10 stroke-charm-cream-200" stroke-width="1" />
            </a>
            <a href="#image-4"
                class="hidden lg:flex absolute right-0 top-1/2 -translate-y-1/2 w-12 h-full justify-center items-center backdrop-blur-xs bg-charm-cream-500/20 shadow-lg shadow-black/35 hover:w-14 hover:shadow-xl hover:backdrop-blur-sm hover:bg-charm-cream-500/30 transition-all duration-250 cursor-pointer">
                <x-lucide-chevron-right class="size-10 stroke-charm-cream-200" stroke-width="1" />
            </a>
            <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/11.jpg.pagespeed.ce.pMBFAx00yb.jpg"
                class="object-cover" alt="" id="image-3">
            <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/7.jpg.pagespeed.ce.93gZTZ46KR.jpg"
                class="object-cover" alt="" id="image-4">
        </div>
    </section>

    <section class="bg-charm-brown-600 px-5 py-40 md:px-20">
        <div class="max-w-3xl mx-auto">
            <span class="block text-charm-cream-100 text-lg lg:text-2xl text-center uppercase">
                We are always available for communication, so we are waiting for your questions on Viber or WhatsApp, as
                well as by e-mail. "{{ env('APP_NAME') }}" company is your reliable and conscientious partner in business!
            </span>
        </div>
    </section>
@endsection
