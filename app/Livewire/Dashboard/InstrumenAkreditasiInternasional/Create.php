<?php

namespace App\Livewire\Dashboard\InstrumenAkreditasiInternasional;

use App\Models\InstrumenAkreditasiInternasional;
use App\Models\InstrumenAkreditasiInternasionalCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $instrumen_akreditasi_internasional_categories;
    public $title;
    public $file;
    public $instrumen_akreditasi_internasional_category_id;
    
    public function mount()
    {
        $this->instrumen_akreditasi_internasional_categories = InstrumenAkreditasiInternasionalCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('instrumen-akreditasi-internasional', 'public');
        
        InstrumenAkreditasiInternasional::create([
            'instrumen_akreditasi_internasional_category_id' => $this->instrumen_akreditasi_internasional_category_id,
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