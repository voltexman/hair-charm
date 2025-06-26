@props(['image'])

<div class="overflow-hidden h-80 bg-no-repeat bg-cover bg-center relative"
    style="background-image: url('{{ $image }}')">
    <div class="size-full background absolute z-10">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div
        class="flex justify-center items-center backdrop-blur-sm bg-charm-dark-500/45 size-full page-header-halftone relative z-20">
        <div class="max-w-2xl mx-auto border-y-2 border-charm-cream-200 py-2.5 relative z-30">
            <h1
                class="font-[Oswald] uppercase text-2xl lg:text-4xl font-light text-charm-cream-200 text-center relative z-30 split">
                {{ $title }}
            </h1>
        </div>
    </div>
</div>

<style>
    .page-header-halftone::after {
        /* Cover our element */
        content: '';
        position: absolute;
        inset: 0;
        mask-image: linear-gradient(rgb(0 0 0 / .3), rgb(0 0 0 / .3));

        /* Dotted background */
        background-image: radial-gradient(circle at center,
                black 0.06rem,
                transparent 0);
        background-size: .32rem .32rem;
        background-position: 0 0, 0.5rem 0.5rem;
    }

    @keyframes move {
        100% {
            transform: translate3d(0, 0, 1px) rotate(360deg);
        }
    }

    .background span {
        width: 5vmin;
        height: 5vmin;
        border-radius: 5vmin;
        backface-visibility: hidden;
        position: absolute;
        animation: move;
        animation-duration: 45;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }


    .background span:nth-child(0) {
        color: var(--color-charm-cream-500);
        top: 4%;
        left: 30%;
        animation-duration: 40s;
        animation-delay: -49s;
        transform-origin: -13vw 22vh;
        box-shadow: 16vmin 0 2.132300608228305vmin currentColor;
    }

    .background span:nth-child(1) {
        color: var(--color-charm-cream-700);
        top: 54%;
        left: 67%;
        animation-duration: 22s;
        animation-delay: -14s;
        transform-origin: -20vw -16vh;
        box-shadow: 16vmin 0 2.8618984089822748vmin currentColor;
    }

    .background span:nth-child(2) {
        color: var(--color-charm-brown-400);
        top: 57%;
        left: 51%;
        animation-duration: 13s;
        animation-delay: -19s;
        transform-origin: 7vw -6vh;
        box-shadow: -16vmin 0 2.9632526689458993vmin currentColor;
    }

    .background span:nth-child(3) {
        color: var(--color-charm-cream-500);
        top: 75%;
        left: 65%;
        animation-duration: 35s;
        animation-delay: -11s;
        transform-origin: 21vw -1vh;
        box-shadow: 16vmin 0 2.7238488375103618vmin currentColor;
    }

    .background span:nth-child(4) {
        color: var(--color-charm-cream-600);
        top: 35%;
        left: 34%;
        animation-duration: 51s;
        animation-delay: -38s;
        transform-origin: -8vw 1vh;
        box-shadow: -16vmin 0 2.8937530758268446vmin currentColor;
    }

    .background span:nth-child(5) {
        color: var(--color-charm-brown-700);
        top: 62%;
        left: 44%;
        animation-duration: 28s;
        animation-delay: -32s;
        transform-origin: 9vw -10vh;
        box-shadow: -16vmin 0 2.3954138183019715vmin currentColor;
    }

    .background span:nth-child(6) {
        color: var(--color-charm-cream-800);
        top: 82%;
        left: 49%;
        animation-duration: 28s;
        animation-delay: -3s;
        transform-origin: -18vw -15vh;
        box-shadow: 16vmin 0 2.6079242931413593vmin currentColor;
    }

    .background span:nth-child(7) {
        color: var(--color-charm-cream-600);
        top: 14%;
        left: 81%;
        animation-duration: 45s;
        animation-delay: -49s;
        transform-origin: -17vw -13vh;
        box-shadow: 16vmin 0 2.8594568739746076vmin currentColor;
    }

    .background span:nth-child(8) {
        color: var(--color-charm-cream-700);
        top: 22%;
        left: 9%;
        animation-duration: 49s;
        animation-delay: -32s;
        transform-origin: -18vw 21vh;
        box-shadow: -16vmin 0 2.3236964547031516vmin currentColor;
    }

    .background span:nth-child(9) {
        color: var(--color-charm-cream-600);
        top: 81%;
        left: 57%;
        animation-duration: 32s;
        animation-delay: -32s;
        transform-origin: 24vw 25vh;
        box-shadow: 16vmin 0 2.9850386316739312vmin currentColor;
    }

    .background span:nth-child(10) {
        color: var(--color-charm-cream-600);
        top: 60%;
        left: 65%;
        animation-duration: 11s;
        animation-delay: -38s;
        transform-origin: -9vw 10vh;
        box-shadow: 16vmin 0 2.054819218947115vmin currentColor;
    }

    .background span:nth-child(11) {
        color: var(--color-charm-cream-700);
        top: 31%;
        left: 80%;
        animation-duration: 37s;
        animation-delay: -25s;
        transform-origin: 0vw 11vh;
        box-shadow: -16vmin 0 2.1854197835224833vmin currentColor;
    }

    .background span:nth-child(12) {
        color: var(--color-charm-cream-700);
        top: 28%;
        left: 5%;
        animation-duration: 23s;
        animation-delay: -1s;
        transform-origin: 0vw 9vh;
        box-shadow: -16vmin 0 2.6560178347476056vmin currentColor;
    }

    .background span:nth-child(13) {
        color: var(--color-charm-cream-800);
        top: 8%;
        left: 27%;
        animation-duration: 28s;
        animation-delay: -2s;
        transform-origin: -22vw 3vh;
        box-shadow: 16vmin 0 2.7556900089340064vmin currentColor;
    }

    .background span:nth-child(14) {
        color: var(--color-charm-brown-600);
        top: 60%;
        left: 38%;
        animation-duration: 38s;
        animation-delay: -46s;
        transform-origin: 10vw 20vh;
        box-shadow: -16vmin 0 2.2516974272886627vmin currentColor;
    }

    .background span:nth-child(15) {
        color: var(--color-charm-cream-700);
        top: 43%;
        left: 25%;
        animation-duration: 7s;
        animation-delay: -32s;
        transform-origin: 3vw -21vh;
        box-shadow: 16vmin 0 2.761331959043586vmin currentColor;
    }

    .background span:nth-child(16) {
        color: var(--color-charm-cream-800);
        top: 58%;
        left: 89%;
        animation-duration: 24s;
        animation-delay: -44s;
        transform-origin: 12vw -5vh;
        box-shadow: -16vmin 0 2.4174338217391327vmin currentColor;
    }

    .background span:nth-child(17) {
        color: var(--color-charm-brown-500);
        top: 5%;
        left: 27%;
        animation-duration: 35s;
        animation-delay: -1s;
        transform-origin: 12vw 23vh;
        box-shadow: -16vmin 0 2.9176131056962267vmin currentColor;
    }

    .background span:nth-child(18) {
        color: var(--color-charm-cream-700);
        top: 58%;
        left: 7%;
        animation-duration: 11s;
        animation-delay: -1s;
        transform-origin: -5vw 5vh;
        box-shadow: -16vmin 0 2.778201963585425vmin currentColor;
    }

    .background span:nth-child(19) {
        color: var(--color-charm-cream-600);
        top: 94%;
        left: 93%;
        animation-duration: 22s;
        animation-delay: -36s;
        transform-origin: -4vw -12vh;
        box-shadow: -16vmin 0 2.564920750164317vmin currentColor;
    }
</style>
