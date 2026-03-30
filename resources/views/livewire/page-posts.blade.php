<?php

use App\Models\Post;
use function Livewire\Volt\{computed, state};

state(['search'])
    ->session()
    ->url();

$posts = computed(function () {
    // if (empty($this->search)) {
    //     return collect([]);
    // }

    return Post::query()
        ->where('title', 'like', "%{$this->search}%")
        ->orWhere('content', 'like', "%{$this->search}%")
        ->latest('updated_at')
        ->get();
});
?>

<div>
    <div class="mb-10 flex items-center">
        <x-form.input x-on:input.debounce.500ms="$wire.set('search', $event.target.value)" variant="soft" icon="search"
            x-bind:value="$wire.search" placeholder="Search articles..." class="max-w-xl" />
    </div>

    @if ($this->posts->isEmpty())
        @if (empty($this->search))
            <x-alert icon="frown" class="max-w-lg mx-auto">
                <x-slot:title>No posts</x-slot>
                <x-slot:message>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores eum necessitatibus mollitia.
                </x-slot>
            </x-alert>
        @else
            <x-alert icon="search-x" class="max-w-lg mx-auto">
                <x-slot:title>No posts found</x-slot>
                <x-slot:message>
                    No articles were found for your search:
                    <span class="font-semibold text-charm-brown-500">“{{ $this->search }}”</span>.
                </x-slot>
            </x-alert>
        @endif
    @else
        <div class="space-y-10">
            @foreach ($this->posts as $post)
                <x-post.card :$post />
            @endforeach
        </div>
    @endif
</div>
