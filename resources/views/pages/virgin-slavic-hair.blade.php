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
    <section class="bg-charm-cream-200 py-20 lg:py-30 flex justify-center">
        <div class="max-w-xl mx-auto px-5 lg:px-0 relative">
            <span
                class="font-[Alex_Brush] text-charm-dark text-4xl xl:text-5xl absolute -top-0 left-1/2 -translate-1/2 opacity-5 drop-shadow-lg font-bold">
                {{ env('APP_NAME') }}
            </span>
            <h2 class="text-xl xl:text-3xl text-charm-dark drop-shadow-lg leading-8 xl:leading-10 text-center uppercase">
                <span class="font-medium">What is the most popular and valuable product to buy?</span>
                Undoubtedly, it's Virgin Russian hair, which has all the properties of beautiful and healthy strands.
            </h2>
        </div>
    </section>

    <section class="bg-charm-brown-600 text-white xl:py-20">
        <div class="max-w-6xl 2xl:max-w-7xl mx-auto flex flex-col xl:flex-row lg:gap-20">
            <div class="px-5 py-10 xl:px-0 xl:py-20 xl:w-2/3">
                <p class="text-2xl xl:text-3xl uppercase">
                    Which you can buy wholesale at {{ env('APP_NAME') }}. Now we will tell you why buying treeses at our
                    company is a good idea!
                </p>
                <p class="font-[Lora] text-xl xl:text-2xl mt-10">
                    It is well known that virgin Russian hair demanded all over the world. They are the most luxurious. This
                    is why we offer such type to our customers.
                </p>
            </div>
            <div class="lg:w-1/3 px-5 mb-10 lg:px-0 lg:mb-0">
                <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/6.jpg.pagespeed.ce.uObjNX7Z61.jpg"
                    class="size-full object-cover object-center p-5 border" alt="">
            </div>
        </div>
    </section>

    <section class="bg-charm-cream-200 flex flex-col lg:flex-row h-auto">
        <div class="lg:w-1/2 h-100 lg:h-auto flex">
            <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/1.jpg"
                class="w-1/2 h-full object-cover border-e-6 border-charm-cream-200" alt="">
            <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/5.jpg" class="w-1/2 object-cover"
                alt="">
        </div>
        <div class="lg:w-1/2 flex flex-col">
            <h3
                class="font-[Boldonse] bg-charm-dark-600 text-charm-cream-100 tracking-wider text-sm leading-6 lg:leading-8 lg:text-xl uppercase px-5 lg:px-10 py-5">
                What is the advantage of buying loose bundles in our company?
            </h3>
            <div class="px-5 lg:px-20 py-10 my-auto">
                <div
                    class="uppercase lg:text-lg tracking-wide font-black text-gray-600 pb-2 lg:pb-4 border-b border-dashed border-gray-400">
                    Product has a fine and silky texture
                </div>
                <div
                    class="uppercase lg:text-lg tracking-wide font-black text-gray-600 py-2 lg:py-4 border-b border-dashed border-gray-400">
                    The ends are thick
                </div>
                <div
                    class="uppercase lg:text-lg tracking-wide font-black text-gray-600 py-2 lg:py-4 border-b border-dashed border-gray-400">
                    All haircuts are from one donor, which eliminates the cases of blended strands. There are only remy
                    hair used
                </div>
                <div
                    class="uppercase lg:text-lg tracking-wide font-black text-gray-600 py-2 lg:py-4 border-b border-dashed border-gray-400">
                    Material is not treated with silicone and other harmful ingredients
                </div>
                <div
                    class="uppercase lg:text-lg tracking-wide font-black text-gray-600 py-2 lg:py-4 border-b border-dashed border-gray-400">
                    Wide assortment of different shades
                </div>
                <div
                    class="uppercase lg:text-lg tracking-wide font-black text-gray-600 py-2 lg:pt-4 borderb border-dashed border-gray-400">
                    Available bundles with lengths from 14inch to 40inch.
                </div>
            </div>
        </div>
    </section>

    <x-section.products />

    <section class="grid lg:grid-cols-3 2xl:grid-cols-5 bg-white relative z-10">
        <div class="col-span-1 2xl:col-span-1 px-20 py-20 lg:p-20 2xl:p-10 bg-charm-cream-200 flex">
            <span class="text-lg xl:text-2xl uppercase font-[Oswald] tracking-wider text-charm-dark-400 self-center">
                Acquiring virgin Russian hair from <span class="font-medium">"Charm Hair"</span>, customers get goods of
                exceptional quality, which will serve for a long time.
            </span>
        </div>
        <div class="col-span-1 2xl:col-span-1 px-20 py-20 lg:p-20 2xl:p-15 bg-charm-cream-100 flex">
            <span
                class="text-lg font-medium lg:text-2xl uppercase lg:font-bold font-[Oswald] text-charm-dark-300 self-center">
                We have several types of wefts with the different structure. We can offer straight, wavy, or curly hair.
            </span>
        </div>
        <div class="col-span-1 2xl:col-span-1 px-10 py-20 lg:px-15 2xl:p-10 bg-charm-cream-300 flex">
            <span class="text-xl text-charm-dark-400 tracking-wider font-medium font-[Oswald] uppercase self-center">
                Virgin Russian bulk hair fits perfectly into any hairstyle, it has a great structure and is very practical.
                Our products can withstand many corrections, after which they look no less impressive than on the day of
                visiting the salon.
            </span>
        </div>
        <div class="col-span-1 2xl:hidden flex flex-col px-10 py-20 justify-center items-center bg-charm-cream-100">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="size-50 drop-shadow-lg" alt="">
            <span class="font-[Alex_Brush] text-7xl drop-shadow-lg font-black">charm hair</span>
            <span class="text-xl font-[Oswald] tracking-wider text-charm-brown-600 drop-shadow-lg -mt-2 uppercase">
                stylish hair company
            </span>
        </div>
        <div class="col-span-1 lg:col-span-2 p-10 lg:p-20 2xl:p-10 bg-charm-brown-600 flex">
            <div
                class="font-[Lora] text-lg lg:text-2xl font-medium uppercase lg:leading-9 tracking-wide text-white self-center 2xl:self-start">
                Company works individually with each client, so we try our best to find out the requirements of our
                customers according to the structure, color and length of cuts. Our employees can consult you at any time
                and answer questions about choosing the product that is right for you.
            </div>
        </div>
    </section>

    <x-section.separate.marquee text="Vigrin Russian Hair Wholesale" />

    <section class="bg-charm-cream-100 grid lg:grid-cols-3 relative z-10 overflow-hidden">
        <div
            class="flex lg:col-span-2 overflow-x-hidden h-80 lg:h-130 gap-x-2.5 touch-pan-x touch-manipulation snap-x snap-mandatory relative">
            <a href="#image-1"
                class="hidden lg:flex absolute left-0 top-1/2 -translate-y-1/2 w-12 h-full justify-center items-center backdrop-blur-xs bg-charm-cream-500/20 shadow-lg shadow-black/35 hover:w-14 hover:shadow-xl hover:backdrop-blur-sm hover:bg-charm-cream-500/30 transition-all duration-250 cursor-pointer">
                <x-lucide-chevron-left class="size-10 stroke-charm-cream-200" stroke-width="1" />
            </a>
            <a href="#image-2"
                class="hidden lg:flex absolute right-0 top-1/2 -translate-y-1/2 w-12 h-full justify-center items-center backdrop-blur-xs bg-charm-cream-500/20 shadow-lg shadow-black/35 hover:w-14 hover:shadow-xl hover:backdrop-blur-sm hover:bg-charm-cream-500/30 transition-all duration-250 cursor-pointer">
                <x-lucide-chevron-right class="size-10 stroke-charm-cream-200" stroke-width="1" />
            </a>
            <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/10.jpg.pagespeed.ce.n-qNGr3kMX.jpg"
                class="object-cover w-full bg-charm-brown/20 snap-start" alt="">
            <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/4.jpg.pagespeed.ce.XxuoJjzrFh.jpg"
                class="object-cover w-full bg-charm-brown/20 snap-start" alt="">
        </div>
        <div
            class="font-[Lora] leading-7 2xl:leading-9 font-semibold uppercase px-5 py-10 lg:px-15 lg:py-0 2xl:text-xl self-center">
            Most of our customers prefer large wholesale purchases. For us, this isn't a problem. Employees work quickly
            and efficiently, so we can fulfill your order in the shortest possible time. You do not have to wait a long
            time for the delivery of the material, because we hold sufficient quantities in stock. Chossing wholesale
            purchase of the uncolored Slavic hair in company "{{ env('APP_NAME') }}", you make a correct choice.
        </div>
    </section>

    <section class="bg-charm-cream-100 grid lg:grid-cols-3 relative z-10">
        <div
            class="font-[Lora] leading-7 2xl:leading-9 font-semibold uppercase px-5 py-10 lg:px-15 lg:py-0 2xl:text-xl self-center order-2 lg:order-1">
            Our specialists undergo long training and constantly improve their skills. Therefore, purchasing goods from
            us, you will never encounter product quality problems. Be confident that working with our company permanently
            will bring you only positive customer relation, and after the completion of the next order, you can recommend us
            with an easy heart!
        </div>
        <div
            class="flex lg:col-span-2 overflow-x-hidden h-80 lg:h-130 gap-x-2.5 touch-pan-x touch-manipulation snap-x snap-mandatory relative order-1 lg:order-2">
            <a href="#image-1"
                class="hidden lg:flex absolute left-0 top-1/2 -translate-y-1/2 w-12 h-full justify-center items-center backdrop-blur-xs bg-charm-cream-500/20 shadow-lg shadow-black/35 hover:w-14 hover:shadow-xl hover:backdrop-blur-sm hover:bg-charm-cream-500/30 transition-all duration-250 cursor-pointer">
                <x-lucide-chevron-left class="size-10 stroke-charm-cream-200" stroke-width="1" />
            </a>
            <a href="#image-2"
                class="hidden lg:flex absolute right-0 top-1/2 -translate-y-1/2 w-12 h-full justify-center items-center backdrop-blur-xs bg-charm-cream-500/20 shadow-lg shadow-black/35 hover:w-14 hover:shadow-xl hover:backdrop-blur-sm hover:bg-charm-cream-500/30 transition-all duration-250 cursor-pointer">
                <x-lucide-chevron-right class="size-10 stroke-charm-cream-200" stroke-width="1" />
            </a>
            <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/11.jpg.pagespeed.ce.pMBFAx00yb.jpg"
                class="object-cover w-full snap-start" alt="" id="image-1">
            <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/7.jpg.pagespeed.ce.93gZTZ46KR.jpg"
                class="object-cover w-full snap-start" alt="" id="image-2">
        </div>
    </section>

    <section class="bg-charm-brown-600 py-20 lg:py-30">
        <div class="max-w-3xl mx-auto text-charm-cream-100 text-lg px-5 lg:px-0 lg:text-3xl text-center uppercase">
            We are always available for communication, so we are waiting for your questions on Viber or WhatsApp, as well as
            by e-mail. "{{ env('APP_NAME') }}" company is your reliable and conscientious partner in business!
        </div>
    </section>
@endsection
