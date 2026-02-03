<?php

namespace App\Livewire\Dashboard\PeraturanRektorCategory;

use App\Models\PeraturanRektorCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        PeraturanRektorCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.peraturan-rektor.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.peraturan-rektor-category.create');
    }
}