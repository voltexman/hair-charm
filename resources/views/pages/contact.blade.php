<?php

use function Laravel\Folio\name;

name('contact');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/wefts.jpg">
        <x-slot:title>
            Contact
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <section class="max-w-6xl mx-auto grid lg:grid-cols-3 px-10 py-20 lg:px-0 gap-10">
        <div class="lg:col-span-2 flex flex-col gap-y-10">
            <div class="grid md:grid-cols-2 gap-y-6.5">
                <div class="flex flex-col gap-y-6.5">
                    <div class="hidden md:flex gap-x-5 items-center">
                        <div class="border bg-charm-cream-200 border-charm-brown-100 p-3.5 rotate-8">
                            <x-lucide-user-circle
                                class="size-7 stroke-charm-cream-900 fill-charm-brown-200 -rotate-8 drop-shadow-md drop-shadow-charm-brown-300"
                                stroke-width="1.5" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-[Boldonse]">Contact</span>
                            <span class="font-[Oswald] text-gray-700">Maxim</span>
                        </div>
                    </div>
                    <div class="flex gap-x-5 items-center">
                        <div class="border bg-charm-cream-200 border-charm-brown-100 p-3.5 -rotate-4">
                            <x-lucide-mail
                                class="size-7 stroke-charm-cream-900 fill-charm-brown-200 rotate-4 drop-shadow-md drop-shadow-charm-brown-300"
                                stroke-width="1.5" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-[Boldonse]">Email</span>
                            <span class="font-[Oswald] text-gray-700">infohaircharm@gmail.com</span>
                        </div>
                    </div>
                    <div class="flex gap-x-5 items-center">
                        <div class="border bg-charm-cream-200 border-charm-brown-100 p-3.5 rotate-10">
                            <x-lucide-phone
                                class="size-7 stroke-charm-cream-900 fill-charm-brown-200 -rotate-10 drop-shadow-md drop-shadow-charm-brown-300"
                                stroke-width="1.5" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-[Boldonse]">Phone</span>
                            <span class="font-[Oswald] text-gray-700">+380931501651</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-y-6.5">
                    <div class="flex gap-x-5 items-center">
                        <div class="border bg-charm-cream-200 border-charm-brown-100 p-3.5 rotate-5">
                            <x-lucide-facebook
                                class="size-7 stroke-charm-cream-900 fill-charm-cream-500 -rotate-5 drop-shadow-md drop-shadow-charm-brown-300"
                                stroke-width="1.5" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-[Boldonse]">Facebook</span>
                            <span class="text-sm font-[Oswald] text-gray-600">www.facebook.com/sdgasdgjksad</span>
                        </div>
                    </div>
                    <div class="flex gap-x-5 items-center">
                        <div class="border bg-charm-cream-200 border-charm-brown-100 p-3.5 -rotate-2">
                            <x-lucide-phone
                                class="size-7 stroke-charm-cream-900 fill-charm-cream-500 rotate-2 drop-shadow-md drop-shadow-charm-brown-300"
                                stroke-width="1.5" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-[Boldonse]">WhatsApp</span>
                            <span class="text-sm font-[Oswald] text-gray-600">www.whatsapp.com/sadgasdgsadg</span>
                        </div>
                    </div>
                    <div class="flex gap-x-5 items-center">
                        <div class="border bg-charm-cream-200 border-charm-brown-100 p-3.5 rotate-8">
                            <x-lucide-instagram
                                class="size-7 stroke-charm-cream-900 fill-charm-cream-500 -rotate-8 drop-shadow-md drop-shadow-charm-brown-300"
                                stroke-width="1.5" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-[Boldonse]">Instagram</span>
                            <span class="text-sm font-[Oswald] text-gray-600">www.instagram.com/asdgakldgasdg</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-lg font-[Lora] font-semibold text-gray-800">
                We value your feedback and are always looking to improve. Whether you have a suggestion, a question, or a
                complaint, feel free to reach out to us. Your message matters, and we’ll do our best to respond promptly and
                thoughtfully.
            </div>
        </div>

        <div class="max-w-md w-full mx-auto">
            @livewire('feedback')
        </div>
    </section>
@endsection
