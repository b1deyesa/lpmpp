<?php

namespace App\Livewire\Dashboard\LaporanCategory;

use App\Models\LaporanCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        LaporanCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.laporan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.laporan-category.create');
    }
}
