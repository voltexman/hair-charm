@props(['open', 'variant' => 'full', 'header'])

<div x-data="sidebar" class="relative z-50 size-auto">
    <div @click="openSidebar()">
        {{ $open }}
    </div>

    <template x-teleport="body">
        <div x-show="open" @keydown.window.escape="open = false" class="relative z-99">

            <div x-show="open" x-transition.opacity.duration.600ms @click="open = false"
                class="fixed inset-0 bg-charm-brown-900/60 lg:bg-black/80 backdrop-blur-sm">
            </div>

            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-y-0 right-0 flex max-w-full">
                        <div x-show="open" @click.away="open = false"
                            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                            class="w-screen max-w-md bg-white">

                            <div class="flex flex-col h-full relative">
                                <button @click="open=false"
                                    class="absolute top-2 right-2 lg:top-5 lg:right-5 z-30 p-2.5">
                                    <x-lucide-x class="size-6 stroke-charm-cream-100" />
                                </button>

                                <div {{ $header->attributes->class('bg-charm-dark-400 flex p-8') }}>
                                    {{ $header }}
                                </div>

                                <div
                                    class="relative flex-1 size-full overflow-y-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('sidebar', () => ({
            open: false,

            init() {
                this.$watch('open', value => {
                    document.body.classList.toggle('overflow-hidden', value)
                })
            },
            openSidebar() {
                this.open = true;
            }
        }))
    })
</script>
