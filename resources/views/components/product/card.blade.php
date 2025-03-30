@props(['product'])

<div class="flex flex-col shadow-lg shadow-charm-brown-100/50 border border-charm-cream-500">
    <img src="{{ $product->getFirstMediaUrl('product') }}" class="object-cover size-full" alt="">
    <div class="bg-charm-cream-300 px-10 py-5 md:p-5 lg:px-10">
        <div class="mb-2.5 text-center">
            <span class="font-[Oswald] text-charm-dark-600 leading-5 block font-semibold">
                {{ $product->name }}
            </span>
        </div>

        @isset($product->options)
            @foreach ($product->options as $option)
                <div class="flex justify-between ">
                    <div class="font-[Oswald] text-charm-dark-500">
                        <span class="">{{ $option->length }}</span>
                        <span class="text-charm-dark-100">inch</span>
                    </div>
                    <div class="font-[Oswald] text-charm-dark-500">
                        <span class="text-charm-dark-100">$</span>
                        <span class="">{{ $option->price }}</span>
                    </div>
                    <div class="font-[Oswald] text-charm-dark-500">
                        <span class="">{{ $option->weight }}</span>
                        <span class="text-charm-dark-100">gr</span>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
</div>
