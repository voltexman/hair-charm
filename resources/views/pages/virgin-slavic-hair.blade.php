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
        <div class="font-medium leading-10 lg:leading-12 font-[Boldonse]">
            What is the most popular and valuable product to buy?
        </div>
        <div class="mt-5 leading-7 lg:leading-9 text-gray-800">
            Undoubtedly, it's Virgin Russian hair, which has all the properties of beautiful and healthy strands.
        </div>
    </x-section.header>

    <section class="bg-charm-dark-400 grid lg:grid-cols-2">
        <div class="flex flex-col justify-center mx-auto gap-10 p-10 py-20 md:p-20 max-w-2xl">
            <div class="text-2xl md:text-3xl xl:text-4xl text-white uppercase font-[Poppins]">
                <div class="font-extrabold">
                    Which you can buy wholesale at {{ env('APP_NAME') }}.
                </div>
                <div class="font-light">
                    Now we will tell you why buying treeses at our company is a good idea!
                </div>
            </div>
            <div class="font-[Lora] text-xl text-charm-cream-200">
                It is well known that virgin Russian hair demanded all over the world. They are the most luxurious. This
                is why we offer such type to our customers.
            </div>
        </div>
        <x-section.image :images="['https://www.hair-charm.com/images/HAIR/virgin-russian-hair/6.jpg.pagespeed.ce.uObjNX7Z61.jpg']" class="hidden lg:block" />
    </section>

    <section class="bg-charm-cream-200 grid lg:grid-cols-2">
        <div class="">
            <x-section.image :images="[
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/1.jpg',
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/5.jpg',
            ]" />
        </div>
        <div class="flex flex-col justify-center">
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

    {{-- <x-section.products /> --}}

    <section class="grid md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-6 2xl:grid-cols-6 bg-white relative z-10">
        <div class="col-span-1 md:col-span-2 px-10 py-20 lg:p-20 bg-charm-cream-300 flex">
            <div
                class="max-w-md mx-auto text-xl uppercase font-[Oswald] font-medium tracking-wider text-charm-dark-400 self-center">
                Acquiring virgin Russian hair from <span class="font-medium">{{ env('APP_NAME') }}</span>, customers get
                goods of exceptional quality, which will serve for a long time.
            </div>
        </div>
        <div class="col-span-1 md:col-span-2 px-10 py-20 lg:p-20 bg-charm-cream-100 flex">
            <div
                class="max-w-md mx-auto text-lg font-medium lg:text-2xl uppercase font-[Oswald] text-charm-dark-400 self-center">
                We have several types of wefts with the different structure. We can offer straight, wavy, or curly hair.
            </div>
        </div>
        <div class="col-span-1 md:col-span-2 px-10 py-20 lg:p-20 bg-charm-cream-300 flex">
            <div
                class="max-w-md mx-auto text-lg text-charm-dark-400 tracking-wider font-[Oswald] font-medium uppercase self-center">
                Virgin Russian bulk hair fits perfectly into any hairstyle, it has a great structure and is very practical.
                Our products can withstand many corrections, after which they look no less impressive than on the day of
                visiting the salon.
            </div>
        </div>
    </section>

    <section class="flex items-center p-10 py-20 lg:p-20 bg-charm-dark-400">
        <div
            class="max-w-3xl mx-auto font-[Lora] text-xl md:text-2xl lg:text-2xl xl:text-4xl text-charm-cream-300 italic font-light text-center text-balance">
            Company works
            <span class="not-italic text-2xl lg:text-3xl xl:text-5xl font-semibold text-white">individually</span> with
            each client, so we try our best to find out the requirements of our customers according to the structure,
            color and length of cuts. Our employees can consult you
            <span class="not-italic text-2xl lg:text-3xl xl:text-5xl font-normal text-white">at any time</span>
            and answer questions about choosing the product that is
            <span class="not-italic text-2xl lg:text-3xl xl:text-5xl font-thin text-white">right for you</span>.
        </div>
    </section>

    {{-- <x-section.marquee text="Vigrin Russian Hair Wholesale" /> --}}

    <section class="bg-charm-cream-100 grid lg:grid-cols-2">
        <div class="flex items-center px-10 py-20 md:p-20">
            <div class="max-w-xl mx-auto xl:text-xl font-[Lora] font-semibold uppercase">
                Most of our customers prefer large wholesale purchases. For us, this isn't a problem. Employees work quickly
                and efficiently, so we can fulfill your order in the shortest possible time. You do not have to wait a long
                time for the delivery of the material, because we hold sufficient quantities in stock. Chossing wholesale
                purchase of the uncolored Slavic hair in company "{{ env('APP_NAME') }}", you make a correct choice.
            </div>
        </div>
        <div class="">
            <x-section.image :images="[
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/10.jpg.pagespeed.ce.n-qNGr3kMX.jpg',
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/4.jpg.pagespeed.ce.XxuoJjzrFh.jpg',
            ]" />
        </div>
    </section>

    <section class="bg-charm-cream-100 grid lg:grid-cols-2">
        <div class="order-2 lg:order-1">
            <x-section.image :images="[
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/11.jpg.pagespeed.ce.pMBFAx00yb.jpg',
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/7.jpg.pagespeed.ce.93gZTZ46KR.jpg',
            ]" />
        </div>
        <div class="flex items-center px-10 py-20 md:p-20 order-1 lg:order-2">
            <div class="max-w-xl mx-auto xl:text-xl font-[Lora] font-semibold uppercase">
                Our specialists undergo long training and constantly improve their skills. Therefore, purchasing goods
                from us, you will never encounter product quality problems. Be confident that working with our company
                permanently will bring you only positive customer relation, and after the completion of the next order,
                you can recommend us with an easy heart!
            </div>
        </div>
    </section>

    <section class="bg-charm-brown-600 px-5 py-40 md:px-20">
        <div class="max-w-3xl mx-auto">
            <div class="text-charm-cream-100 text-lg lg:text-2xl text-center uppercase">
                We are always available for communication, so we are waiting for your questions on Viber or WhatsApp, as
                well as by e-mail. "{{ env('APP_NAME') }}" company is your reliable and conscientious partner in business!
                </span>
            </div>
    </section>
@endsection
