<div x-data x-init="$nextTick(() => {
    $refs.content.appendChild($refs.item.cloneNode(true));
});"
    class="w-full overflow-hidden font-[Oswald] tracking-wider text-charm-cream-100/90 textlg uppercase bg-charm-dark-300">
    <div class="relative w-full mx-auto overflow-hidden">
        <div class="absolute left-0 z-20 w-10 h-full bg-gradient-to-r from-charm-dark-500 to-transparent"></div>
        <div class="absolute right-0 z-20 w-10 h-full bg-gradient-to-l from-charm-dark-500 to-transparent"></div>
        <div x-ref="content" class="flex animate-marquee">
            <div x-ref="item"
                class="mx-5 flex mxauto items-center justify-center flex-shrink-0 w-full py-2.5 space-x-2 contain-inline-size text-nowrap">
                <div class="inline text-nowrap">{{ env('APP_NAME') }} company</div>
                <span class="rounded-full size-1.5 bg-charm-gold block"></span>
                <div class="inline text-nowrap">{{ $text }}</div>
            </div>
        </div>
    </div>
</div>

<style>
    /*
     *  This is the marquee animation styles.
     *  Instead of adding this CSS you may wish to implement in your tailwind config.
     *  Learn more in the marquee Tailwind Config section
     */

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .animate-marquee {
        animation: marquee 20s linear infinite;
    }
</style>
