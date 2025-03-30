@props(['caption'])

<div>
    @isset($caption)
        <div class="lg:text-lg font-[Boldonse] mb-5 uppercase tracking-wide">
            {{ $caption }}
        </div>
    @endisset

    <div>{{ $slot }}</div>
</div>
