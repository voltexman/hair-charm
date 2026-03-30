@props(['post'])

<div class="grid md:grid-cols-[auto_1fr_1fr] gap-5 group">
    <div class="flex flex-col space-y-2.5 divide-y-2 divide-charm-brown-600 fill-none me-auto">
        <span class="font-[Oswald] text-xl text-charm-brown-600">
            {{ $post->published_at->format('M') }}
        </span>
        <span class="font-[Boldonse] text-3xl text-charm-brown-800">
            {{ $post->published_at->format('d') }}
        </span>
    </div>
    <div class="overflow-hidden">
        <img src="https://picsum.photos/640/480"
            class="w-full h-50 md:h-80 object-cover group-hover:scale-125 group-hover:rotate-6 transition-transform duration-300"
            alt="">
    </div>
    <div class="flex flex-col gap-5">
        <a href="#"
            class="font-[Oswald] text-2xl line-clamp-1 hover:text-charm-brown-500 transition-colors duration-300">
            {{ $post->title }}
        </a>
        <div class="font-[Poppins] text-charm-dark-300 line-clamp-5">
            {{ \Illuminate\Support\Str::limit($post->content, 350) }}
        </div>
        <x-button class="me-auto">More...</x-button>
    </div>
</div>
