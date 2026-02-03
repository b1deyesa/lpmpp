<?php

namespace App\Livewire\Dashboard\LayananBkdCategory;

use App\Models\LayananBkdCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        LayananBkdCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.layanan-bkd.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.layanan-bkd-category.create');
    }
}