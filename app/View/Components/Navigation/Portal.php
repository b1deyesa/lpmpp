<?php

namespace App\View\Components\Navigation;

use Closure;
use App\Models\PortalCategory;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Portal extends Component
{
    public $categories;
    
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
        return view('components.navigation.portal');
    }
}
