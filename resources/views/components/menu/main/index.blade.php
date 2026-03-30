<div x-data="mainMenu()" class="relative z-50 size-auto">
    <button type="button" class="flex flex-col justify-center items-center cursor-pointer" @click="openMenu()">
        <x-lucide-menu class="size-7 text-charm-cream-200 transition-colors duration-300" stroke-width="1.5" />
        <span
            class="hidden lg:block font-[Oswald] text-xs uppercase font-bold tracking-widest text-charm-cream-200 mt-1">
            Menu
        </span>
    </button>

    <template x-teleport="body">
        <div x-show="open" @keydown.window.escape="open = false" class="relative z-99">

            <div x-show="open" x-transition.opacity.duration.600ms @click="open = false"
                class="fixed inset-0 bg-charm-brown-900/60 backdrop-blur-sm">
            </div>

            <div x-show="open" class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-0 overflow-hidden">
                        <div class="flex flex-col h-full">
                            <div class="flex items-center h-auto">
                                <button @click="open = false"
                                    class="absolute top-2 right-2 lg:top-5 lg:right-5 z-30 flex items-center justify-center p-2.5 cursor-pointer text-charm-cream-200 hover:text-charm-cream-600 transition-colors duration-300">
                                    <x-lucide-x class="size-6" />
                                </button>
                            </div>
                            <div class="absolute inset-0 flex justify-center items-center">
                                <nav class="grid grid-cols-2 lg:flex lg:flex-col gap-5">
                                    {{ $slot }}
                                </nav>
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
        Alpine.data('mainMenu', () => ({
            open: false,

            init() {
                this.$watch('open', value => {
                    document.body.classList.toggle('overflow-hidden', value)
                })
            },
            openMenu() {
                this.open = true;
                this.$dispatch('open-main-menu')
            }
        }))
    })
</script>
