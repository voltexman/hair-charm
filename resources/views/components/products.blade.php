@if ($products->isEmpty())
    <x-alert {{ $attributes->class('max-w-lg') }} icon="annoyed">
        <x-slot:title>No products</x-slot>
        <x-slot:message>Lorem ipsum dolor sit amet consectetur adipisicing elit.</x-slot>
    </x-alert>
@else
    <div {{ $attributes->class('grid md:grid-cols-3 lg:grid-cols-4 gap-5 xl:gap-10') }}>
        @foreach ($products as $product)
            <x-product.card :product="$product" />
        @endforeach
    </div>
@endif
