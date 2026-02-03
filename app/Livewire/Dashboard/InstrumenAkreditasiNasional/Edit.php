<?php

namespace App\Livewire\Dashboard\InstrumenAkreditasiNasional;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\InstrumenAkreditasiNasional;
use App\Models\InstrumenAkreditasiNasionalCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public InstrumenAkreditasiNasional $instrumen_akreditasi_nasional;
    public $instrumen_akreditasi_nasional_categories;
    public $title;
    public $instrumen_akreditasi_nasional_category_id;
    
    public function mount()
    {
        $this->instrumen_akreditasi_nasional_categories = InstrumenAkreditasiNasionalCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->instrumen_akreditasi_nasional->title;
        $this->instrumen_akreditasi_nasional_category_id = $this->instrumen_akreditasi_nasional->instrumen_akreditasi_nasional_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->instrumen_akreditasi_nasional->update([
            'instrumen_akreditasi_nasional_category_id' => $this->instrumen_akreditasi_nasional_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.instrumen-akreditasi-nasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.instrumen-akreditasi-nasional.edit', [
            'instrumen_akreditasi_nasional' => $this->instrumen_akreditasi_nasional
        ]);
    }
}