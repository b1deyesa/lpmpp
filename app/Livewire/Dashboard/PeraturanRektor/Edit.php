<?php

namespace App\Livewire\Dashboard\PeraturanRektor;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PeraturanRektor;
use App\Models\PeraturanRektorCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public PeraturanRektor $peraturan_rektor;
    public $peraturan_rektor_categories;
    public $title;
    public $peraturan_rektor_category_id;
    
    public function mount()
    {
        $this->peraturan_rektor_categories = PeraturanRektorCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->peraturan_rektor->title;
        $this->peraturan_rektor_category_id = $this->peraturan_rektor->peraturan_rektor_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->peraturan_rektor->update([
            'peraturan_rektor_category_id' => $this->peraturan_rektor_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.peraturan-rektor.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.peraturan-rektor.edit', [
            'peraturan_rektor' => $this->peraturan_rektor
        ]);
    }
}
