<?php

namespace App\View\Components;

use App\Models\Sambutan;
use App\Models\Website;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public $website;
    public $sambutan;
    
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->website = Website::first();
        $this->sambutan = Sambutan::first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
