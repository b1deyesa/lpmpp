<?php

namespace App\Livewire\Dashboard\DokumenMbkmCategory;

use App\Models\DokumenMbkmCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        DokumenMbkmCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.dokumen-mbkm.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.dokumen-mbkm-category.create');
    }
}