<?php
use function Laravel\Folio\{name, render};
use App\Enums\ProductCategory;
use App\Models\Page;
name('products.wefts');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', ProductCategory::WEFTS)->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->meta_title" :description="$page->meta_description" :robots="$page->robots">
    <x-slot:header>
        <x-page-header :image="ProductCategory::WEFTS->value">
            <x-slot:title>Wefts</x-slot>
            <x-slot:caption>One of the most popular methods is Russian hand tied wefts hair extensions.</x-slot>
        </x-page-header>
    </x-slot:header>

    <x-section.header class="bg-charm-cream-100">
        Our company has a great experience in manufacturing similar products, which are deservedly respected by all
        our regular customers.
    </x-section.header>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl lg:max-w-3xl xl:max--4xl mx-auto grid gap-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Why</x-slot> Our Hair <br> Stands
                <x-slot:last><x-marker color="black">Out?</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center section-content">
                Please note our products favourably differ from other competitors in that we use natural virgin Slavic
                hair
                purchased directly from donors in <span class="font-semibold">Ukraine</span> and
                <span class="font-semibold">Russian</span>. In addition, all haircuts that are used in
                <x-marker variant="font">{{ env('APP_NAME') }}</x-marker> company for production are with dense tips.
                Such bulks are considered to be the most qualitative and healthy. We do not issue non-standard goods as
                elite <span class="text-charm-dark-400 italic">
                    (for example, giving out Asian hair for a true Slavic hair)</span>,
                so the quality of the wefts from <x-marker variant="font">{{ env('APP_NAME') }}</x-marker>
                will be the reference quality and will please you for a long time. After all, Slavic strands have
                wonderful
                appearance, an ideal structure and ease of care.
            </x-section.content>
        </div>
    </x-section>

    <section class="relative bg-cover bg-center bg-no-repeat px-8 py-20 lg:px-0 md:py-30"
        style="background-image: url('{{ Vite::asset('resources/images/wefts-without-numbers.png') }}');">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative max-w-xl lg:max-w-4xl mx-auto grid lg:grid-cols-2 gap-10">
            <div>
                <div
                    class="font-[Boldonse] text-2xl md:text-3xl lg:text-4xl/12 text-nowrap lg:text-end text-white split-words">
                    What do you get <br> by contacting us?
                </div>
                <x-button variant="light" class="w-fit lg:ms-auto mt-5">Open Colors</x-button>
            </div>

            <x-list variant="light">
                <x-list.item>
                    Products will look great, because they are produced only from natural Russian double-drawn bundles,
                    which have the greatest value
                </x-list.item>
                <x-list.item>
                    During manufacturing goods we don't use silicone and other components harmful to hair tresses
                </x-list.item>
                <x-list.item>
                    You can have: 11 inch wide and 14 to 28inch long, three types, depending on your preferences
                </x-list.item>
                <x-list.item>
                    Advantage is the hair does not shed
                </x-list.item>
            </x-list>
        </div>
    </section>

    <section class="grid md:grid-cols-2 xl:grid-cols-3 chess-board">
        <div class="md:col-span-1 md:order-1 chess-board-item">
            <img src="https://www.hair-charm.com/images/HAIR/wefts/1.jpg" class="object-cover size-full" alt="">
        </div>
        <div
            class="md:col-span-1 md:order-2 bg-charm-cream-100 px-10 py-20 lg:p-20 flex justify-center items-center chess-board-item">
            <div class="max-w-md font-[Oswald] font-bold uppercase text-2xl">
                Hand tied wefts are used in the production of wigs and a variety of extension methods. They can be
                divided into three types: thick, standard, micro.
            </div>
        </div>
        <div class="md:order-4 xl:order-3 chess-board-item">
            <img src="https://www.hair-charm.com/images/HAIR/wefts/5.jpg" class="object-cover size-full" alt="">
        </div>
        <div class="md:order-3 bg-charm-cream-200 flex-col px-10 py-10 justify-center items-center chess-board-item">
            <x-section.company />
        </div>
        <div class="md:order-5 chess-board-item">
            <img src="https://www.hair-charm.com/images/HAIR/wefts/2.jpg" class="object-cover size-full" alt="">
        </div>
        <div class="md:order-6 bg-charm-brown-600 flex justify-center items-center px-8 py-20 lg:p-20 chess-board-item">
            <div class="max-w-md font-[Oswald] tracking-wider text-charm-cream-200 text-2xl">
                <span class="uppercase block text-center font-black animate-pulse">Warning!</span>
                <span class="mt-5 block">
                    Unlike machine weft, hand tied cannot be cut because the hair is twisted to one whole thread.
                </span>
            </div>
        </div>
    </section>

    <x-section class="bg-charm-cream-100">
        <div class="max-w-6xl mx-auto flex flex-col">
            <div class="font-[Boldonse] text-2xl text-charm-dark-300"><x-marker>Thick</x-marker> wefts</div>
            <div class="max-w-xl font-[Lora] text-lg leading-6 text-charm-dark-200 mt-2.5 font-medium italic">
                This type is characterized by an even greater density and thickness. It weights 50 grams. It is
                suitable,
                mainly, only for hair extensions. This product is ordered from us, mainly, by customers from the UK,
                where
                such product is extremely popular.
            </div>
            <x-products class="mt-5" :category="ProductCategory::WEFTS" type="Thick wefts" />
        </div>
    </x-section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-6xl mx-auto flex flex-col">
            <div class="font-[Boldonse] text-2xl text-charm-dark-300"><x-marker>Standard</x-marker> wefts</div>
            <div class="max-w-xl font-[Lora] text-lg leading-6 text-charm-dark-200 mt-2.5 font-medium italic">
                The next type of wefts can be called a neutral variant with weight 25 grams. They have good density, but
                they will not be rough at the base. This is a universal product that can be used in production or in
                extensions.
            </div>
            <x-products class="mt-5" :category="ProductCategory::WEFTS" type="Standard wefts" />
        </div>
    </x-section>

    <x-section class="bg-charm-cream-100">
        <div class="max-w-6xl mx-auto flex flex-col">
            <div class="font-[Boldonse] text-2xl text-charm-dark-300"><x-marker>Micro</x-marker> wefts</div>
            <div class="max-w-xl font-[Lora] text-lg leading-6 text-charm-dark-200 mt-2.5 font-medium italic">
                For the production of hairpieces and wigs, the most acceptable options are weight of 10 grams. They
                differ in their fineness and are ideal for the production of various products. Most of our partners from
                Israel make wholesale orders for just such type of goods.
            </div>
            <x-products class="mt-5" :category="ProductCategory::WEFTS" type="Micro wefts" />
        </div>
    </x-section>

    <x-section.categories />

    <div class="grid md:grid-cols-2">
        <section class="bg-charm-dark-400 py-20 md:py-30">
            <div class="max-w-lg ms-auto grid gap-5 md:gap-10 px-8">
                <x-section.title class="md:text-end text-charm-cream-100!">
                    <x-slot:first>Benefits</x-slot>
                    of Our <br> Hand-Tied
                    <x-slot:last><x-marker color="light">Wefts</x-marker></x-slot:last>
                </x-section.title>
                <x-section.content class="text-charm-cream-200! md:text-end">
                    Our handtied wefts are expertly made by us are very practical and do not require special care. They
                    can
                    easily tolerate heat, and you can create any styling with a hairdryer and a curling iron. Another
                    advantage of using a natural material in manufacture is the ease of coloring. As well as their own
                    curls, wefts can be dyed.
                </x-section.content>
            </div>
        </section>
        <section class="bg-charm-cream-200 py-20 md:py-30">
            <div class="max-w-lg me-auto grid gap-5 md:gap-10 px-8">
                <x-section.title>
                    <x-slot:first>Our</x-slot>
                    Experience <br> and
                    <x-slot:last><x-marker color="black">Production</x-marker></x-slot>
                </x-section.title>
                <x-section.content>
                    We have been working in this field for a long time, therefore we have the necessary experience and
                    knowledge necessary for producing hand-tied wefts. Our own workshop and high-class equipment allow
                    us to
                    cope with large volumes of orders. Also we offer the highest quality of final products.
                </x-section.content>
        </section>
    </div>

    <x-section class="bg-charm-cream-100">
        <div class="max-w-xl mx-auto grid space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Product</x-slot>
                Variety and <br> Custom
                <x-slot:last><x-marker color="black">Matching</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center">
                It does not matter which initial hair structure you have, we are able to choose exactly that variant
                that will organically complement your own hair and be natural at the same time. With us you will find
                products of any shade and length, therefore using hand-made wefts from the company
                <x-marker variant="font">{{ env('APP_NAME') }}</x-marker> your hairdo acquires a natural volume, will
                also look natural and attractive.
            </x-section.content>
        </div>
    </x-section>

    <x-section.marquee :text="ProductCategory::WEFTS->getLabel()" bg="from-charm-cream-100 to-charm-cream-200" />

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Why</x-slot>
                Choose <br> Our
                <x-slot:last><x-marker color="black">Company?</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center">
                As you can see, <x-marker variant="font">{{ env('APP_NAME') }}</x-marker> company's products meet the
                highest requirements and will please you for a long time. For additional advice and ordering of the
                goods, write to us on <span class="font-semibold">Viber</span> or
                <span class="font-semibold">WhatsApp</span> or you can contact with us by e-mail:
                <span class="font-semibold">
                    <x-lucide-mail class="size-4 inline-flex -mt-0.5 me-0.5" />infohaircharm@gmail.com</span>.
                Contacting us in the showroom, you will not have any difficulties with the terms of order fulfillment
                and
                you can always count on the perfect quality of the goods purchased!
            </x-section.content>
        </div>
    </x-section>
</x-layouts.base>
@vite('resources/js/pages/wefts.js')
