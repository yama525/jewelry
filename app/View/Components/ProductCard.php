<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{

    public $product;
    // public $product_rentaling;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    // public function __construct($product, $product_rentaling)
    public function __construct($product)
    {
        $this->product = $product;
        // $this->product_rentaling = $product_rentaling;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-card');
    }
}
