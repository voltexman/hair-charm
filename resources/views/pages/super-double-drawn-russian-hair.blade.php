<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\ProductCategory;

name('products.super-double-drawn-russian-hair');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/Bleached-Russian-hair.jpg">
        <x-slot:title>
            Super double drawn<br>russian hair
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section.header>
        {{ env('APP_NAME') }} company offers for sale a special product - Russian virgin double drawn hair
        extensions.
    </x-section.header>

    <section class="grid sm:grid-cols-2">
        <div class="bg-charm-cream-100 px-10 py-20 2xl:px-40 flex items-center">
            <span class="font-[Lora] text-lg font-medium">
                Slavic not dyed virgin hair is appreciated all over the world. They are used in extension and in wigs. This
                type is high quality, with long lifetime, fine structure and silkiness. All extension masters love such
                strands. Such type of bulks are popular for customers from different countries. It is rather difficult to
                obtain such strands, as many sellers try to sell fakes from Asian hair, giving them out for natural Slavic
                hair. Nowadays it’s hard to find good seller who would guarantee 100% naturalness of their goods. If you are
                looking for reliable seller, then our company Hair Charm is at your service!
            </span>
        </div>
        <div class="bg-charm-cream-300 px-10 py-20 2xl:px-40 flex flex-col justify-center gap-y-5">
            <span class="font-[Oswald] tracking-wide text-xl uppercase">Double drawn hair</span>
            <span class="w-1/2 h-0.5 bg-charm-dark-500"></span>
            <span class="font-[Lora] text-xl font-medium">
                We present you unique double drawn hair. Natural Russian strands are with very dense ends! To find such bulk
                is very difficult, from 20 different haircuts, only 1 can have a density of tips the same as nearly to
                follicle. Resulting material is additionally combed out to get rid of short hairs.
            </span>
        </div>
        <div class="bg-charm-cream-200 px-10 py-20 2xl:px-40 flex items-center">
            <x-list>
                <x-slot:caption>Our Double drawn</x-slot>

                <x-list.item>
                    Selected not dyed hairs with very dense ends
                </x-list.item>
                <x-list.item>
                    90% of hairs with same length, without presence of short hairs
                </x-list.item>
                <x-list.item>
                    One cut from one head. It’s a guarantee that there are no Asian or colored hairs in bulks
                </x-list.item>
                <x-list.item>
                    3 not dyed colors: 7/0, 6/0, 5/0
                </x-list.item>
                <x-list.item>
                    Length: 14inch, 16inch, 18inch, 20inch
                </x-list.item>
            </x-list>
        </div>
        <div class="bg-charm-cream-100 px-10 py-20 2xl:px-40 flex flex-col justify-center gap-y-5">
            <span class="font-[Oswald] tracking-wide text-xl uppercase">The best Slavic haircuts</span>
            <span class="w-1/2 h-0.5 bg-charm-dark-500"></span>
            <span class="font-[Lora] text-lg font-medium">
                Our company is engaged in buying up natural curls all over Ukraine. We carefully select goods, conduct a
                detailed assessment and leave only the best products. All hair is processed, hand-picked and goes on sale in
                perfect condition. Such strands can be painted and curled. They don’t get tangled, are easy to comb,
                suitable for multiple build-up and look as natural as possible! We work all over the world, send to any
                corner of globe. Our company values reputation, so do not doubt of naturalness of strands.
            </span>
        </div>
    </section>
@endsection
