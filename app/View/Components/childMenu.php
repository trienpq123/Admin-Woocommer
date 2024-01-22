<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class childMenu extends Component
{
    /**
     * Create a new component instance.
     */
    protected $menu;
    public function __construct($menu)
    {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {   
        $menu = $this->menu;
        return view('admin.component.childMenu',compact('menu'));
    }
}
