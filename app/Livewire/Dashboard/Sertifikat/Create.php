<?php

namespace App\Livewire\Dashboard\Sertifikat;

use App\Models\Sertifikat;
use App\Models\SertifikatCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $sertifikat_categories;
    public $title;
    public $file;
    public $sertifikat_category_id;
    
    public function mount()
    {
        $this->sertifikat_categories = SertifikatCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('sertifikat', 'public');
        
        Sertifikat::create([
            'sertifikat_category_id' => $this->sertifikat_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.sertifikat.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.sertifikat.create');
    }
}