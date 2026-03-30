<x-section {{ $attributes->class('relative bg-bottom bg-no-repeat bg-cover') }}
    style="background-image: url('{{ Vite::asset('resources/images/bg-section-top.png') }}')">
    <div class="max-w-xl lg:max-w-2xl mx-auto">
        <div class="max-w-lg font-[Oswald] text-xl md:text-3xl uppercase text-balance">
            {{ $slot }}
        </div>
    </div>
</x-section>
