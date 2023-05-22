<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeCardHero extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $imagesrc,
        public string $title,
        public string $description,
        public string $applications,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-card-hero');
    }
}
