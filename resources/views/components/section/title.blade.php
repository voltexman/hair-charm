@props(['first', 'last', 'tag' => 'div'])

<{{ $tag }}
    {{ $attributes->class('font-[Lora] text-4xl/9 md:text-5xl/12 relative z-10 font-light text-balance box-title') }}>
    @isset($first)
        <span {{ $first->attributes->class('font-[Boldonse] text-xl md:text-3xl font-semibold') }}>
            {{ $first }}
        </span>
    @endisset

    {{ $slot }}

    @isset($last)
        <span {{ $last->attributes->class('font-[Pacifico] md:text-4xl inline-block box-title-last-word') }}>
            {{ $last }}
        </span>
    @endisset
    </{{ $tag }}>
