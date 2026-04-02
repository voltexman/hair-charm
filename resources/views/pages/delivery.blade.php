<?php
use function Laravel\Folio\{name, render};
use App\Models\Page;
name('delivery');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', 'delivery')->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->meta_title" :description="$page->meta_description" :keywords="$page->meta_keywords">
    <div>
        delivery page
    </div>
</x-layouts.base>
