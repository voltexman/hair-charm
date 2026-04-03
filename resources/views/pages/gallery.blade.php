<?php
use function Laravel\Folio\{name, render};
use App\Models\Page;
name('gallery');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', 'photos')->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->title" :description="$page->description">
    <x-slot:header>
        <x-page-header image="gallery-header">
            <x-slot:title>Gallery</x-slot>
        </x-page-header>
    </x-slot:header>

    <x-section class="bg-charm-cream-100 min-h-screen">
        <div class="max-w-xl mx-auto">
            <x-alert icon="frown">
                <x-slot:title>No photos yet</x-slot>
                <x-slot:message>We are working on it and will add photos soon. Thank you for your patience!</x-slot>
            </x-alert>
        </div>
    </x-section>
</x-layouts.base>
