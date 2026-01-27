<?php

namespace App\View\Components\Layout;

use App\Models\Website;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Page extends Component
{
    public $website;
    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $background = null,
        public $title = null,
        public $class = null
    )
    {
        $this->website = Website::first();
        $this->background = $background;
        $this->title = $title;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.page');
    }
}
