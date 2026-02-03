<?php

namespace App\Livewire\Dashboard\InstrumenAkreditasiNasional;

use App\Models\InstrumenAkreditasiNasional;
use App\Models\InstrumenAkreditasiNasionalCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $instrumen_akreditasi_nasional_categories;
    public $title;
    public $file;
    public $instrumen_akreditasi_nasional_category_id;
    
    public function mount()
    {
        $this->instrumen_akreditasi_nasional_categories = InstrumenAkreditasiNasionalCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('instrumen-akreditasi-nasional', 'public');
        
        InstrumenAkreditasiNasional::create([
            'instrumen_akreditasi_nasional_category_id' => $this->instrumen_akreditasi_nasional_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.instrumen-akreditasi-nasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.instrumen-akreditasi-nasional.create');
    }
}