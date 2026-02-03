<?php

namespace App\Livewire\Dashboard\InovasiPembelajaran;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\InovasiPembelajaran;
use App\Models\InovasiPembelajaranCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public InovasiPembelajaran $inovasi_pembelajaran;
    public $inovasi_pembelajaran_categories;
    public $title;
    public $inovasi_pembelajaran_category_id;
    
    public function mount()
    {
        $this->inovasi_pembelajaran_categories = InovasiPembelajaranCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->inovasi_pembelajaran->title;
        $this->inovasi_pembelajaran_category_id = $this->inovasi_pembelajaran->inovasi_pembelajaran_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->inovasi_pembelajaran->update([
            'inovasi_pembelajaran_category_id' => $this->inovasi_pembelajaran_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.inovasi-pembelajaran.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.inovasi-pembelajaran.edit', [
            'inovasi_pembelajaran' => $this->inovasi_pembelajaran
        ]);
    }
}