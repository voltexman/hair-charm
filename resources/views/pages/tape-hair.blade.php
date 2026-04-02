<?php
use function Laravel\Folio\{name, render};
use App\Enums\ProductCategory;
use App\Models\Page;
name('products.tape-hair');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', ProductCategory::TAPE_HAIR)->firstOrFail(),
    ]),
);
?>


<x-layouts.base :title="$page->meta_title" :description="$page->meta_description" :robots="$page->robots">
    <x-slot:header>
        <x-page-header :image="ProductCategory::TAPE_HAIR->value">
            <x-slot:title>Tape Hair</x-slot>
            <x-slot:caption>Tape in hair extensions is one of the most popular methods of extensions.</x-slot>
        </x-page-header>
    </x-slot:header>

    <x-section.header class="bg-charm-cream-100 font-medium!">
        <div
            class="font-[Lora] text-3xl md:text-4xl text-charm-gold drop-shadow-lg uppercase grid grid-cols-[1fr_auto_1fr] items-center text-center mb-5 md:gap-5">
            <span
                class="block h-px min-w-15 w-full bg-linear-to-r from-transparent via-charm-gold/70 to-charm-gold"></span>
            <span class="block">Russian hair Tape</span>
            <span
                class="block h-px min-w-15 w-full bg-linear-to-l from-transparent via-charm-gold/70 to-charm-gold"></span>
        </div>

        <div></div>
        <div class="mb-10 font-[Lora] text-lg capitalize">
            Russian hair Tape – is, <span class="italic">first of all</span>, a
            <span class="font-bold">wonderful appearance</span>, an
            <span class="font-bold text-charm-brown-700">ideal structure</span> and
            <span class="font-bold">ease of care</span>. Such products
            <span class="italic">allow you to</span> give your hair
            <span class="font-bold text-charm-brown-700">the right volume quickly</span>, as well as
            <span class="font-bold">increase the length</span> of hair.
        </div>
        <div class="mdmax-w-lg font-[Lora] text-lg md:textxl font-semibold uppercase text-charm-brown-700">
            <span class="italic">Our company uses only</span>
            <span class="font-bold"><span class="uppercase text-charm-brown-700">Virgin Slavic</span> bundles</span>
            <span class="italic">for manufacturing</span>, so the result will
            <span class="font-bold">exceed all your expectations</span>!
        </div>
    </x-section.header>

    <section class="bg-charm-cream-200 px-8 py-20 lg:px-0 md:py-30 hidden">
        <div class="max-w-xl lg:max-w-4xl mx-auto">
            <div class="font-[Lora] tracking-wide text-2xl lg:text-3xl text-end text-charm-dark-400">
                <span class="italic">Our company uses only</span>
                <span class="font-bold"><span class="uppercase text-charm-brown-400">Virgin Slavic</span> bundles</span>
                <span class="italic">for manufacturing</span>, so the result will
                <span class="font-bold">exceed all your expectations</span>!
            </div>
        </div>
    </section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-xl md:max-w-4xl mx-auto grid md:grid-cols-3 gap-10">
            <div class="font-[Boldonse] text-3xl/10 md:text-3xl/12 lg:text-5xl/20 text-nowrap md:text-end split-words">
                Why <br class="hidden md:block">should<br>you
                <br class="hidden md:block">choose <br> a tape<br class="hidden md:block"> hair
            </div>
            <x-list variant="dark" class="md:col-span-2">
                <x-list.item>
                    We are pleased to offer you a truly exclusive product from real Russian Virgin hair, which is
                    obtained from one donor. We are proud to use the best
                </x-list.item>
                <x-list.item>
                    Product has thick ends, which gives a thicker overall look
                </x-list.item>
                <x-list.item>
                    Silicone or other harmful substances are not used
                </x-list.item>
                <x-list.item>
                    Strands is evenly distributed and securely attached to the tape. Hair does not shed
                </x-list.item>
                <x-list.item>
                    Tape has a neat appearance, elastic and flexible, thin in thickness. Absolutely not noticeable on
                    the head and does not present any discomfort when you wear it
                </x-list.item>
                <x-list.item>
                    Available in 7 colors. Curls are Virgin so you can lighten them with bleach
                </x-list.item>
            </x-list>
        </div>
    </x-section>

    <x-section.marquee :text="ProductCategory::TAPE_HAIR->getLabel()" bg="from-charm-cream-200 to-charm-cream-100" />

    <x-section class="bg-charm-cream-100">
        <div class="md:max-w-xl mx-auto mb-20">
            <div class="font-[Lora] italic text-2xl lg:text-2xl font-semibold lg:font-medium text-center">
                What is it necessary to pay attention to when selecting hair for
                <x-marker>extensions</x-marker>? <br> We’ll try to explain you:
            </div>
        </div>
        <div class="max-w-4xl mx-auto space-y-20">
            <div class="grid md:grid-cols-3 gap-10 lg:gap-20 relative">
                <div
                    class="absolute bottom-2 right-2 md:relative order-1 text-[200px] md:text-[250px] md:rotate-90 font-[Oswald] opacity-10 self-start font-black leading-none text-charm-brown-600 box-number">
                    01
                </div>
                <div class="order-2 col-span-2 flex flex-col justify-center">
                    <div class="font-[Boldonse] text-lg lg:text-xl/8 uppercase split-words">
                        First, you need to know the origin of the material from which this product was manufactured.
                    </div>
                    <x-section.content class="mt-5">
                        The majority of tape hair is made in China and in countries of southeast Asia. Accordingly,
                        their
                        products are made from Asian raw. Russian companies purchase such products and sell them as
                        Slavic
                        hair. Be careful and do not fall for such tricks.
                        <x-marker variant="font">{{ env('APP_NAME') }}</x-marker>
                        company works directly with donors of natural Slavic tresses. We make Tape hair in our own
                        production, so you cannot doubt the top-quality of finished goods. The entire range of our tape
                        hair
                        is created exclusively from not dyed Russian strands.
                    </x-section.content>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-10 lg:gap-20 relative">
                <div
                    class="absolute bottom-2 right-2 md:relative order-2 text-[200px] md:text-[250px] md:rotate-90 font-[Oswald] opacity-10 self-start font-black leading-none text-charm-brown-600 box-number">
                    02
                </div>
                <div class="order-1 col-span-2 flex flex-col justify-center">
                    <div class="font-[Boldonse] text-lg lg:text-xl/8 uppercase split-words">
                        Second important factor is the processing of raw materials.
                    </div>
                    <x-section.content class="mt-5">
                        Unscrupulous manufacturers often use silicone, which, at first glance, gives shine and beauty to
                        curls, but after a month of wear, the silicone layer begins to wash off, wefts become brittle
                        and
                        dull. Our specialists completely exclude any harmful additives at manufactoring, therefore our
                        products have a healthy appearance and serve for a long time.
                    </x-section.content>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-10 lg:gap-20 relative">
                <div
                    class="absolute bottom-2 right-2 md:relative text-[200px] md:text-[250px] md:rotate-90 font-[Oswald] opacity-10 self-start font-black leading-none text-charm-brown-600 box-number">
                    03
                </div>
                <div class="col-span-2 flex flex-col justify-center">
                    <div class="font-[Boldonse] text-lg lg:text-xl/8 uppercase split-words">
                        Great advantage of our product is the thickness of the tape itself.
                    </div>
                    <x-section.content class="mt-5">
                        It is always minimal and for this reason is absolutely invisible on head. And also hair does not
                        leak from the tape.
                    </x-section.content>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-10 lg:gap-20 relative">
                <div
                    class="absolute bottom-2 right-2 md:relative order-2 text-[200px] md:text-[250px] md:rotate-90 font-[Oswald] opacity-10 self-start font-black leading-none text-charm-brown-600 justify-start items-start justify-items-start box-number">
                    04
                </div>
                <div class="order-1 col-span-2 flex flex-col justify-center">
                    <div class="font-[Boldonse] text-lg lg:text-xl/8 uppercase split-words">
                        Another important point when choosing tape hair is selection of the shade you need.
                    </div>
                    <x-section.content class="mt-5">
                        In our salon it's possible to find the color that will exactly match your native color.
                    </x-section.content>
                </div>
            </div>
        </div>
    </x-section>

    <x-section.categories />

    <section class="grid md:grid-cols-2 lg:grid-cols-3">
        <div class="overflow-hidden chess">
            <img src="https://www.hair-charm.com/images/HAIR/tape-hair/one.jpg.pagespeed.ce.46b790xMG_.jpg"
                class="object-cover size-full" alt="">
        </div>
        <div class="bg-charm-dark-400 p-10 flex items-center relative chess">
            <img src="{{ Vite::asset('resources/images/icons/logo-dark.svg') }}"
                class="size-[70%] drop-shadow-lg absolute top-1/2 left-1/2 -translate-1/2 z-0 opacity-5" alt="">
            <span class="font-[Oswald] text-charm-cream-100 tracking-wide text-xl lg:text-lg xl:text-2xl">
                As you can see, when buying tape hair, you need to pay attention to a few moments for the purchase
                really pleased the eye. {{ env('APP_NAME') }} company, which has been specialized in manufacture of
                various
                products for many years, is glad to offer you a truly exclusive product from the real
                <span class="font-semibold text-charm-cream-600">Virgin Slavic</span> not dyed tresses.
            </span>
        </div>
        <div class="hidden md:block lg:hidden bg-charm-cream-200 chess">
            <x-section.company />
        </div>
        <div class="overflow-hidden chess">
            <img src="https://www.hair-charm.com/images/HAIR/tape-hair/two.jpg.pagespeed.ce._v7KLPw6Kq.jpg"
                class="object-cover size-full" alt="">
        </div>
    </section>

    <x-section class="bg-charm-cream-100">
        <div class="max-w-xl mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Premium</x-slot>
                Tape Hair <br> Crafted
                <x-slot:last><x-marker color="black">for You</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center">
                The tape hair from <x-marker variant="font">{{ env('APP_NAME') }}</x-marker> have all the properties of
                quality products. Contacting us, you get tape hair from professionals in their field, who have a lot of
                experience in manufactoring such products. We always listen to the requirements of the customer, so we
                can
                execute any of your individual orders in the shortest possible time. On average, you will receive
                finished
                products in 3-4 days after ordering, and up to a week if the goods are not on stock.
            </x-section.content>
        </div>
    </x-section>

    <x-section class="bg-charm-cream-200">
        <div class="max-w-2xl mx-auto space-y-5">
            <div class="font-[Lora] text-lg font-medium md:text-center text-balance">
                View the full range of our services you can on the web-site, or by contacting us directly on
                <span class="font-black">Viber</span> or <span class="font-black">WhatsApp</span>.
                Our experienced staff will help you choose exactly that kind of tape hair, which suit you
                personally. If you are looking for high-quality service, efficiency in work and high skill of
                performers, then <x-marker variant="font">{{ env('APP_NAME') }}</x-marker> is your choice number 1!
            </div>
        </div>
    </x-section>
</x-layouts.base>

@vite('resources/js/pages/tape-hair.js')
