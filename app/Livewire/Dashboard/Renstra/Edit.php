<?php

namespace App\Livewire\Dashboard\Renstra;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Renstra;
use App\Models\RenstraCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public Renstra $renstra;
    public $renstra_categories;
    public $title;
    public $renstra_category_id;
    
    public function mount()
    {
        $this->renstra_categories = RenstraCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->renstra->title;
        $this->renstra_category_id = $this->renstra->renstra_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->renstra->update([
            'renstra_category_id' => $this->renstra_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.renstra.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.renstra.edit', [
            'renstra' => $this->renstra
        ]);
    }
}