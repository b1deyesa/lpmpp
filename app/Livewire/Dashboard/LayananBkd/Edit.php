<?php

namespace App\Livewire\Dashboard\LayananBkd;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\LayananBkd;
use App\Models\LayananBkdCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public LayananBkd $layanan_bkd;
    public $layanan_bkd_categories;
    public $title;
    public $layanan_bkd_category_id;
    
    public function mount()
    {
        $this->layanan_bkd_categories = LayananBkdCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->layanan_bkd->title;
        $this->layanan_bkd_category_id = $this->layanan_bkd->layanan_bkd_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->layanan_bkd->update([
            'layanan_bkd_category_id' => $this->layanan_bkd_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.layanan-bkd.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.layanan-bkd.edit', [
            'layanan_bkd' => $this->layanan_bkd
        ]);
    }
}