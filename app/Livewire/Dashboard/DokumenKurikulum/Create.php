<?php

namespace App\Livewire\Dashboard\DokumenKurikulum;

use App\Models\DokumenKurikulum;
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
        
        $file = $this->file->store('dokumen-kurikulum', 'public');
        
        DokumenKurikulum::create([
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.dokumen-kurikulum.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.dokumen-kurikulum.create');
    }
}
