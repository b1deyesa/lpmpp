<?php

namespace App\Livewire\Dashboard\PeraturanPerundangUndangan;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PeraturanPerundangUndangan;
use App\Models\PeraturanPerundangUndanganCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public PeraturanPerundangUndangan $peraturan_perundang_undangan;
    public $peraturan_perundang_undangan_categories;
    public $title;
    public $peraturan_perundang_undangan_category_id;
    
    public function mount()
    {
        $this->peraturan_perundang_undangan_categories = PeraturanPerundangUndanganCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->peraturan_perundang_undangan->title;
        $this->peraturan_perundang_undangan_category_id = $this->peraturan_perundang_undangan->peraturan_perundang_undangan_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->peraturan_perundang_undangan->update([
            'peraturan_perundang_undangan_category_id' => $this->peraturan_perundang_undangan_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.peraturan-perundang-undangan.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.peraturan-perundang-undangan.edit', [
            'peraturan_perundang_undangan' => $this->peraturan_perundang_undangan
        ]);
    }
}