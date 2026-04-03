<?php
use function Laravel\Folio\{name, render};
use App\Models\Slide;
use App\Models\Page;
name('contact');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', 'contacts')->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->title" :description="$page->description">
    <x-slot:header>
        <x-page-header image="contact-header">
            <x-slot:title>Contact</x-slot>
        </x-page-header>
    </x-slot:header>

    <x-section class="bg-charm-cream-100">
        <div class="max-w-3xl mx-auto space-y-10">
            <div class="flex flex-col gap-y-10">
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
                                <span class="font-[Poppins] text-charm-brown-500">Maxim</span>
                            </div>
                        </div>
                        <div class="flex gap-x-5 items-center">
                            <div class="border bg-charm-cream-200 border-charm-brown-100 p-3.5 -rotate-4">
                                <x-lucide-mail
                                    class="size-7 stroke-charm-cream-900 rotate-4 drop-shadow-md drop-shadow-charm-brown-300"
                                    stroke-width="1.5" />
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm font-[Boldonse]">Email</span>
                                <span class="font-[Poppins] text-charm-brown-500">infohaircharm@gmail.com</span>
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
                                <span class="font-[Poppins] text-charm-brown-500">+380931501651</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-6.5">
                        <div class="flex gap-x-5 items-center group">
                            <div class="border bg-charm-cream-200 border-charm-brown-100 p-3.5 rotate-5">
                                <x-lucide-facebook
                                    class="size-7 stroke-charm-cream-900 fill-charm-cream-500 -rotate-5 drop-shadow-md drop-shadow-charm-brown-300"
                                    stroke-width="1.5" />
                            </div>
                            <div class="flex flex-col overflow-hidden">
                                <span class="text-sm font-[Boldonse]">Facebook</span>
                                <div
                                    class="text-sm font-[Poppins] text-charm-brown-500 mask-r-from-5% truncate line-clamp-1 group-hover:mask-r-from-100%">
                                    www.facebook.com/sdgasdgjksads.adgasd79/7g6s78d6g87sa67dg678
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-x-5 items-center group">
                            <div class="border bg-charm-cream-200 border-charm-brown-100 p-3.5 -rotate-2">
                                <x-lucide-phone
                                    class="size-7 stroke-charm-cream-900 fill-charm-cream-500 rotate-2 drop-shadow-md drop-shadow-charm-brown-300"
                                    stroke-width="1.5" />
                            </div>
                            <div class="flex flex-col overflow-hidden">
                                <span class="text-sm font-[Boldonse]">WhatsApp</span>
                                <span
                                    class="text-sm font-[Poppins] text-charm-brown-500 mask-r-from-5% truncate line-clamp-1 group-hover:mask-r-from-100%">
                                    www.whatsapp.com/sadgasdgsadg
                                </span>
                            </div>
                        </div>
                        <div class="flex gap-x-5 items-center group">
                            <div class="border bg-charm-cream-200 border-charm-brown-100 p-3.5 rotate-8">
                                <x-lucide-instagram
                                    class="size-7 stroke-charm-cream-900 fill-charm-cream-500 -rotate-8 drop-shadow-md drop-shadow-charm-brown-300"
                                    stroke-width="1.5" />
                            </div>
                            <div class="flex flex-col overflow-hidden">
                                <span class="text-sm font-[Boldonse]">Instagram</span>
                                <span
                                    class="text-sm font-[Poppins] text-charm-brown-500 mask-r-from-5% truncate line-clamp-1 group-hover:mask-r-from-100%">
                                    www.instagram.com/asdgakldgasdg
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="font-[Poppins] text-lg text-gray-800">
                    We value your feedback and are always looking to improve. Whether you have a suggestion, a question,
                    or a complaint, feel free to reach out to us. Your message matters, and we’ll do our best to respond
                    promptly and thoughtfully.
                </div>
            </div>

            <div class="relative">
                <img src="{{ Vite::asset('resources/images/icons/scissors.svg') }}"
                    class="hidden md:block absolute top-0 right-0 w-1/3 opacity-15 scissors" alt="">
                <div class="max-w-md">
                    @livewire('feedback')
                </div>
            </div>
        </div>
    </x-section>
</x-layouts.base>

@vite('resources/js/pages/contact.js')
