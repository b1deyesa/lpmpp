<?php

namespace App\Livewire\Dashboard\InovasiPembelajaranCategory;

use App\Models\InovasiPembelajaranCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        InovasiPembelajaranCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.inovasi-pembelajaran.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.inovasi-pembelajaran-category.create');
    }
}