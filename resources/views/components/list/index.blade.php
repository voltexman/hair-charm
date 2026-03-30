@props(['caption'])

<div {{ $attributes->class('') }}>
    @isset($caption)
        <div class="lg:text-lg font-[Boldonse] mb-5 uppercase tracking-wide">
            {{ $caption }}
        </div>
    @endisset

    <ul data-variant="{{ $attributes->get('variant') }}" data-size="{{ $attributes->get('size') }}" class="group">
        {{ $slot }}
    </ul>
</div>
