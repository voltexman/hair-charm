<div x-data="{
    active: null,
    isActive(id) { return this.active === id },
    setActive(id) { this.active = id }
}" {{ $attributes->class(['flex flex-col lg:flex-row w-full lg:h-[60%]']) }}>
    {{ $slot }}
</div>
