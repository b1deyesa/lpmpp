<?php

namespace App\Livewire\Dashboard\MateriKegiatan;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\MateriKegiatan;
use App\Models\MateriKegiatanCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public MateriKegiatan $materi_kegiatan;
    public $materi_kegiatan_categories;
    public $title;
    public $materi_kegiatan_category_id;
    
    public function mount()
    {
        $this->materi_kegiatan_categories = MateriKegiatanCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->materi_kegiatan->title;
        $this->materi_kegiatan_category_id = $this->materi_kegiatan->materi_kegiatan_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->materi_kegiatan->update([
            'materi_kegiatan_category_id' => $this->materi_kegiatan_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.materi-kegiatan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.materi-kegiatan.edit', [
            'materi_kegiatan' => $this->materi_kegiatan
        ]);
    }
}