<?php

namespace App\Livewire\Dashboard\Pelatihan;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Pelatihan;
use App\Models\PelatihanCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public Pelatihan $pelatihan;
    public $pelatihan_categories;
    public $title;
    public $pelatihan_category_id;
    
    public function mount()
    {
        $this->pelatihan_categories = PelatihanCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->pelatihan->title;
        $this->pelatihan_category_id = $this->pelatihan->pelatihan_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->pelatihan->update([
            'pelatihan_category_id' => $this->pelatihan_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.pelatihan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pelatihan.edit', [
            'pelatihan' => $this->pelatihan
        ]);
    }
}