<div x-data="{
    activeAccordion: null,
    setActiveAccordion(id) {
        this.activeAccordion = (this.activeAccordion == id) ? '' : id
    }
}" {{ $attributes->class('flex flex-col lg:flex-row w-full lg:h-[60%]') }}>
    {{ $slot }}
</div>
