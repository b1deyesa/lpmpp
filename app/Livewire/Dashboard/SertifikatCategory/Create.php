<?php

namespace App\Livewire\Dashboard\SertifikatCategory;

use App\Models\SertifikatCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate(['title' => 'required']);
        
        SertifikatCategory::create(['title' => $this->title]);
        
        return redirect()->route('dashboard.sertifikat.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.sertifikat-category.create');
    }
}