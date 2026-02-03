<?php

namespace App\Livewire\Dashboard\PendampinganKurikulum;

use App\Models\PendampinganKurikulum;
use App\Models\PendampinganKurikulumCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $pendampingan_kurikulum_categories;
    public $title;
    public $file;
    public $pendampingan_kurikulum_category_id;
    
    public function mount()
    {
        $this->pendampingan_kurikulum_categories = PendampinganKurikulumCategory::all()->pluck('title', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);
        
        $file = $this->file->store('pendampingan-kurikulum', 'public');
        
        PendampinganKurikulum::create([
            'pendampingan_kurikulum_category_id' => $this->pendampingan_kurikulum_category_id,
            'title' => $this->title,
            'file' => $file
        ]);
        
        return redirect()->route('dashboard.pendampingan-kurikulum.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pendampingan-kurikulum.create');
    }
}