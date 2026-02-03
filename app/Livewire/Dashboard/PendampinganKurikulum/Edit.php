<?php

namespace App\Livewire\Dashboard\PendampinganKurikulum;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PendampinganKurikulum;
use App\Models\PendampinganKurikulumCategory;

class Edit extends Component
{
    use WithFileUploads;
    
    public PendampinganKurikulum $pendampingan_kurikulum;
    public $pendampingan_kurikulum_categories;
    public $title;
    public $pendampingan_kurikulum_category_id;
    
    public function mount()
    {
        $this->pendampingan_kurikulum_categories = PendampinganKurikulumCategory::all()->pluck('title', 'id')->toJson();
        $this->title = $this->pendampingan_kurikulum->title;
        $this->pendampingan_kurikulum_category_id = $this->pendampingan_kurikulum->pendampingan_kurikulum_category_id;
    }
    
    public function update()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        $this->pendampingan_kurikulum->update([
            'pendampingan_kurikulum_category_id' => $this->pendampingan_kurikulum_category_id,
            'title' => $this->title
        ]);
        
        return redirect()->route('dashboard.pendampingan-kurikulum.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pendampingan-kurikulum.edit', [
            'pendampingan_kurikulum' => $this->pendampingan_kurikulum
        ]);
    }
}