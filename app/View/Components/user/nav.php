<?php

namespace App\View\Components\user;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class nav extends Component
{
    protected $data;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = $this->data;
        // dd($this->data);
        return view('users.components.nav', compact('data'));
    }
}
