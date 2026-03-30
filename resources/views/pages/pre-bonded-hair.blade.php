<?php
use function Laravel\Folio\name;
use App\Enums\ProductCategory;
name('products.pre-bonded-hair');
?>

@extends('layouts.base')

@section('header')
    <x-page-header :image="ProductCategory::PRE_BONDED_HAIR->value">
        <x-slot:title>Pre Bonded Hair</x-slot>
        <x-slot:caption>
            Are you looking for the highest quality micro ring hair extensions, pre bonded hair?
            Our company {{ env('APP_NAME') }} will help with this.
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section.header class="bg-charm-cream-100 relative">
        Such kind of product must be purchased only from
        <span class="font-bold">professionals in their field</span>, who have
        <span class="font-bold text-charm-brown-600">excellent raw materials</span> and
        <span class="italic">know how to prepare it for sale</span>.
    </x-section.header>

    <section class="grid md:grid-cols-2">
        <div class="bg-charm-dark-400 px-8 py-20 md:py-30">
            <div class="max-w-xl ms-auto grid gap-5">
                <x-section.title class="md:text-end text-charm-cream-100!">
                    <x-slot:first>Elite</x-slot>
                    Virgin <br> Slavic <x-slot:last><x-marker color="light">Hair</x-marker></x-slot>
                </x-section.title>
                <x-section.content class="text-charm-cream-100! md:text-end">
                    In our production we use only Virgin Slavic hair, which are cut off from Slavic girls. They are
                    considered elite, because they look stunningly, easy for wearing without causing trouble to their
                    possessor, are easy to care for and do not differ from native tresses.
                </x-section.content>
            </div>
        </div>
        <div class="bg-charm-cream-200 px-8 py-20 md:py-30">
            <div class="max-w-xl me-auto grid gap-5">
                <x-section.title>
                    <x-slot:first>Handcrafted</x-slot>
                    Pre-Bonded
                    <x-slot:last><x-marker color="black">Extensions</x-marker></x-slot>
                </x-section.title>
                <x-section.content>
                    Pre-tipped hair from the company <x-marker variant="font">{{ env('APP_NAME') }}</x-marker> will serve
                    you 3-4 years and will look great. Our craftsmen do all this laborious process manually. Our employees
                    use only strong Italian keratin. The advantage of our pre-bonded strands is hair does not shed.
                </x-section.content>
            </div>
        </div>
    </section>

    <x-section class="bg-charm-cream-100 relative section-3">
        <img src="{{ Vite::asset('resources/images/icons/female-hair-with-hat.svg') }}"
            class="hidden md:block absolute md:top-15 md:left-0 lg:top-1/5 lg:-left-10 md:size-[50%] opacity-10 ghost-image"
            alt="">
        <div class="md:max-w-lg lg:max-w-xl mx-auto mb-10">
            <div class="font-[Lora] italic text-2xl md:text-3xl lg:text-4xl font-semibold lg:font-medium text-center">
                <x-marker>Pre-bonded</x-marker> strands can be<br>divided into three types:
            </div>
        </div>
        <div class="md:max-w-xl lg:max-w-4xl mx-auto space-y-15">
            <div class="grid lg:grid-cols-2 gap-y-5 md:gap-x-10">
                <x-section.title class="lg:text-end">
                    U-tips <br> <span class="text-lg italic text-charm-dark-200">(flat-tips)</span>
                </x-section.title>
                <x-section.content>
                    are special keratinous flat capsules that are designed for hot hair extensions. A
                    special feature of this method is the thermal impact on the material, due to which donor strand is
                    perfectly attached to your own curls.
                </x-section.content>
            </div>
            <div class="grid lg:grid-cols-2 gap-y-5 md:gap-x-10">
                <x-section.title class="lg:text-end">I-tips</x-section.title>
                <x-section.content>
                    this method is designed for hair extensions by micro-rings. Such method is considered to be more gentle
                    for tresses, because the process of extensions is made without the influence of high temperature.
                </x-section.content>
            </div>
            <div class="grid lg:grid-cols-2 gap-y-2 md:gap-x-10">
                <x-section.title class="lg:text-end">
                    Nano-tips <br> <span class="text-lg italic text-charm-dark-200">(nano-rings)</span>
                </x-section.title>
                <x-section.content>
                    are round keratin capsules with a special tip, which when clamped is clamped by a ring. This method is
                    one of the latest achievements in the field of hair extensions on capsules.
                </x-section.content>
            </div>
        </div>
    </x-section>

    <x-section.marquee :text="ProductCategory::PRE_BONDED_HAIR->getLabel()" bg="from-charm-cream-100 to-charm-cream-200" />

    <x-section class="bg-charm-cream-200 relative">
        <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-5 items-center">
            <div
                class="md:col-span-2 font-[Oswald] md:font-light text-2xl md:text-3xl lg:text-4xl uppercase text-center md:text-end text-balance">
                You can get about 100 ready-made strands from 100 grams of materia. In addition, we are considering the
                possibility of creating
                <span class="inline-block origin-left rotate-6 underline underline-offset-8 decoration-wavy">
                    micro-tips.
                </span>
            </div>
            <div class="">
                <img src="{{ Vite::asset('resources/images/icons/badge-for-female-hair-salon.svg') }}"
                    class="absolute md:static left-1/2 top-1/2 -translate-1/2 md:translate-0 opacity-7 md:opacity-100 z-0 size-[90%] md:size70 drop-shadow-lg"
                    alt="">
            </div>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-100">
        <div class="max-w-4xl mx-auto">
            <x-products class="mt-5" :category="ProductCategory::PRE_BONDED_HAIR" />
        </div>
    </x-section>

    <x-section class="bg-charm-dark-500">
        <div class="max-w-xl lg:max-w-2xl mx-auto">
            <div class="text-charm-cream-100 font-[Lora] text-xl md:text-2xl font-medium text-center text-balance">
                It's a matter of taste to choose which types of the proposed Pre-bonded hair you prefer. We guarantee
                <span class="text-charm-cream-600 font-black italic">perfect quality</span> of the finished products and
                <span class="text-charm-cream-600 font-black italic">fast lead-time</span>.
                Our company is manufacturing goods for
                <span class="text-charm-cream-600 font-black italic">hair extensions</span> for a long time, so it has
                tremendous experience in this field of activity.
            </div>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-3xl mx-auto grid md:grid-cols-3 gap-5">
            <div
                class="order-2 md:order-1 md:col-span-2 font-[Oswald] uppercase text-xl md:text-3xl lg:text-4xl md:font-light text-center md:text-end text-balance">
                For wholesale customers, we always have pleasant discounts. So a large order of goods will cost somewhat
                cheaper than usual.
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ Vite::asset('resources/images/icons/discount-shape.svg') }}"
                    class="size-[90%] rotate-6 drop-shadow-lg mx-auto" alt="">
            </div>
        </div>
    </x-section>

    <x-section.categories />

    <x-section class="bg-charm-cream-100">
        <div class="max-w-xl mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Exceptional</x-slot>
                Quality <br> Without
                <x-slot:last><x-marker color="black">Compromise</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center">
                Choosing our company, you can not doubt the high quality of the products. All used material was sanitized
                and is safe for health. In addition, cases of using mixed strands in one product are excluded, because we
                adhere to the principle - one hair donor - one product.
            </x-section.content>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl mx-auto">
            <div class="font-[Lora] text-xl md:text-2xl font-semibold tracking-wide uppercase text-center">
                Do not hesitate, {{ env('APP_NAME') }} company is responsible for all its orders, so we hope to become a
                regular reliable partner for you in matter of regular deliveries of exclusive goods.
            </div>
        </div>
    </x-section>
@endsection

@vite('resources/js/pages/pre-bonded-hair.js')
