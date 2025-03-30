<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\ProductCategory;

name('products.gray-russian-hair-wholesale');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/Bleached-Russian-hair.jpg">
        <x-slot:title>
            Gray Russian<br>hair wholesale
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
            <div
                class="text-xl xl:text-3xl text-charm-dark-500 drop-shadow-lg leading-8 xl:leading-10 text-center uppercase">
                Special product for sale<br>GRAY RUSSIAN HAIR.
                </h2>
            </div>
    </section>

    <section class="grid sm:grid-cols-6">
        <div
            class="sm:col-span-3 bg-charm-cream-100 px-10 py-20 xl:p-20 2xl:px-40 flex flex-col lg:flex-row items-center gap-10">
            <img src="{{ Vite::asset('resources/images/icons/hair-style-salon-circular-badge.svg') }}" class="size-35"
                alt="">
            <span class="font-[Lora] text-xl font-medium flex items-center">
                The company {{ env('APP_NAME') }} is a supplier of Slavic gray hair, which is cut off by our employees in
                territory of Ukraine and Russia. Donors are elderly people of Slavic appearance.
            </span>
        </div>
        <div
            class="sm:col-span-3 bg-charm-cream-300 px-10 py-20 xl:p-20 2xl:px-40 flex flex-col lg:flex-row items-center gap-10">
            <img src="{{ Vite::asset('resources/images/icons/brush-tool.svg') }}" class="size-35" alt="">
            <span class="font-[Lora] text-xl font-medium">
                This type of hair has a fine structure, soft and silky to touch. Gray hair is purchased by enterprises in
                large volumes for industrial clarification <i>(bleaching)</i>.
            </span>
        </div>
        <div class="sm:col-span-3 lg:col-span-2 bg-charm-cream-200 px-10 py-20 xl:p-20 2xl:p-40 flex items-center">
            <span class="font-[Oswald] text-xl 2xl:text-2xl uppercase">
                Due to its light shade, it quickly and easily acquires a snow-white color, while not losing quality. Then
                used for hair extension in beauty salons.
            </span>
        </div>
        <div class="sm:col-span-3 lg:col-span-2 bg-charm-cream-400 px-10 py-20 xl:p-20 2xl:p-40 flex items-center relative">
            <img src="{{ Vite::asset('resources/images/icons/juvenile-female-hair-with-two-ponytails-hanging-at-both-sides.svg') }}"
                class="absolute top-1/2 left-1/2 -translate-1/2 size-45 2xl:size-55 z-0 opacity-10" alt="">
            <span class="font-[Oswald] text-xl 2xl:text-2xl uppercase relative z-10">
                Gray hair is also used in the manufacture of wigs for older people.
            </span>
        </div>
        <div
            class="hidden sm:col-span-3 lg:hidden lg:col-span-2 bg-charm-cream-300 sm:flex flex-col px-10 py-20 justify-center items-center">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="size-50 drop-shadow-lg" alt="">
            <span class="font-[Alex_Brush] text-7xl drop-shadow-lg font-black">charm hair</span>
            <span class="text-xl font-[Oswald] tracking-wider text-charm-brown-600 drop-shadow-lg -mt-2 uppercase">
                stylish hair company
            </span>
        </div>
        <div class="sm:col-span-3 lg:col-span-2 bg-charm-cream-200 px-10 py-20 xl:p-20 2xl:p-40 flex items-center">
            <span class="font-[Oswald] text-xl 2xl:text-2xl uppercase">
                Minimum wholesale order of such type of hair is 3 kg, which includes length from 45 to 70 cm.
            </span>
        </div>
    </section>
@endsection
