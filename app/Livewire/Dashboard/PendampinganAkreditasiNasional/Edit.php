<?php

namespace App\Livewire\Dashboard\PendampinganAkreditasiNasional;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PendampinganAkreditasiNasional;
use App\Models\PendampinganAkreditasiNasionalCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public PendampinganAkreditasiNasional $pendampingan_akreditasi_nasional;
    public $pendampingan_akreditasi_nasional_categories;
    public $title;
    public $pendampingan_akreditasi_nasional_category_id;
    
    public function mount()
    {
        $this->pendampingan_akreditasi_nasional_categories = PendampinganAkreditasiNasionalCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->pendampingan_akreditasi_nasional->title;
        $this->pendampingan_akreditasi_nasional_category_id = $this->pendampingan_akreditasi_nasional->pendampingan_akreditasi_nasional_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->pendampingan_akreditasi_nasional->update([
            'pendampingan_akreditasi_nasional_category_id' => $this->pendampingan_akreditasi_nasional_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.pendampingan-akreditasi-nasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pendampingan-akreditasi-nasional.edit', [
            'pendampingan_akreditasi_nasional' => $this->pendampingan_akreditasi_nasional
        ]);
    }
}