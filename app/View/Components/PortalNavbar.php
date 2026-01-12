<?php

namespace App\View\Components;

use App\Models\PortalCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PortalNavbar extends Component
{
    public $categories = null;
    
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->categories = PortalCategory::where('pusat_id', request()->route('pusat')?->id)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.portal-navbar');
    }
}
