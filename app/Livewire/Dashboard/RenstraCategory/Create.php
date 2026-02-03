<?php

namespace App\Livewire\Dashboard\RenstraCategory;

use App\Models\RenstraCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        RenstraCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.renstra.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.renstra-category.create');
    }
}