@props(['open'])

<div x-data="{
    slideOverOpen: false
}" class="relative z-50 size-auto">
    <div @click="slideOverOpen=true">
        {{ $open }}
    </div>
    <template x-teleport="body">
        <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false" class="relative z-[99]">
            <div x-show="slideOverOpen" x-transition.opacity.duration.600ms @click="slideOverOpen = false"
                class="fixed inset-0 bg-charm-brown-900/80 lg:bg-black/80 backdrop-blur-sm"></div>
            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-y-0 right-0 flex max-w-full">
                        <div x-show="slideOverOpen" @click.away="slideOverOpen = false"
                            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                            class="w-screen">
                            <div class="flex flex-col h-full">
                                <div class="flex items-center h-auto">
                                    <button @click="slideOverOpen=false"
                                        class="absolute top-2 right-2 lg:top-5 lg:right-5 z-30 flex items-center justify-center p-2.5 cursor-pointer text-charm-cream-200 hover:text-charm-cream-600 transition-colors duration-300">
                                        <x-lucide-x class="size-6" />
                                    </button>
                                </div>
                                <div class="relative flex-1">
                                    <div class="absolute inset-0 flex justify-center items-center">
                                        {{ $slot }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>
