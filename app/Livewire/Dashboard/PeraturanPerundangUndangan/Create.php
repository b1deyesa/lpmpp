<?php

namespace App\Livewire\Dashboard\PeraturanPerundangUndangan;

use App\Models\PeraturanPerundangUndangan;
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
        
        $file = $this->file->store('peraturan-perundang-undangan', 'public');
        
        PeraturanPerundangUndangan::create([
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.peraturan-perundang-undangan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.peraturan-perundang-undangan.create');
    }
}