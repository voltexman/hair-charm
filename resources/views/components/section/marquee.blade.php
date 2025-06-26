@props(['text'])

<div class="bg-charm-dark-500 marquees relative">
    <img src="{{ Vite::asset('resources/images/icons/female-hairs.svg') }}" class="size-[50%] absolute left-10 top-10"
        alt="">
    <section class="bg-charm-brown-700 text-charm-brown-100 font-[Oswald] marquee marquee--left">
        <div class="marquee--track">
            <div class="marquee--content">
                {{ $text }} * {{ $text }}
            </div>
            <div class="marquee--content" aria-hidden="true">
                {{ $text }} * {{ $text }}
            </div>
        </div>
    </section>

    <section class="bg-charm-brown800 text-charm-cream-200 font-[Oswald] marquee marquee--right">
        <div class="marquee--track reverse">
            <div class="marquee--content">
                {{ $text }} * {{ $text }}
            </div>
            <div class="marquee--content" aria-hidden="true">
                {{ $text }} * {{ $text }}
            </div>
        </div>
    </section>

    <section class="bg-charm-brown-700 text-charm-cream-300 font-[Oswald] marquee marquee--left">
        <div class="marquee--track">
            <div class="marquee--content">
                {{ $text }} * {{ $text }}
            </div>
            <div class="marquee--content" aria-hidden="true">
                {{ $text }} * {{ $text }}
            </div>
        </div>
    </section>

    <section class="bg-charm-brown900 text-charm-brown-200 font-[Oswald] marquee marquee--right">
        <div class="marquee--track reverse">
            <div class="marquee--content">
                {{ $text }} * {{ $text }}
            </div>
            <div class="marquee--content" aria-hidden="true">
                {{ $text }} * {{ $text }}
            </div>
        </div>
    </section>
</div>

<style>
    .marquees {
        display: grid;
        gap: 2rem;
        padding: 1.5rem 0;
        overflow: hidden;
    }

    .marquee {
        overflow: hidden;
        transform: rotate(-3deg);
        /* background-color: #f3bb0b; */
        /* color: #000; */
        mix-blend-mode: screen;
        height: 4.5rem;
        display: flex;
        align-items: center;
        white-space: nowrap;
        font-size: clamp(1.5rem, 4vw, 3rem);
        font-weight: bold;
        line-height: 1;
        padding: 0 1rem;
    }

    .marquee--right {
        transform: rotate(3deg);
        /* background-color: #000; */
        /* color: #f3bb0b; */
    }

    .marquee--track {
        display: flex;
        width: max-content;
        animation: scroll-left 20s linear infinite;
    }

    /* для чорних (reverse) рядів – просто інвертована анімація */
    .marquee--track.reverse {
        animation: scroll-left 20s linear infinite reverse;
    }

    .marquee--content {
        padding: 0 2rem;
        white-space: nowrap;
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }
</style>
