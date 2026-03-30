@props(['variant' => 'section'])

<div x-data="{
    active: null,
    isActive(id) { return this.active === id },
    setActive(id) { this.active !== id ? this.active = id : this.active = null }
}" data-variant="{{ $variant }}"
    {{ $attributes->class([
        'group flex data-[variant=section]:flex-col md:data-[variant=section]:flex-row data-[variant=sidebar]:flex-col md:data-[variant=section]:h-110 data-[variant=section]:h-250 data-[variant=sidebar]:h-full overflow-hidden',
    ]) }}>
    {{ $slot }}
</div>
