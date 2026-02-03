<?php

namespace App\Livewire\Dashboard\InstrumenAkreditasiNasionalCategory;

use App\Models\InstrumenAkreditasiNasionalCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        InstrumenAkreditasiNasionalCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.instrumen-akreditasi-nasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.instrumen-akreditasi-nasional-category.create');
    }
}