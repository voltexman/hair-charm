@props(['category', 'index'])

<div {{ $attributes->class('relative bg-[image:var(--bg-image)] bg-center bg-no-repeat bg-cover flex justify-center items-center transition-all duration-300 group overflow-hidden group-data-[variant=section]:border-b group-data-[variant=sidebar]:border-b md:group-data-[variant=section]:border-e border-charm-dark-400 last:border-b-0 md:last:border-e-0 shadow-lg shadow-black') }}
    @click="setActive({{ $index }})"
    :class="[
        // Базові класи для анімації та поведінки flex
        'flex transition-all duration-500 ease-in-out overflow-hidden h-full',
    
        // --- ЛОГІКА ДЛЯ SECTION (Горизонтальне розкриття на десктопі) ---
        'group-data-[variant=section]:flex-col md:group-data-[variant=section]:flex-row',
        isActive({{ $index }}) ?
        'group-data-[variant=section]:md:w-full group-data-[variant=section]:h-[500px] md:group-data-[variant=section]:h-full' :
        'group-data-[variant=section]:md:w-1/8 group-data-[variant=section]:h-32 md:group-data-[variant=section]:h-full',
    
        // --- ЛОГІКА ДЛЯ SIDEBAR (Тільки вертикальне розкриття) ---
        'group-data-[variant=sidebar]:flex-col group-data-[variant=sidebar]:w-full',
        isActive({{ $index }}) ?
        'group-data-[variant=sidebar]:flex-1 group-data-[variant=sidebar]:min-h-[300px]' :
        'group-data-[variant=sidebar]:h-20 group-data-[variant=sidebar]:md:h-24',
    
        // Ефект затінення для неактивних
        (active !== null && !isActive({{ $index }})) && 'grayscale-60 opacity-80'
    ]"
    style="--bg-image: image-set(
        url('{{ Vite::asset("resources/images/main-$category->value.webp") }}') type('image/webp'),
        url('{{ Vite::asset("resources/images/main-$category->value.png") }}') type('image/png')
    );">
    {{-- Overlay --}}
    <div class="absolute inset-0 z-10 pointer-events-none transition-colors duration-500"
        :class="isActive({{ $index }}) ? 'bg-charm-brown-900/50' : 'bg-charm-brown-900/30'"></div>

    <div class="max-w-md self-center absolute z-20 flex flex-col px-8" x-cloak x-show="!isActive({{ $index }})">
        <div
            class="md:group-data-[variant=section]:[writing-mode:vertical-lr] drop-shadow-xl text-charm-cream-200 font-[Oswald] text-2xl">
            {{ $category->getLabel() }}
        </div>
    </div>

    <div class="max-w-md self-center absolute z-20 flex flex-col px-8" x-cloak x-show="isActive({{ $index }})"
        x-transition>
        <div class="font-[Oswald] text-3xl text-charm-cream-100">
            {{ $category->getLabel() }}
        </div>

        <div class="font-[Poppins] text-base text-charm-cream-100/80 mt-1.5 line-clamp-4">
            {{ $category->description() }}
        </div>

        <x-button variant="light" link="{{ $category->link() }}" class="mt-5 w-fit" aria-label="Details">
            <span class="me-1.5">Details</span>
            <x-lucide-move-right class="size-4" stroke-width="1.5" />
        </x-button>
    </div>

    {{-- mobile toggle --}}
    <button type="button"
        class="absolute bottom-0.5 left-1/2 -translate-x-1/2 z-20 md:hidden flex flex-col items-center">
        <x-lucide-chevron-down class="size-5 stroke-charm-cream-100 transition-transform"
            x-bind:class="{ 'rotate-180': isActive({{ $index }}) }" stroke-width="1.5" />
    </button>
</div>
