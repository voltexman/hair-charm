<?php

use function Laravel\Folio\name;

name('products.training');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/virgin-slavic-hair.jpg">
        <x-slot:title>
            {{ env('APP_NAME') }} Training
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
            <h2 class="text-xl xl:text-3xl text-charm-dark drop-shadow-lg text-center uppercase">
                If your business is hair extension, if you use tape hair, if you have to order ready-made product and if you
                are not completely satisfied with its quality, then this video is for you.
            </h2>
        </div>
    </section>

    <section class="grid lg:grid-cols-3 2xl:grid-cols-4">
        <div class="bg-charm-cream-300 px-10 py-20 lg:p-20 bg-charm-200 flex flex-col justify-center gap-y-10">
            <span class="font-[Oswald] text-xl lg:text-2xl uppercase self-center">
                Our company offers not only a wide range of products from hair, but also hair extension courses.
                Contact us, and we will reveal all the secrets to improve your business.
            </span>
            <span class="hidden 2xl:block w-1/2 h-1 bg-black"></span>
        </div>
        <div class="bg-charm-cream-400 lg:col-span-2 2xl:col-span-1 px-10 py-20 lg:px-20 2xl:p-20 flex">
            <span
                class="font-[Oswald] text-2xl 2xl:text-3xl text-charm-dark-400 lg:border-s-4 lg:ps-10 2xl:border-0 2xl:ps-0 self-center">
                The advantage of the training is that you will be able to make products from any strands by yourself,
                depending on your client needs. Your income will undoubtedly increase after completing this training.
            </span>
        </div>
        <div
            class="bg-charm-cream-200 lg:col-span-2 2xl:col-span-1 p-10 py-20 lg:px-60 lg:p-20 2xl:px-20 flex items-center">
            <div class="flex flex-col gap-y-10 relative">
                <img src="{{ Vite::asset('resources/images/icons/video-play.svg') }}"
                    class="absolute left-1/2 -translate-x-1/2 lg:-translate-x-0 lg:-left-1/3 top-1/2 -translate-y-1/2 2xl:left-0 opacity-10 lg:opacity-5 2xl:opacity-10 size-60 lg:size-75 rotate-12 drop-shadow-lg -z-0"
                    alt="">
                <span class="font-[Oswald] text-2xl 2xl:text-3xl text-charm-dark-400 self-center z-10">
                    The training course includes video tutorials, as well as a detailed description of the entire process.
                    We will answer all your questions that appear during training.
                </span>
                <span class="hidden lg:block w-1/2 h-1 bg-black 2xl:hidden"></span>
            </div>
        </div>
        <div class="bg-charm-cream-300 px-10 py-10 lg:p-20 flex flex-col gap-5 items-center">
            <img src="{{ Vite::asset('resources/images/scissors-cutting-hair-lines.svg') }}" class="size-35 drop-shadow-lg"
                alt="">
            <span
                class="font-[Boldonse] textlg lg:text-xl leading-8 text-charm-dark-300 tracking-wide uppercase text-center">
                Tape hair production is the manufacture of strands that are used for extensions.
            </span>
        </div>
    </section>

    <section class="grid lg:grid-cols-2">
        <div class="bg-charm-cream-100 text-charm-dark-300 px-10 py-20 flex lg:justify-center lg:items-center">
            <x-list>
                <x-slot:caption>For work you will need:</x-slot>
                <x-list.item>
                    <x-slot:caption>1.</x-slot>
                    cut glass
                </x-list.item>
                <x-list.item>
                    <x-slot:caption>2.</x-slot>
                    reinforcement
                </x-list.item>
                <x-list.item>
                    <x-slot:caption>3.</x-slot>
                    adhesive for the manufacture of tapes
                </x-list.item>
                <x-list.item>
                    <x-slot:caption>4.</x-slot>
                    drying cabinet (if necessary, to speed up the process). You can make it yourself.
                </x-list.item>
                <x-list.item>
                    <x-slot:caption>5.</x-slot>
                    polymer adhesive tape
                </x-list.item>
                <x-list.item>
                    <x-slot:caption>6.</x-slot>
                    equipment for cutting finished tapes. It is used to create a neat regular shape, but you can do with
                    ordinary scissors as well.
                </x-list.item>
            </x-list>
        </div>
        <div class="bg-charm-dark-300 text-charm-cream-100 p-20 flex justify-center items-center">
            <x-list>
                <x-slot:caption>The process consists of the following steps:</x-slot>
                <x-list.item>
                    <x-slot:caption>1.</x-slot>
                    hair placement
                </x-list.item>
                <x-list.item>
                    <x-slot:caption>2.</x-slot>
                    gluing in several stages
                </x-list.item>
                <x-list.item>
                    <x-slot:caption>3.</x-slot>
                    drying
                </x-list.item>
                <x-list.item>
                    <x-slot:caption>4.</x-slot>
                    machine processing
                </x-list.item>
                <x-list.item>
                    <x-slot:caption>5.</x-slot>
                    applying polymer tape.
                </x-list.item>
            </x-list>
        </div>
    </section>

    <section class="grid lg:grid-cols-4">
        <div class="bg-charm-cream-200 p-10 2xl:p-20 flex items-center">
            <span class="text-2xl font-[Oswald] tracking-wide ppercase fontlight text-charm-dark-400">
                The quality of our products is at a high level. We have all the necessary skills in working with hair. If
                you study with us, you will get a thin, elastic, flexible and long lasting tape for extension.
            </span>
        </div>
        <div class="bg-charm-cream-300 p-10 py-20 2xl:p-20 flex items-center">
            <span class="text-2xl font-[Oswald] font-medium tracking-wider text-charm-dark-400 uppercase text-center">
                You can purchase everything that is necessary for work from us. We ship worldwide.
            </span>
        </div>
        <div class="bg-charm-cream-100/95 px-10 py-20 2xl:p-20 flex items-center relative">
            <img src="{{ Vite::asset('resources/images/scissors-badge.svg') }}"
                class="-z-10 opacity-85 size-60 absolute top-1/2 left-1/2 -translate-1/2" alt="">
            <span class="text-2xl font-[Oswald] tracking-wide">
                Nowadays only a limited number of factories, located in Russia and Ukraine, are engaged in this process.
                {{ env('APP_NAME') }} is one of the best in this field.
            </span>
        </div>
        <div class="bg-charm-cream-200 p-10 2xl:p-20 flex flex-col items-center gap-5">
            <img src="{{ Vite::asset('resources/images/50-percent-off.svg') }}" class="size-35 drop-shadow-lg rotate-6"
                alt="">
            <span class="text-xl font-[Oswald] uppercase text-charm-brown-600 text-center font-black">
                For the <span class="text-charm-brown-800 drop-shadow-lg">first three</span> clients we offer
                <span class="text-charm-brown-800 drop-shadow-lg">50 percent</span> discount. So hurry up not to lose your
                chance!
            </span>
        </div>
    </section>
@endsection
