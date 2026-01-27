<?php

namespace App\Livewire\Dashboard\InstrumenAkreditasiInternasional;

use App\Models\InstrumenAkreditasiInternasional;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $title;
    public $file;
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('instrumen-akreditasi-internasional', 'public');
        
        InstrumenAkreditasiInternasional::create([
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.instrumen-akreditasi-internasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.instrumen-akreditasi-internasional.create');
    }
}
