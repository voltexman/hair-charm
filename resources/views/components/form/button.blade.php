<button
    {{ $attributes->class('bg-charm-dark-300 text-charm-cream-200 px-5 py-2.5 disabled:opacity-50 disabled:cursor-not-allowed cursor-pointer')->merge(['type' => 'button']) }}>
    {{ $slot }}
</button>
