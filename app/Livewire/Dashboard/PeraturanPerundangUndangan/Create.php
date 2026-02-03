<?php

namespace App\Livewire\Dashboard\PeraturanPerundangUndangan;

use App\Models\PeraturanPerundangUndangan;
use App\Models\PeraturanPerundangUndanganCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $peraturan_perundang_undangan_categories;
    public $title;
    public $file;
    public $peraturan_perundang_undangan_category_id;
    
    public function mount()
    {
        $this->peraturan_perundang_undangan_categories = PeraturanPerundangUndanganCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('peraturan-perundang-undangan', 'public');
        
        PeraturanPerundangUndangan::create([
            'peraturan_perundang_undangan_category_id' => $this->peraturan_perundang_undangan_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.peraturan-perundang-undangan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.peraturan-perundang-undangan.create');
    }
}