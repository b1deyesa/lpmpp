<?php

namespace App\Livewire\Dashboard\PendampinganAkreditasiInternasional;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PendampinganAkreditasiInternasional;
use App\Models\PendampinganAkreditasiInternasionalCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public PendampinganAkreditasiInternasional $pendampingan_akreditasi_internasional;
    public $pendampingan_akreditasi_internasional_categories;
    public $title;
    public $pendampingan_akreditasi_internasional_category_id;
    
    public function mount()
    {
        $this->pendampingan_akreditasi_internasional_categories = PendampinganAkreditasiInternasionalCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->pendampingan_akreditasi_internasional->title;
        $this->pendampingan_akreditasi_internasional_category_id = $this->pendampingan_akreditasi_internasional->pendampingan_akreditasi_internasional_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->pendampingan_akreditasi_internasional->update([
            'pendampingan_akreditasi_internasional_category_id' => $this->pendampingan_akreditasi_internasional_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.pendampingan-akreditasi-internasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pendampingan-akreditasi-internasional.edit', [
            'pendampingan_akreditasi_internasional' => $this->pendampingan_akreditasi_internasional
        ]);
    }
}