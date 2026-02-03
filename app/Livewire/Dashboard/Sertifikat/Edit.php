<?php

namespace App\Livewire\Dashboard\Sertifikat;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Sertifikat;
use App\Models\SertifikatCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public Sertifikat $sertifikat;
    public $sertifikat_categories;
    public $title;
    public $sertifikat_category_id;
    
    public function mount()
    {
        $this->sertifikat_categories = SertifikatCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->sertifikat->title;
        $this->sertifikat_category_id = $this->sertifikat->sertifikat_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->sertifikat->update([
            'sertifikat_category_id' => $this->sertifikat_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.sertifikat.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.sertifikat.edit', [
            'sertifikat' => $this->sertifikat
        ]);
    }
}