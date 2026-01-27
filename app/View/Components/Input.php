<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $uniqid;
    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $label = null,
        public $required = false,
        public $type = 'text',
        public $id = null,
        public $name = null,
        public $wire = null,
        public $value = null,
        public $placeholder = null,
        public $options = null,
        public $class = null,
        public $width = null,
        public $height = null,
        public $toolbar = 'basic'
    )
    {
        $this->uniqid = uniqid();
        $this->label = $label;
        $this->required = $required;
        $this->type = $type;
        $this->wire = $wire;
        
        if ($this->wire) {
            $this->name = $this->wire;
        } else {
            $this->name = $name ?? $this->type;
        }
        
        $this->id = $id ?? $this->name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->options = is_string($options) && $options !== [] ? json_decode($options, true) : ($options ?? []);    
        $this->class = $class;
        $this->width = $width;
        $this->height = $height;
        $this->toolbar = $toolbar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
