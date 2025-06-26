<section class="bg-charm-cream-200 py-30 lg:py-40 flex justify-center overflow-hidden">
    <div class="max-w-3xl mx-auto px-5 lg:px-0 relative">
        <span
            class="font-[Alex_Brush] w-screen mx-auto text-charm-dark-500 text-5xl md:text-7xl lg:text-8xl absolute -top-0.5 lg:-top-1 left-1/2 -translate-1/2 opacity-5 drop-shadow-lg text-center font-bold block">
            {{ env('APP_NAME') }}
        </span>
        <h2
            class="text-2xl md:text-3xl lg:text-4xl font-bold leading-7 md:leading-8 lg:leading-10 text-charm-dark-300 drop-shadow-lg text-center text-balance uppercase text-shadow-lg/5">
            {{ $slot }}
        </h2>
    </div>
</section>
