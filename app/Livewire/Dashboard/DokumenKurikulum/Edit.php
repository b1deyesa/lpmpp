<?php

namespace App\Livewire\Dashboard\DokumenKurikulum;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DokumenKurikulum;
use App\Models\DokumenKurikulumCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public DokumenKurikulum $dokumen_kurikulum;
    public $dokumen_kurikulum_categories;
    public $title;
    public $dokumen_kurikulum_category_id;
    
    public function mount()
    {
        $this->dokumen_kurikulum_categories = DokumenKurikulumCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->dokumen_kurikulum->title;
        $this->dokumen_kurikulum_category_id = $this->dokumen_kurikulum->dokumen_kurikulum_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->dokumen_kurikulum->update([
            'dokumen_kurikulum_category_id' => $this->dokumen_kurikulum_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.dokumen-kurikulum.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.dokumen-kurikulum.edit', [
            'dokumen_kurikulum' => $this->dokumen_kurikulum
        ]);
    }
}