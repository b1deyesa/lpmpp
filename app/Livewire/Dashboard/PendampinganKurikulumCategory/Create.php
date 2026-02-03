<?php

namespace App\Livewire\Dashboard\PendampinganKurikulumCategory;

use App\Models\PendampinganKurikulumCategory;
use Livewire\Component;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        PendampinganKurikulumCategory::create([
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.pendampingan-kurikulum.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pendampingan-kurikulum-category.create');
    }
}