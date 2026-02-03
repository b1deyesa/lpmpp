<?php

namespace App\Livewire\Dashboard\Laporan;

use App\Models\Laporan;
use App\Models\LaporanCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $laporan_categories;
    public $title;
    public $file;
    public $laporan_category_id;
    
    public function mount()
    {
        $this->laporan_categories = LaporanCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('laporan', 'public');
        
        Laporan::create([
            'laporan_category_id' => $this->laporan_category_id,
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
