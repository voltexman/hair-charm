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
    <x-section.header>
        If your business is hair extension, if you use tape hair, if you have to order ready-made product and if you
        are not completely satisfied with its quality, then this video is for you.
    </x-section.header>

    <section class="grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4">
        <div class="bg-charm-cream-300 px-10 py-20 lg:p-20 bg-charm-200 flex flex-col justify-center gap-y-10">
            <div
                class="max-w-lg mx-auto font-[Oswald] text-xl lg:text-2xl uppercase self-center relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-1/2 after:border-b-2 after:border-black pb-10">
                Our company offers not only a wide range of products from hair, but also hair extension courses.
                Contact us, and we will reveal all the secrets to improve your business.
            </div>
        </div>
        <div class="bg-charm-cream-400 xl:col-span-2 2xl:col-span-1 px-10 py-20 flex">
            <div
                class="max-w-lg mx-auto font-[Oswald] text-2xl 2xl:text-3xl text-charm-dark-400 lg:border-s-2 lg:ps-10 2xl:border-0 2xl:ps-0 self-center">
                The advantage of the training is that you will be able to make products from any strands by yourself,
                depending on your client needs. Your income will undoubtedly increase after completing this training.
            </div>
        </div>
        <div class="bg-charm-cream-200 xl:col-span-2 2xl:col-span-1 p-10 py-20 flex items-center relative">
            <img src="{{ Vite::asset('resources/images/icons/video-play.svg') }}"
                class="absolute left-1/2 lg:left-1/4 2xl:left-1/2 top-1/2 -translate-1/2 opacity-10 lg:opacity-5 2xl:opacity-10 size-[80%] rotate-12 drop-shadow-lg -z-0"
                alt="">
            <div
                class="max-w-lg mx-auto self-center font-[Oswald] text-2xl 2xl:text-3xl text-charm-dark-400 relative z-10 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-1/2 after:border-b-2 after:border-black pb-10">
                The training course includes video tutorials, as well as a detailed description of the entire process.
                We will answer all your questions that appear during training.
            </div>
        </div>
        <div class="bg-charm-cream-300 px-10 py-10 lg:p-20 flex flex-col gap-5 items-center">
            <img src="{{ Vite::asset('resources/images/scissors-cutting-hair-lines.svg') }}" class="size-35 drop-shadow-lg"
                alt="">
            <div
                class="max-w-sm font-[Boldonse] textlg lg:text-xl leading-8 text-charm-dark-300 tracking-wide uppercase text-center">
                Tape hair production is the manufacture of strands that are used for extensions.
            </div>
        </div>
    </section>

    <section class="grid lg:grid-cols-2">
        <div class="bg-charm-cream-100 text-charm-dark-300 px-10 py-20 flex lg:justify-center lg:items-center">
            <x-list class="max-w-xl">
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
        <div class="bg-charm-dark-300 text-charm-cream-100 px-10 py-20 flex justify-center items-center">
            <x-list class="max-w-xl">
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

    <section class="grid md:grid-cols-2 xl:grid-cols-4">
        <div class="bg-charm-cream-200 px-10 py-20 flex justify-center items-center">
            <div class="max-w-lg text-2xl font-[Oswald] tracking-wide ppercase fontlight text-charm-dark-400">
                The quality of our products is at a high level. We have all the necessary skills in working with hair. If
                you study with us, you will get a thin, elastic, flexible and long lasting tape for extension.
            </div>
        </div>
        <div class="bg-charm-cream-300 px-10 py-20 flex justify-center items-center">
            <div
                class="max-w-lg text-2xl font-[Oswald] font-medium tracking-wider text-charm-dark-400 uppercase text-center">
                You can purchase everything that is necessary for work from us. We ship worldwide.
            </div>
        </div>
        <div class="bg-charm-cream-100/95 px-10 py-20 flex justify-center items-center relative">
            <img src="{{ Vite::asset('resources/images/scissors-badge.svg') }}"
                class="-z-10 opacity-85 size-60 absolute top-1/2 left-1/2 -translate-1/2" alt="">
            <div class="max-w-lg text-2xl font-[Oswald] tracking-wide">
                Nowadays only a limited number of factories, located in Russia and Ukraine, are engaged in this process.
                {{ env('APP_NAME') }} is one of the best in this field.
            </div>
        </div>
        <div class="bg-charm-cream-200 px-10 py-20 flex flex-col justify-center items-center gap-5">
            <img src="{{ Vite::asset('resources/images/50-percent-off.svg') }}" class="size-35 drop-shadow-lg rotate-6"
                alt="">
            <div class="max-w-sm text-xl font-[Oswald] uppercase text-charm-brown-600 text-center font-black">
                For the <span class="text-charm-brown-800 drop-shadow-lg">first three</span> clients we offer
                <span class="text-charm-brown-800 drop-shadow-lg">50 percent</span> discount. So hurry up not to lose your
                chance!
            </div>
        </div>
    </section>
@endsection
