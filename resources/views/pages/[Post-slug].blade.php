<?php
use function Laravel\Folio\{name};
use Illuminate\Support\Str;
use App\Models\Post;

name('post.show');
?>

<x-layouts.base :title="$post->title" :description="$post->meta_description ?? Str::limit(strip_tags($post->content), 160)">

    <x-slot:header>
        <x-page-header image="blog-header">
            <x-slot:title>{{ $post->title }}</x-slot:title>
        </x-page-header>
    </x-slot:header>

    <x-section class="bg-charm-cream-100 py-12">
        <div class="max-w-4xl mx-auto px-4">

            <!-- Головне зображення -->
            @if ($post->hasMedia('posts'))
                <div class="mb-10 overflow-hidden rounded-3xl">
                    <img src="{{ $post->getFirstMediaUrl('posts') }}" alt="{{ $post->title }}"
                        class="w-full h-auto object-cover">
                </div>
            @endif

            <!-- Дата публікації -->
            <div class="flex items-center gap-4 text-charm-brown-600 mb-8">
                <span class="font-[Oswald] text-lg">
                    {{ $post->published_at?->format('d F Y') }}
                </span>
                @if (!$post->is_published)
                    <span class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-medium rounded-full">Чернетка</span>
                @endif
            </div>

            <!-- Контент статті -->
            <div class="prose prose-lg max-w-none font-[Poppins] text-charm-dark-300">
                {!! $post->content !!}
            </div>

            <!-- Додаткова інформація / мета -->
            <div class="mt-16 pt-10 border-t border-charm-brown-200">
                @if ($post->meta_description)
                    <p class="text-sm text-charm-dark-400 italic">
                        {{ $post->meta_description }}
                    </p>
                @endif
            </div>

        </div>
    </x-section>
</x-layouts.base>
