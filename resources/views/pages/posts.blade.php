<?php
use function Laravel\Folio\{name, render};
use App\Models\Page;
use App\Models\Post;
name('posts');
render(
    fn($view) => $view->with([
        'page' => Page::where('slug', 'posts')->firstOrFail(),
        'posts' => Post::latest('updated_at')->get(),
    ]),
);
?>

<x-layouts.base :title="$page->title" :description="$page->description">
    <x-slot:header>
        <x-page-header image="blog-header">
            <x-slot:title>Posts</x-slot>
            <x-slot:caption>Read our latest articles and updates</x-slot>
        </x-page-header>
    </x-slot:header>

    <x-section class="bg-charm-cream-100 min-h-screen">
        <div class="max-w-4xl mx-auto">
            @if ($posts->isEmpty())
                <x-alert icon="frown" class="max-w-lg mx-auto">
                    <x-slot:title>No posts</x-slot>
                    <x-slot:message>
                        We haven’t published any articles yet. Please check back later for updates and insights on hair
                        care, styling tips, and the latest trends in the industry.
                    </x-slot>
                </x-alert>
            @else
                <div class="space-y-10">
                    @foreach ($posts as $post)
                        <x-post.card :$post />
                    @endforeach
                </div>
            @endif
        </div>
    </x-section>
</x-layouts.base>
