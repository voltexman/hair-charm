<section class="bg-charm-cream-200 flex flex-col justify-center relative overflow-hidden">
    <div
        class="absolute left-5 bottom-0 size-1/3 rotate-45 bg-charm-brown-500/50 blur-xl rounded-tl-[100px] rounded-tr-2xl rounded-bl-lg rounded-br-2xl opacity-40 z-0">
    </div>
    <div
        class="absolute right-5 top-0 size-1/3 -rotate-45 blur-xl bg-charm-brown-600/50 rounded-tl-[100px] rounded-tr-3xl rounded-bl-xl rounded-br-3xl opacity-40 z-0">
    </div>
    <div class="size-full relative z-10 backdrop-blur-3xl py-20 lg:py-30">
        <div class="max-w-3xl mx-auto px-5 lg:px-0">
            <span
                class="font-[Alex_Brush] w-screen mx-auto text-charm-dark-500 text-5xl md:text-7xl lg:text-8xl absolute top-20 lg:top-30 left-1/2 -translate-1/2 opacity-5 drop-shadow-lg text-center font-bold block">
                {{ env('APP_NAME') }}
            </span>
            <h2
                class="text-2xl md:text-3xl lg:text-4xl font-bold leading-7 md:leading-8 lg:leading-10 text-charm-dark-300 drop-shadow-lg text-center text-balance uppercase text-shadow-lg/5">
                {{ $slot }}
            </h2>
        </div>
        <div class="hidden mx-auto gap-x-5 mt-15">
            <span class="block size-11 bg-charm-brown-700/30 rounded-2xl rotate-22"></span>
            <span class="block size-11 bg-charm-brown-800/50 rounded-2xl rotate-5"></span>
            <span class="block size-11 bg-charm-cream-900/10 rounded-2xl rotate-12"></span>
            <span class="block size-11 bg-charm-cream-800/25 rounded-2xl -rotate-5"></span>
        </div>
    </div>
</section>
