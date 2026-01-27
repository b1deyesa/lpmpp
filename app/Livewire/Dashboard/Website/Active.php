<?php

namespace App\Livewire\Dashboard\Website;

use App\Models\Website;
use Livewire\Component;

class Active extends Component
{
    public Website $website;
    public $active;
    
    public function mount()
    {
        $this->active = $this->website->active ? true : false;
    }
    
    public function updatedActive()
    {
        $this->website->update([
            'active' => $this->active
        ]);
    }
    
    public function render()
    {
        return view('livewire.dashboard.website.active', [
            'website' => $this->website
        ]);
    }
}
