@props(['caption'])

<div
    class="flex gap-x-2.5 lg:gap-x-5 border-b border-black/20 last:border-0 border-dashed py-1.5 lg:py-3.5 last:pb-0 first:pt-0">

    @isset($caption)
        <div class="lg:text-lg text-zinc-200 invert-30 font-[Boldonse] font-bold">{{ $caption }}</div>
    @endisset

    <div class="text-lg lg:text-xl font-[Oswald] lg:stracking-wide">{{ $slot }}</div>
</div>
