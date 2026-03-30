@props(['variant' => 'double', 'text', 'bg'])

@php
    $items = array_fill(0, 24, $text);
@endphp

@if ($variant === 'line')
    <div class="relative w-full overflow-hidden bg-charm-brown-600 py-2">
        <div class="whitespace-nowrap">
            <div class="inline-flex items-center gap-5 will-change-transform" id="t-line">
                @foreach ($items as $item)
                    <span class="font-[Oswald] text-charm-cream-200 capitalize font-light italic">
                        {{ $item }}
                    </span>
                    <img src="{{ Vite::asset('resources/images/icons/logo-light.svg') }}" class="size-5" alt="">
                @endforeach
            </div>
        </div>
    </div>
@else
    <div {{ $attributes->class('relative z-10 w-full -my-10') }}>
        <div class="absolute inset-0 bg-linear-to-b {{ $bg }}"></div>

        <div class="relative">
            <div class="whitespace-nowrap -rotate-3 bg-charm-cream-900 py-1 drop-shadow-lg">
                <div class="inline-flex items-center gap-5 will-change-transform" id="t1">
                    @foreach ($items as $item)
                        <span
                            class="font-[Oswald] text-charm-cream-100 capitalize text-lg font-light">{{ $item }}</span>
                        <span class="size-2 bg-charm-cream-400 rounded-full"></span>
                    @endforeach
                </div>
            </div>

            <div class="whitespace-nowrap rotate-3 bg-charm-brown-500 py-1 drop-shadow-lg">
                <div class="inline-flex items-center gap-5 will-change-transform" id="t2">
                    @foreach ($items as $item)
                        <span class="font-[Oswald] text-charm-cream-100 capitalize text-lg font-light">
                            {{ env('APP_NAME') }} - Hair Style Shop
                        </span>
                        <img src="{{ Vite::asset('resources/images/icons/logo-light.svg') }}" class="size-5"
                            alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif

<script>
    function marquee(track, speed = 0.6) {
        const clone = track.cloneNode(true);
        while (clone.children.length) track.appendChild(clone.children[0]);

        let x = 0;
        const half = () => track.scrollWidth / 2;

        function loop() {
            x -= speed;
            if (x <= -half()) x += half();
            track.style.transform = `translateX(${x}px)`;
            requestAnimationFrame(loop);
        }
        loop();
    }

    const t1 = document.getElementById("t1");
    if (t1) marquee(t1, 0.9);

    const t2 = document.getElementById("t2");
    if (t2) marquee(t2, 0.5);

    const tLine = document.getElementById("t-line");
    if (tLine) marquee(tLine, 0.7);
</script>
