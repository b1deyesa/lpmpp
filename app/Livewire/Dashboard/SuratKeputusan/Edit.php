<?php

namespace App\Livewire\Dashboard\SuratKeputusan;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\SuratKeputusan;
use App\Models\SuratKeputusanCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public SuratKeputusan $surat_keputusan;
    public $surat_keputusan_categories;
    public $title;
    public $surat_keputusan_category_id;
    
    public function mount()
    {
        $this->surat_keputusan_categories = SuratKeputusanCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->surat_keputusan->title;
        $this->surat_keputusan_category_id = $this->surat_keputusan->surat_keputusan_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->surat_keputusan->update([
            'surat_keputusan_category_id' => $this->surat_keputusan_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.surat-keputusan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.surat-keputusan.edit', [
            'surat_keputusan' => $this->surat_keputusan
        ]);
    }
}