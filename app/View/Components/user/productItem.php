<?php

namespace App\View\Components\user;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class productItem extends Component
{
    protected $data;
    /**
     * Create a new component instance.
     */
    public function __construct($item = null)
    {
        $this->data = $item;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $item = $this->data;
        return view('users.components.product-item', (['item' => $item]));
    }
}
