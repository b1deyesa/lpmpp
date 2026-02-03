<?php

namespace App\Livewire\Dashboard\PendampinganAkreditasiNasionalCategory;

use Livewire\Component;
use App\Models\PendampinganAkreditasiNasionalCategory;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        PendampinganAkreditasiNasionalCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.pendampingan-akreditasi-nasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pendampingan-akreditasi-nasional-category.create');
    }
}
