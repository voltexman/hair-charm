@props(['type' => 'text'])

<input
    {{ $attributes->class('w-full bg-charm-cream-200 border border-charm-brown-200 px-5 py-2.5 font-medium text-charm-brown-700 placeholder:text-charm-cream-600 placeholder:font-medium placeholder:text-sm focus:outline-none focus:ring-2 focus:ring-charm-brown-400 focus:ring-offset-2 transition duration-250')->merge(['type' => 'text']) }} />
