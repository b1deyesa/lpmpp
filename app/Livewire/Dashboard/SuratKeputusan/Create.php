<?php

namespace App\Livewire\Dashboard\SuratKeputusan;

use App\Models\SuratKeputusan;
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
        
        $file = $this->file->store('surat-keputusan', 'public');
        
        SuratKeputusan::create([
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.surat-keputusan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.surat-keputusan.create');
    }
}