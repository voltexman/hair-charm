<?php
use function Laravel\Folio\name;
use App\Models\Slide;
use App\Models\Page;
name('about-us');
?>

@php
    $page = Page::where('slug', 'about-us')->firstOrFail();
@endphp

@push('meta')
    <title>{{ $page->meta_title ?: 'About Us' }}</title>
    <meta name="description" content="{{ $page->meta_description }}">
    <meta name="robots" content="{{ $page->robots }}">
@endpush

@extends('layouts.base')

@section('header')
    <x-page-header image="bg-section-categories">
        <x-slot:title>About Us</x-slot>
        <x-slot:caption>
            Our company is located in Ukraine, in Kiev, and specializes in the trade of Slavic virgin hair. Our bundles are
            collected on the territory of Russia and Ukraine. Slavic virgin strands are the elite highest quality hair.
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section class="bg-charm-cream-100">
        <div class="max-w-2xl mx-auto grid md:grid-cols-[auto_1fr] gap-10 md:items-start">
            <div class="md:[writing-mode:vertical-rl] font-[Boldonse] text-3xl md:text-4xl">
                Our production
            </div>
            <x-list variant="dark">
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
    </x-section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl mx-auto font-[Lora] text-xl md:text-3xl text-center text-balance">
            Our customers are salons and retail clients <span class="italic font-black">worldwide</span>. We have
            <span class="text-charm-brown-600 font-semibold">extensive experience</span> in the
            <span class="text-charm-brown-600 font-semibold">hair trade</span> so we
            can understand each customer and carry out customer’s wishes.
        </div>
    </x-section>

    <x-section class="relative bg-center bg-cover bg-no-repeat bg-fixed"
        style="background-image: url('{{ Vite::asset('resources/images/bg-payment-and-delivery.png') }}')">
        <div class="absolute inset-0 bg-black/50 backdrop-blur-xs"></div>
        <div class="relative max-w-xl mx-auto font-[Poppins] text-lg text-center text-balance text-charm-cream-100">
            Payment of the goods can be made by bank transfer <i>(Swift)</i> or <b>Western union</b>. Shipment of your order
            will be done the next day after receiving payment. If you purchase hand tied wefts, the shipment will be
            done after their manufacture. Once your order has shipped, we will send you an email with your tracking
            number. Delivery usually takes <span class="font-semibold">1-3 days</span>.
        </div>
    </x-section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl mx-auto font-[Oswald] text-xl xl:text-2xl tracking-wide uppercase text-center text-balance">
            If you want to visit us and see the quality of the hair before you buy, we will meet you at the airport and
            help you book the best room in Kiev hotels. Always looking for new partners, with the best wishes of Charm
            Hair company!
        </div>
    </x-section>
@endsection
