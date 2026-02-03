<?php

namespace App\Livewire\Dashboard\PeraturanPerundangUndanganCategory;

use App\Models\PeraturanPerundangUndanganCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        PeraturanPerundangUndanganCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.peraturan-perundang-undangan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.peraturan-perundang-undangan-category.create');
    }
}