<?php

namespace App\Livewire\Dashboard\Sertifikat;

use App\Models\Sertifikat;
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
        
        $file = $this->file->store('sertifikat', 'public');
        
        Sertifikat::create([
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.sertifikat.index')->with('success', 'Success added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.sertifikat.create');
    }
}