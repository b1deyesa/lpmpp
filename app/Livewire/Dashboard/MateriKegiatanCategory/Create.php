<?php

namespace App\Livewire\Dashboard\MateriKegiatanCategory;

use App\Models\MateriKegiatanCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        MateriKegiatanCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.materi-kegiatan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.materi-kegiatan-category.create');
    }
}