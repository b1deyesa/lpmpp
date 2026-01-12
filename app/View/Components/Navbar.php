<?php

namespace App\View\Components;

use App\Models\Pusat;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $pusats = null;
    
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->pusats = Pusat::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
