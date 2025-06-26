@props(['image', 'link' => '#', 'title' => '', 'caption' => ''])

<div
    class="relative group overflow-hidden border border-charm-dark-300 shadow-lg transition-all duration-500 ease-in-out w-full lg:w-1/8 hover:lg:w-1/2 h-50 lg:h-full">

    <!-- Зображення -->
    <img src="{{ $image }}" alt="{{ $title }}" class="absolute inset-0 size-full object-cover" />

    <!-- Фіксований затемнений фон -->
    <div
        class="hidde lg:block absolute top-0 left-0 size-full bg-black/60 z-10 mask-t-from-25% lg:opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
    </div>

    <!-- Вертикальний заголовок -->
    <div
        class="hidden lg:flex absolute inset-0 z-20 justify-center items-center text-center text-white uppercase text-2xl lg:text-3xl drop-shadow-lg lg:[writing-mode:vertical-lr] group-hover:-translate-x-full duration-700 transition-transform ease-out">
        {{ $title }}
    </div>

    <!-- Контент (текст + кнопка) -->
    <div
        class="absolute inset-0 size-full z-30 flex flex-col justify-center px-10 lg:opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-150 ease-out">

        <h3
            class="text-charm-cream-100 font-[Oswald] text-2xl lg:text-3xl uppercase mb-4 lg:opacity-0 lg:-translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 delay-500 ease-in-out">
            {{ $title }}
        </h3>

        <p
            class="text-charm-cream-300 font-[Lora] text-base lg:text-lg mb-6 scale-0 group-hover:scale-100 transition-transform duration-500 delay-500 ease-in-out w-full max-w-sm">
            {{ $caption }}
        </p>

        <a href="{{ $link }}"
            class="inline-block rounded-full bg-white px-5 py-2.5 font-medium text-black opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-700 ease-out me-auto">
            Open
        </a>
    </div>

    <!-- Іконка (мобільна) -->
    <span class="lg:hidden absolute bottom-2 left-1/2 -translate-x-1/2 z-40">
        <x-lucide-chevron-down class="size-8 stroke-charm-cream-200" stroke-width="1.5" />
    </span>
</div>
