<?php

namespace App\Livewire\Dashboard\Laporan;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Laporan;
use App\Models\LaporanCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public Laporan $laporan;
    public $laporan_categories;
    public $title;
    public $laporan_category_id;
    
    public function mount()
    {
        $this->laporan_categories = LaporanCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->laporan->title;
        $this->laporan_category_id = $this->laporan->laporan_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->laporan->update([
            'laporan_category_id' => $this->laporan_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.laporan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.laporan.edit', [
            'laporan' => $this->laporan
        ]);
    }
}