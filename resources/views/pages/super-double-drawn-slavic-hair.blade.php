<?php
use function Laravel\Folio\{name, render};
use App\Enums\ProductCategory;
use App\Models\Page;
name('products.super-double-drawn-slavic-hair');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', ProductCategory::SUPER_DOUBLE_DRAWN_SLAVIC_HAIR)->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->meta_title" :description="$page->meta_description" :keywords="$page->meta_keywords">
    <x-slot:header>
        <x-page-header :image="ProductCategory::SUPER_DOUBLE_DRAWN_SLAVIC_HAIR->value">
            <x-slot:title>Super double drawn<br>slavic hair</x-slot>
            <x-slot:caption>
                {{ env('APP_NAME') }} company offers for sale a special product - Slavic virgin double drawn hair
                extensions.
            </x-slot>
        </x-page-header>
    </x-slot:header>

    <x-section class="bg-charm-cream-100">
        <div class="max-w-2xl mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Guaranteed</x-slot>
                Natural<br>Slavic <x-slot:last><x-marker color="black">Hair</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center">
                Slavic not dyed virgin hair is appreciated all over the world. They are used in extension and in wigs.
                This type is high quality, with long lifetime, fine structure and silkiness. All extension masters love
                such strands. Such type of bulks are popular for customers from different countries. It is rather
                difficult to obtain such strands, as many sellers try to sell fakes from Asian hair, giving them out for
                natural Slavic hair. Nowadays it’s hard to find good seller who would guarantee 100% naturalness of
                their goods. If you are looking for reliable seller, then our company Hair Charm is at your service!
            </x-section.content>
        </div>
    </x-section>

    <x-section.marquee :text="ProductCategory::SUPER_DOUBLE_DRAWN_SLAVIC_HAIR->getLabel()" bg="from-charm-cream-100 to-charm-cream-200" />

    <x-section class="bg-charm-cream-200">
        <div class="max-w-2xl mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>Double</x-slot><br>
                drawn <x-slot:last><x-marker color="black">hair</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center">
                We present you unique double drawn hair. Natural Russian strands are with very dense ends! To find such
                bulk is very difficult, from 20 different haircuts, only 1 can have a density of tips the same as nearly
                to follicle. Resulting material is additionally combed out to get rid of short hairs.
            </x-section.content>
        </div>
    </x-section>

    <section class="bg-charm-cream-100 px-8 py-20 lg:px-0 md:py-30">
        <div class="max-w-2xl mx-auto grid md:grid-cols-2 gap-y-5 gap-x-10">
            <div class="font-[Boldonse] text-2xl md:text-6xl/22 md:text-end split-words">
                Our<br class="hidden md:block"> Double <br class="hidden md:block">Drawn
            </div>
            <x-list variant="dark">
                <x-list.item>
                    Selected not dyed hairs with very dense ends
                </x-list.item>
                <x-list.item>
                    <span class="font-[Oswald]">90%</span> of hairs with same length, without presence of short hairs
                </x-list.item>
                <x-list.item>
                    One cut from one head. It’s a guarantee that there are no Asian or colored hairs in bulks
                </x-list.item>
                <x-list.item>
                    3 not dyed colors: <span class="font-[Oswald]">7/0, 6/0, 5/0</span>
                </x-list.item>
                <x-list.item>
                    Length: <span class="font-[Oswald]">14inch, 16inch, 18inch, 20inch</span>
                </x-list.item>
            </x-list>
        </div>
    </section>

    <x-section.categories />

    <section class="bg-charm-cream-200 px-8 py-20 lg:px-0 md:py-30">
        <div class="max-w-2xl mx-auto space-y-5">
            <x-section.title class="md:text-center">
                <x-slot:first>The best</x-slot><br>
                Slavic <x-slot:last><x-marker color="black">haircuts</x-marker></x-slot>
            </x-section.title>
            <x-section.content class="md:text-center">
                Our company is engaged in buying up natural curls all over Ukraine. We carefully select goods, conduct a
                detailed assessment and leave only the best products. All hair is processed, hand-picked and goes on
                sale in perfect condition. Such strands can be painted and curled. They don’t get tangled, are easy to
                comb, suitable for multiple build-up and look as natural as possible! We work all over the world, send
                to any corner of globe. Our company values reputation, so do not doubt of naturalness of strands.
            </x-section.content>
        </div>
    </section>
</x-layouts.base>
