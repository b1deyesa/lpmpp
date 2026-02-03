<?php

namespace App\Livewire\Dashboard\Pelatihan;

use App\Models\Pelatihan;
use App\Models\PelatihanCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $pelatihan_categories;
    public $title;
    public $file;
    public $pelatihan_category_id;
    
    public function mount()
    {
        $this->pelatihan_categories = PelatihanCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('pelatihan', 'public');
        
        Pelatihan::create([
            'pelatihan_category_id' => $this->pelatihan_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.pelatihan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pelatihan.create');
    }
}