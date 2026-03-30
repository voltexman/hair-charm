<?php

namespace App\View\Components;

use App\Enums\ProductCategory;
use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Products extends Component
{
    public function __construct(
        public ProductCategory $category,
        public ?string $type = null
    ) {}

    public function render(): View|Closure|string
    {
        $products = Product::category($this->category)->type($this->type)->active()->get();

        return view('components.products', compact('products'));
    }
}
