<?php

namespace App\Livewire\Dashboard\PelatihanCategory;

use App\Models\PelatihanCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        PelatihanCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.pelatihan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pelatihan-category.create');
    }
}