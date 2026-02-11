<?php

namespace App\View\Components\Navigation;

use Closure;
use App\Models\Pusat;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Dashboard extends Component
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
        return view('components.navigation.dashboard');
    }
}
