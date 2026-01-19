<?php

namespace App\Livewire\Dashboard\InstrumenAkreditasiNasional;

use App\Models\InstrumenAkreditasiNasional;
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
        
        $file = $this->file->store('instrumen-akreditasi-nasional', 'public');
        
        InstrumenAkreditasiNasional::create([
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.instrumen-akreditasi-nasional.index')->with('success', 'Success added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.instrumen-akreditasi-nasional.create');
    }
}