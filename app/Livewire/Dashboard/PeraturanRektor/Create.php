<?php

namespace App\Livewire\Dashboard\PeraturanRektor;

use App\Models\PeraturanRektor;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $title;
    public $file;
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('peraturan-rektor', 'public');
        
        PeraturanRektor::create([
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.peraturan-rektor.index')->with('success', 'Success added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.peraturan-rektor.create');
    }
}