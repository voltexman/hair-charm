<?php
use function Livewire\Volt\{state, computed};
use function Laravel\Folio\{name, render};
use Illuminate\Support\Str;
use App\Models\Page;
use App\Models\Post;

name('posts');

render(
    fn($view) => $view->with([
        'page' => Page::where('slug', 'posts')->firstOrFail(),
    ]),
);

state(['search' => '']);

$posts = computed(function () {
    return Post::query()
        ->where('is_published', true)
        ->latest('updated_at')
        ->when($this->search, function ($query) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')->orWhere('content', 'like', '%' . $this->search . '%');
            });
        })
        ->get();
});
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
            @volt
                <div>
                    <div class="mb-10">
                        <div class="relative max-w-2xl mx-auto">
                            <x-form.input type="text" wire:model.live.debounce.400ms="search"
                                placeholder="Search posts by title or content..." />
                        </div>

                        @if ($search)
                            <p class="text-center text-sm text-charm-dark-300 mt-3">
                                nothing found for: <span class="font-medium">"{{ $search }}"</span>
                            </p>
                        @endif
                    </div>

                    @if ($this->posts->isEmpty())
                        <x-alert icon="frown" class="max-w-lg mx-auto">
                            <x-slot:title>Nothing found</x-slot>
                            <x-slot:message>
                                no posts found matching your search criteria. Try adjusting your search or check back later
                                for new content.
                            </x-slot>
                        </x-alert>
                    @else
                        <div class="space-y-10">
                            @foreach ($this->posts as $post)
                                <div wire:key="post-{{ $post->id }}"
                                    class="grid md:grid-cols-[auto_1fr_1fr] gap-6 group">
                                    <div class="overflow-hidden rounded-xl">
                                        <img src="{{ $post->getFirstMediaUrl('posts') }}"
                                            class="w-full h-60 md:h-80 object-cover group-hover:scale-110 group-hover:rotate-3 transition-transform duration-500"
                                            alt="{{ $post->title }}">
                                    </div>

                                    <div class="flex flex-col gap-5">
                                        <a href="{{ route('post.show', ['post' => $post->slug]) }}"
                                            class="font-[Oswald] text-2xl leading-tight line-clamp-2 hover:text-charm-brown-500 transition-colors duration-300">
                                            {{ $post->title }}
                                        </a>

                                        <div class="font-[Poppins] text-charm-dark-300 line-clamp-5">
                                            {{ Str::limit(strip_tags($post->content ?? ''), 340) }}
                                        </div>

                                        <x-button class="me-auto" href="{{ route('post.show', ['post' => $post->slug]) }}">
                                            Читати далі →
                                        </x-button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endvolt
        </div>
    </x-section>
</x-layouts.base>
