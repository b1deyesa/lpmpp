<?php

namespace App\Livewire\Dashboard\PendampinganAkreditasiInternasionalCategory;

use App\Models\PendampinganAkreditasiInternasionalCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        PendampinganAkreditasiInternasionalCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.pendampingan-akreditasi-internasional.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pendampingan-akreditasi-internasional-category.create');
    }
}