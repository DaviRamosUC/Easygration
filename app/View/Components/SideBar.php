<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Request;


class SideBar extends Component
{

    public string $currentRouteName;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
            $this->currentRouteName = '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.side-bar')->with('user', auth()->user());
    }
}
