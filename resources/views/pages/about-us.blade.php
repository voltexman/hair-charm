<?php

use function Laravel\Folio\name;

name('about-us');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/wefts.jpg">
        <x-slot:title>
            About Us
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section.header>
        Our company is located in Ukraine, in Kiev, and specializes in the trade of Slavic virgin hair. Our bundles are
        collected on the territory of Russia and Ukraine. Slavic virgin strands are the elite highest quality hair.
    </x-section.header>

    <section class="grid sm:grid-cols-2">
        <div class="bg-charm-cream-100 flex justify-center items-center px-10 py-20 lg:p-20">
            <x-list>
                <x-slot:caption>Our production</x-slot>

                <x-list.item>
                    100% Human Slavic material and articles thereof
                </x-list.item>
                <x-list.item>
                    no chemicals on curls. It has a healthy appearance with undamaged cuticles
                </x-list.item>
                <x-list.item>
                    fine structure, soft to the touch, easy to comb
                </x-list.item>
                <x-list.item>
                    unmixed. A bulk hair is cut from one person
                </x-list.item>
                <x-list.item>
                    length from 14<span class="text-charm-dark-100">inch</span>
                    to 32<span class="text-charm-dark-100">inch</span>
                </x-list.item>
                <x-list.item>
                    color spectrum. 5 Russian Virgin colors
                    <span class="font-semibold italic text-charm-brown-700 font-[Lora]">
                        (9/0-blond, 8/0-dark blond, 7/0-light brown, 6/0-medium brown, 5/0-dark brown)
                    </span>.
                    Black Slavic hair is dyed hair
                </x-list.item>
            </x-list>
        </div>
        <div class="bg-charm-cream-300 flex flex-col justify-center items-center px-10 py-20 lg:p-20 gap-5">
            <img src="{{ Vite::asset('resources/images/icons/hair-salon-badge-with-scissors.svg') }}"
                class="size-60 flex-none drop-shadow-lg" alt="" />
            <div class="font-[Lora] font-medium text-lg xl:text-xl max-w-lg">
                Our customers are salons and retail clients worldwide. We have extensive experience in the hair trade so we
                can understand each customer and carry out customer’s wishes.
            </div>
        </div>
    </section>

    <section class="grid sm:grid-cols-2">
        <div class="bg-charm-cream-200 flex justify-center items-center px-10 py-20 lg:p-20">
            <div class="font-[Lora] font-medium text-lg xl:text-xl max-w-lg">
                Payment of the goods can be made by bank transfer <i>(Swift)</i> or Western union. Shipment of your order
                will be done the next day after receiving payment. If you purchase hand tied wefts, the shipment will be
                done after their manufacture. Once your order has shipped, we will send you an email with your tracking
                number. Delivery usually takes 1-3 days.
            </div>
        </div>
        <div class="bg-charm-cream-100 flex justify-center items-center px-10 py-20 lg:p-20">
            <div
                class="font-[Oswald] font-semibold text-xl xl:text-2xl text-charm-dark-400 tracking-wide uppercase max-w-lg">
                If you want to visit us and see the quality of the hair before you buy, we will meet you at the airport and
                help you book the best room in Kiev hotels. Always looking for new partners, with the best wishes of Charm
                Hair company!
            </div>
        </div>
    </section>
@endsection
