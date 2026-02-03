<?php

namespace App\Livewire\Dashboard\DokumenKurikulum;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DokumenKurikulum;
use App\Models\DokumenKurikulumCategory;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $file;
    public $dokumen_kurikulum_category_id;
    public $dokumen_kurikulum_categories;

    public function mount()
    {
        $this->dokumen_kurikulum_categories =
            DokumenKurikulumCategory::pluck('title', 'id')->toJson();
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required'
        ]);

        $file = $this->file->store('dokumen-kurikulum', 'public');

        DokumenKurikulum::create([
            'dokumen_kurikulum_category_id' => $this->dokumen_kurikulum_category_id,
            'title' => $this->title,
            'file' => $file
        ]);

        return redirect()->route('dashboard.dokumen-kurikulum.index');
    }

    public function render()
    {
        return view('livewire.dashboard.dokumen-kurikulum.create');
    }
}