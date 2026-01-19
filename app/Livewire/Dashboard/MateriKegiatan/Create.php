<?php

namespace App\Livewire\Dashboard\MateriKegiatan;

use App\Models\MateriKegiatan;
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
        
        $file = $this->file->store('materi-kegiatan', 'public');
        
        MateriKegiatan::create([
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.materi-kegiatan.index')->with('success', 'Success added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.materi-kegiatan.create');
    }
}