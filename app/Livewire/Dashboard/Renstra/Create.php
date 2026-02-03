<?php

namespace App\Livewire\Dashboard\Renstra;

use App\Models\Renstra;
use App\Models\RenstraCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $renstra_categories;
    public $title;
    public $file;
    public $renstra_category_id;
    
    public function mount()
    {
        $this->renstra_categories = RenstraCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('renstra', 'public');
        
        Renstra::create([
            'renstra_category_id' => $this->renstra_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.renstra.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.renstra.create');
    }
}