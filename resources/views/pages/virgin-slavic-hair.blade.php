<?php
use function Laravel\Folio\name;
use App\Enums\ProductCategory;
name('products.virgin-slavic-hair');
?>

@extends('layouts.base')

@section('header')
    <x-page-header :image="ProductCategory::VIRGIN_RUSSIAN_HAIR->value">
        <x-slot:title>Vigrin Russian <br class="lg:hidden">Hair Wholesale</x-slot>
        <x-slot:caption>What is the most popular and valuable product to buy?</x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section.header class="bg-charm-cream-100">
        Undoubtedly, it's Virgin Russian hair, which has all the properties of beautiful and healthy strands.
    </x-section.header>

    <section class="bg-charm-dark-400 lg:grid lg:grid-cols-2 gap-20">
        <div class="max-w-xl lg:max-w-3xl mx-auto flex flex-col px-5 lg:px-0 py-20">
            <div class="text-xl lg:text-3xl font-[Lora] text-zinc-200 uppercase italic text-end text-nowrap font-bold">
                Which you can buy <br> wholesale at {{ env('APP_NAME') }}.
            </div>
            <div class="text-lg lg:text-xl font-[Lora] text-zinc-400 uppercase font-bold mt-5 text-end">
                Now we will tell you why buying <br class="hidden lg:block">
                <span class="text-white font-bold">treeses</span> at our <br class="lg:hidden"> company is a good idea!
            </div>
            <div class="font-[Poppins] text-zinc-200 font-light lg:text-end self-end max-w-xl mt-10 lg:mt-auto">
                It is well known that virgin Russian hair demanded all over the world. They are the most luxurious. This
                is why we offer such type to our customers.
            </div>
        </div>

        <img src="https://www.hair-charm.com/images/HAIR/virgin-russian-hair/6.jpg.pagespeed.ce.uObjNX7Z61.jpg"
            class="object-cover size-full bg-charm-cream-200/50 backdrop-blur-xs" alt="" />
    </section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-lg lg:max-w-3xl xl:max-w-4xl mx-auto grid lg:grid-cols-2 gap-10">
            <div class="font-[Boldonse] text-2xl md:text-3xl lg:text-4xl/14 lg:text-end text-balance">
                What is the advantage of buying <br> loose bundles in our company?
            </div>
            <x-list variant="dark">
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
    </x-section>

    <x-section.categories />

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl lg:max-w-3xl xl:max-w-4xl mx-auto grid lg:grid-cols-2 gap-10 relative">
            <img src="{{ Vite::asset('resources/images/icons/curled-black-long-female-hair-shape.svg') }}"
                class="absolute top-1/2 left-1/2 w-full lg:w-3/4 -translate-x-1/2 -translate-y-1/2 opacity-2.5 object-cover object-center z-0"
                alt="" />
            <div class="max-w-sm flex flex-col ms-auto">
                <div class="text-lg lg:text-xl font-bold font-[Lora] text-end uppercase">
                    Acquiring virgin Russian hair from <span class="font-semibold">Hair-Charm</span>, customers get goods of
                    exceptional quality, which will serve for a long time.
                </div>

                <div class="text-xl/tight lg:text-xl font-medium font-[Lora] italic text-end mt-10 text-charm-dark-400">
                    We have several types of wefts with the different structure. We can offer
                    straight, wavy, or curly hair.
                </div>
            </div>

            <div class="max-w-md text-xl lg:text-4xl font-[Oswald] lg:font-light tracking-wide text-center md:text-left">
                Virgin Russian bulk hair fits perfectly into any hairstyle, it has a great structure and is very practical.
                Our products can withstand many corrections, after which they look no less impressive than on the day of
                visiting the salon.
            </div>
        </div>
    </x-section>

    <x-section class="bg-charm-dark-400 flex items-center justify-center flex-col gap-5">
        <img src="{{ Vite::asset('resources/images/icons/logo-light.svg') }}" class="size-30 mx-auto" alt="">
        <div class="max-w-xl lg:max-w-2xl mx-auto">
            <div
                class="font-[Lora] text-xl md:text-2xl/7 font-medium text-charm-cream-300/80 italic text-center text-balance">
                Company works
                <span class="not-italic font-semibold text-white">individually</span>
                with each client, so we try our best to find out the requirements of our customers according to the
                structure, color and length of cuts. Our employees can consult you
                <span class="not-italic font-semibold text-white">at any time</span>
                and answer questions about choosing the product that is
                <span class="not-italic font-semibold text-white">right for you</span>.
            </div>
        </div>
    </x-section>

    {{-- <x-section.marquee text="Vigrin Russian Hair Wholesale" /> --}}

    <section class="bg-charm-cream-100 grid lg:grid-cols-2">
        <div class="flex items-center px-5 py-20 md:p-20">
            <div class="max-w-xl mx-auto xl:text-xl font-[Lora] font-semibold uppercase">
                Most of our customers prefer large wholesale purchases. For us, this isn't a problem. Employees work
                quickly
                and efficiently, so we can fulfill your order in the shortest possible time. You do not have to wait a
                long
                time for the delivery of the material, because we hold sufficient quantities in stock. Chossing
                wholesale
                purchase of the uncolored Slavic hair in company "{{ env('APP_NAME') }}", you make a correct choice.
            </div>
        </div>
        <div class="">
            {{-- <x-section.image :images="[
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/10.jpg.pagespeed.ce.n-qNGr3kMX.jpg',
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/4.jpg.pagespeed.ce.XxuoJjzrFh.jpg',
            ]" /> --}}
        </div>
    </section>

    <section class="bg-charm-cream-100 grid lg:grid-cols-2">
        <div class="order-2 lg:order-1">
            {{-- <x-section.image :images="[
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/11.jpg.pagespeed.ce.pMBFAx00yb.jpg',
                'https://www.hair-charm.com/images/HAIR/virgin-russian-hair/7.jpg.pagespeed.ce.93gZTZ46KR.jpg',
            ]" /> --}}
        </div>
        <div class="flex items-center px-5 py-20 md:p-20 order-1 lg:order-2">
            <div class="max-w-xl mx-auto text-lg font-[Lora] font-semibold uppercase">
                Our specialists undergo long training and constantly improve their skills. Therefore, purchasing goods
                from us, you will never encounter product quality problems. Be confident that working with our company
                permanently will bring you only positive customer relation, and after the completion of the next order,
                you can recommend us with an easy heart!
            </div>
        </div>
    </section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl lg:max-w-3xl mx-auto">
            <div class="font-[Lora] text-xl md:text-2xl text-center text-balance">
                We are always available for communication, so we are waiting for your questions on
                <span class="font-bold">Viber</span> or <span class="font-bold">WhatsApp</span>, as well as by
                <span class="font-bold">e-mail</span>.
                "{{ env('APP_NAME') }}" company is your reliable and conscientious partner in business! </span>
            </div>
    </x-section>
@endsection
