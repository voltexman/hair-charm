<?php
use function Laravel\Folio\{name, render};
use App\Enums\ProductCategory;
use App\Models\Page;
name('products.clip-ins');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', ProductCategory::CLIP_INS)->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->meta_title" :description="$page->meta_description" :keywords="$page->meta_keywords">
    <x-slot:header>
        <x-page-header :image="ProductCategory::CLIP_INS->value">
            <x-slot:title>Clip-Ins</x-slot>
            <x-slot:caption>
                One of the interesting solutions for quickly giving volume and length to your hairstyle is clip-in hair
                extensions. We use Virgin Russian hair clip-ins for sale.
            </x-slot>
        </x-page-header>
    </x-slot:header>

    <x-section.header class="bg-charm-cream-100">
        This product is suitable for those customers who have not yet decided to have
        <span class="font-bold text-charm-brown-600">permanent hair</span> extension and want to
        <span class="font-bold text-charm-brown-600">experiment</span> with their appearance.
    </x-section.header>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl lg:max-w-4xl mx-auto grid lg:grid-cols-2 gap-5 md:gap-10">
            <div class="font-[Boldonse] text-2xl lg:text-4xl/14 text-nowrap lg:text-end">
                There a lot <br> of advantages <br> of this kind <br> of goods
            </div>
            <x-list variant="dark">
                <x-list.item>
                    You can always fix and remove the hair, there is nothing complicated in this process
                </x-list.item>
                <x-list.item>
                    Сlip-in hairextensions are not harmful for your hair and there are no contraindications for using
                    them
                </x-list.item>
                <x-list.item>
                    Another advantage is the ability to change your image without any hassle
                </x-list.item>
            </x-list>
        </div>
    </x-section>

    <x-section.marquee :text="ProductCategory::CLIP_INS->getLabel()" bg="from-charm-cream-200 to-charm-cream-100" />

    <x-section class="bg-charm-cream-100">
        <div class="md:max-w-md mx-auto mb-10">
            <div class="font-[Lora] italic text-2xl font-semibold lg:font-medium text-center">
                What are the <x-marker>advantages</x-marker> of goods from {{ env('APP_NAME') }} company?
            </div>
        </div>
        <div class="md:max-w-xl lg:max-w-3xl mx-auto space-y-10">
            <div class="grid lg:grid-cols-2 gap-5 md:gap-x-10 md:gap-y-5">
                <div class="order-1 font-[Boldonse] text-2xl/10 lg:text-end">
                    Firstly, all our goods are made by hand and have the highest quality.
                </div>
                <div class="font-[Lora] text-xl md:text-2xl font-medium italic order-2">
                    Strands are sewn onto thin hand-tied wefts, then special hairpins are attached to them. Creating
                    perfect clip-in that are increased easy to use.
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-5 md:gap-x-10 md:gap-y-5">
                <div class="order-1 md:order-2 font-[Boldonse] text-2xl/10">
                    Since we produce products individually, to order, you can choose several options
                </div>
                <x-list variant="dark" class="order-2 lg:order-1 lg:text-end">
                    <x-list.item>
                        It can be a product of 5 parts, which are distributed over the entire surface of the head
                        <span class="text-charm-brown-600 italic">(for example 2 temple parts, 3 occiput parts)</span>
                    </x-list.item>
                    <x-list.item>
                        One entire product <span class="text-charm-brown-600 italic">(all in one)</span>.
                        Achieving a full-head look is created using one piece
                    </x-list.item>
                </x-list>
            </div>
        </div>
    </x-section>

    <section class="grid lg:grid-cols-2">
        <div class="bg-charm-cream-200 order-1 px-8 py-20 lg:p-0 flex justify-center h-full">
            <div class="max-w-md flex flex-col justify-center gap-y-5">
                <x-section.title class="text-2xl/7! font-medium!">
                    When ordering goods from {{ env('APP_NAME') }} salon, you can choose the desired shade, structure
                    and
                    weight of product, appropriate length and width of product.
                </x-section.title>
                <x-section.content>
                    Our specialists take customer's requirements seriously, so your wishes will be taken into account
                    during
                    the execution of order. Contacting to our company, you always get exactly the products wich you
                    wish.
                </x-section.content>
            </div>
        </div>
        <div class="order-2 h-100 md:h-150 lg:h-170">
            <x-section.image :images="['https://www.hair-charm.com/images/2.jpg']" alt="" />
        </div>
    </section>

    <section class="grid lg:grid-cols-2">
        <div class="order-2 lg:order-1 h-100 md:h-150 lg:h-170">
            <x-section.image :images="['https://www.hair-charm.com/images/3.jpg']" alt="" />
        </div>
        <div class="bg-charm-dark-400 order-1 lg:order-2 px-8 py-20 lg:p-0 flex justify-center items-center h-full">
            <x-section.content class="max-w-md text-charm-cream-100!">
                Another important point, which is necessary to mention, is the material used.
                <span class="font-semibold">We prefer virgin Slavic hair that is not colored</span>, so you get the
                hairs
                most natural characteristics. They do not require complicated care, silicone is not used during
                processing,
                Hair does not tangled, and will always look as if you just visited a salon. Our company is one of the
                few
                ones that offer children's strands. Such material has the greatest value and looks great on the head.
            </x-section.content>
        </div>
    </section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Reliable</x-slot>
                <br>Wholesale
                <x-slot:last><x-marker color="dark">Solutions</x-marker></x-slot:last>
            </x-section.title>
            <x-section.content class="md:text-center">
                It is possible to buy 1-2 items, and also large order. Working with large orders, we are always ready to
                provide you with excellent discounts and offer the best conditions for cooperation. Be sure that in
                future
                you no longer have to look for new suppliers, because our company will become your reliable regular
                partner.
                In addition, we work quickly and do not violate the deadlines, so it is not necessary to wait for
                delivery
                for weeks.
            </x-section.content>
        </div>
    </x-section>

    <x-section class="relative bg-fixed bg-right xl:bg-center bg-no-repeat bg-cover"
        style="background-image: url('{{ Vite::asset('resources/images/bg-support-section.png') }}')">
        <div class="absolute inset-0 bg-charm-cream-300/60 backdrop-blur-xs"></div>
        <div class="relative max-w-xl mx-auto">
            <div class="font-[Oswald] text-2xl md:text-3xl md:font-light text-center text-balance">
                Our employees are ready at any time to consult you on purchasing the right products and advise clients
                the best value for money. Contact us using
                <span class="font-bold">WhatsApp</span>,
                <span class="font-bold">Viber</span>,
                or by <span class="font-bold">email</span>.
            </div>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl grid gap-5 md:gap-10 mx-auto">
            <x-section.title class="md:text-center">
                <x-slot:first>Premium</x-slot>
                Virgin <br> Hair
                <x-slot:last><x-marker color="black">Quality</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center">
                If you need clip-ins made from virgin Slavic hair that will serve for a long time and meet world
                standards of quality, <x-marker variant="font">{{ env('APP_NAME') }}</x-marker> company is a reasonable
                choice. Please contact us and our managers will choose the best option for you!
            </x-section.content>
        </div>
    </x-section>
</x-layouts.base>
