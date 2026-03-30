@props(['product'])

<div class="bg-charm-cream-300 flex flex-col shadow-lg shadow-charm-brown-100/50 border border-charm-cream-500 relative">
    <button type="button" aria-label="open full product image"
        class="absolute top-2 right-2 p-2 lg:p-1.5 bg-charm-cream-100/60 backdrop-blur-xs rounded-md cursor-pointer">
        <x-lucide-eye class="size-5 lg:size-4 stroke-black " />
    </button>
    <img src="{{ $product->getFirstMediaUrl('product') }}" class="object-cover h-40 w-full" alt="">
    <div class="p-4 xl:px-8">
        <div class="mb-5 text-center font-[Oswald] drop-shadow-lg text-charm-dark-400 block font-semibold text-lg/5">
            {{ $product->name }}
        </div>

        @isset($product->options)
            @foreach ($product->options as $option)
                <div class="flex justify-between border-b border-charm-cream-600/70 border-dashed last:border-0 group">
                    <div class="font-[Oswald] group-hover:scale-115 transition-transform duration300">
                        <span class="">{{ $option['length'] }}</span>
                        <span class="text-charm-dark-200 text-sm">inch</span>
                    </div>
                    <div class="font-[Oswald] group-hover:scale-115 transition-transform duration300">
                        <span class="text-charm-dark-200 text-sm">$</span>
                        <span class="">{{ $option['price'] }}</span>
                    </div>
                    <div class="font-[Oswald] group-hover:scale-115 transition-transform duration300">
                        <span class="">{{ $option['weight'] }}</span>
                        <span class="text-charm-dark-200 text-sm">gr</span>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
</div>
