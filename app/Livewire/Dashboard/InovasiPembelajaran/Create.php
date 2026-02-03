<?php

namespace App\Livewire\Dashboard\InovasiPembelajaran;

use App\Models\InovasiPembelajaran;
use App\Models\InovasiPembelajaranCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $inovasi_pembelajaran_categories;
    public $title;
    public $file;
    public $inovasi_pembelajaran_category_id;
    
    public function mount()
    {
        $this->inovasi_pembelajaran_categories = InovasiPembelajaranCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('inovasi-pembelajaran', 'public');
        
        InovasiPembelajaran::create([
            'inovasi_pembelajaran_category_id' => $this->inovasi_pembelajaran_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.inovasi-pembelajaran.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.inovasi-pembelajaran.create');
    }
}