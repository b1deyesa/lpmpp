<?php

namespace App\Livewire\Dashboard\Pelatihan;

use App\Models\Pelatihan;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        Pelatihan::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.pelatihan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pelatihan.create');
    }
}