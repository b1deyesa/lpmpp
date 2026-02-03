<?php

namespace App\Livewire\Dashboard\SuratKeputusan;

use App\Models\SuratKeputusan;
use App\Models\SuratKeputusanCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $surat_keputusan_categories;
    public $title;
    public $file;
    public $surat_keputusan_category_id;
    
    public function mount()
    {
        $this->surat_keputusan_categories = SuratKeputusanCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('surat-keputusan', 'public');
        
        SuratKeputusan::create([
            'surat_keputusan_category_id' => $this->surat_keputusan_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.surat-keputusan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.surat-keputusan.create');
    }
}