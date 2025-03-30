@props(['image'])

<div class="h-100 bg-no-repeat bg-cover bg-center" style="background-image: url('{{ $image }}')">
    <div class="flex justify-center items-center backdrop-blur-sm bg-charm-dark-600/60 size-full">
        <div class="max-w-2xl mx-auto border-y-2 border-charm-cream-200 py-2.5">
            <h1 class="uppercase text-xl lg:text-3xl font-light text-charm-cream-200 text-center drop-shadow-lg">
                {{ $title }}
            </h1>
        </div>
    </div>
</div>
