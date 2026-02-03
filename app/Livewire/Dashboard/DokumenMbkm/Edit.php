<?php

namespace App\Livewire\Dashboard\DokumenMbkm;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DokumenMbkm;
use App\Models\DokumenMbkmCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public DokumenMbkm $dokumen_mbkm;
    public $dokumen_mbkm_categories;
    public $title;
    public $dokumen_mbkm_category_id;
    
    public function mount()
    {
        $this->dokumen_mbkm_categories = DokumenMbkmCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->dokumen_mbkm->title;
        $this->dokumen_mbkm_category_id = $this->dokumen_mbkm->dokumen_mbkm_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->dokumen_mbkm->update([
            'dokumen_mbkm_category_id' => $this->dokumen_mbkm_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.dokumen-mbkm.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.dokumen-mbkm.edit', [
            'dokumen_mbkm' => $this->dokumen_mbkm
        ]);
    }
}