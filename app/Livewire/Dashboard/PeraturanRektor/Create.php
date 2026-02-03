<?php

namespace App\Livewire\Dashboard\PeraturanRektor;

use App\Models\PeraturanRektor;
use App\Models\PeraturanRektorCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $peraturan_rektor_categories;
    public $title;
    public $file;
    public $peraturan_rektor_category_id;
    
    public function mount()
    {
        $this->peraturan_rektor_categories = PeraturanRektorCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('peraturan-rektor', 'public');
        
        PeraturanRektor::create([
            'peraturan_rektor_category_id' => $this->peraturan_rektor_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.peraturan-rektor.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.peraturan-rektor.create');
    }
}