<?php

namespace App\Livewire\Dashboard\DokumenMbkm;

use App\Models\DokumenMbkm;
use App\Models\DokumenMbkmCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $dokumen_mbkm_categories;
    public $title;
    public $file;
    public $dokumen_mbkm_category_id;
    
    public function mount()
    {
        $this->dokumen_mbkm_categories = DokumenMbkmCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('dokumen-mbkm', 'public');
        
        DokumenMbkm::create([
            'dokumen_mbkm_category_id' => $this->dokumen_mbkm_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.dokumen-mbkm.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.dokumen-mbkm.create');
    }
}