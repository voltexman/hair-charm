<?php
use function Laravel\Folio\{name, render};
use App\Models\Page;
name('products');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', 'products')->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->meta_title" :description="$page->meta_description" :keywords="$page->meta_keywords">
    <div>
        products page
    </div>
</x-layouts.base>
