<?php

namespace App\Livewire\Dashboard\LayananBkd;

use App\Models\LayananBkd;
use App\Models\LayananBkdCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $layanan_bkd_categories;
    public $title;
    public $file;
    public $layanan_bkd_category_id;
    
    public function mount()
    {
        $this->layanan_bkd_categories = LayananBkdCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('layanan-bkd', 'public');
        
        LayananBkd::create([
            'layanan_bkd_category_id' => $this->layanan_bkd_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.layanan-bkd.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.layanan-bkd.create');
    }
}