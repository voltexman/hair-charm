<?php
use function Laravel\Folio\{name, render};
use App\Models\Page;
name('wholesale');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', 'wholesale')->firstOrFail(),
    ]),
);
?>

<x-layouts.base :title="$page->meta_title" :description="$page->meta_description" :keywords="$page->meta_keywords">
    <div>
        wholesale page
    </div>
</x-layouts.base>
