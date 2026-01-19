<?php

namespace App\Livewire\Dashboard\DokumenMbkm;

use App\Models\DokumenMbkm;
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
        
        $file = $this->file->store('dokumen-mbkm', 'public');
        
        DokumenMbkm::create([
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.dokumen-mbkm.index')->with('success', 'Success added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.dokumen-mbkm.create');
    }
}