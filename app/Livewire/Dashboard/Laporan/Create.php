<?php

namespace App\Livewire\Dashboard\Laporan;

use App\Models\Laporan;
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
        
        $file = $this->file->store('laporan', 'public');
        
        Laporan::create([
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.laporan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.laporan.create');
    }
}
