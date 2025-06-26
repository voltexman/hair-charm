<?php

namespace App\View\Components;

use App\Models\Carousel as ModelsCarousel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Carousel extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct() {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $carousel = ModelsCarousel::active()->get();

        return view('components.carousel', compact('carousel'));
    }
}
