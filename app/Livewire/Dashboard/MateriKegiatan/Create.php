<?php

namespace App\Livewire\Dashboard\MateriKegiatan;

use App\Models\MateriKegiatan;
use App\Models\MateriKegiatanCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $materi_kegiatan_categories;
    public $title;
    public $file;
    public $materi_kegiatan_category_id;
    
    public function mount()
    {
        $this->materi_kegiatan_categories = MateriKegiatanCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('materi-kegiatan', 'public');
        
        MateriKegiatan::create([
            'materi_kegiatan_category_id' => $this->materi_kegiatan_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.materi-kegiatan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.materi-kegiatan.create');
    }
}