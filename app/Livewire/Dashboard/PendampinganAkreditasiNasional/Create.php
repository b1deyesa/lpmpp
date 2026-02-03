<?php

namespace App\Livewire\Dashboard\PendampinganAkreditasiNasional;

use App\Models\PendampinganAkreditasiNasional;
use App\Models\PendampinganAkreditasiNasionalCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $pendampingan_akreditasi_nasional_categories;
    public $title;
    public $file;
    public $pendampingan_akreditasi_nasional_category_id;
    
    public function mount()
    {
        $this->pendampingan_akreditasi_nasional_categories = PendampinganAkreditasiNasionalCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('pendampingan-akreditasi-nasional', 'public');
        
        PendampinganAkreditasiNasional::create([
            'pendampingan_akreditasi_nasional_category_id' => $this->pendampingan_akreditasi_nasional_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.pendampingan-akreditasi-nasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pendampingan-akreditasi-nasional.create');
    }
}