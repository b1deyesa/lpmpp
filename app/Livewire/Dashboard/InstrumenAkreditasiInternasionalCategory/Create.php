<?php

namespace App\Livewire\Dashboard\InstrumenAkreditasiInternasionalCategory;

use App\Models\InstrumenAkreditasiInternasionalCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        InstrumenAkreditasiInternasionalCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.instrumen-akreditasi-internasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.instrumen-akreditasi-internasional-category.create');
    }
}