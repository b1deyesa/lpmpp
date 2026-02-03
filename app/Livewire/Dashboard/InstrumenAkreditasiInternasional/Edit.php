<?php

namespace App\Livewire\Dashboard\InstrumenAkreditasiInternasional;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\InstrumenAkreditasiInternasional;
use App\Models\InstrumenAkreditasiInternasionalCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public InstrumenAkreditasiInternasional $instrumen_akreditasi_internasional;
    public $instrumen_akreditasi_internasional_categories;
    public $title;
    public $instrumen_akreditasi_internasional_category_id;
    
    public function mount()
    {
        $this->instrumen_akreditasi_internasional_categories = InstrumenAkreditasiInternasionalCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->instrumen_akreditasi_internasional->title;
        $this->instrumen_akreditasi_internasional_category_id = $this->instrumen_akreditasi_internasional->instrumen_akreditasi_internasional_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->instrumen_akreditasi_internasional->update([
            'instrumen_akreditasi_internasional_category_id' => $this->instrumen_akreditasi_internasional_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.instrumen-akreditasi-internasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.instrumen-akreditasi-internasional.edit', [
            'instrumen_akreditasi_internasional' => $this->instrumen_akreditasi_internasional
        ]);
    }
}