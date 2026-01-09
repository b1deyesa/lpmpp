<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $class = null,
        public $title = 'Form Title',
        public $right = false
    )
    {
        $this->class = $class;
        $this->title = $title;
        $this->right = $right;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.dashboard-form');
    }
}
