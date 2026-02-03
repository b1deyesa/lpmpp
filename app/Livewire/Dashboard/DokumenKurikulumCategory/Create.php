<?php

namespace App\Livewire\Dashboard\DokumenKurikulumCategory;

use Livewire\Component;
use App\Models\DokumenKurikulumCategory;

class Create extends Component
{
    public $title;

    public function store()
    {
        $this->validate(['title' => 'required']);

        DokumenKurikulumCategory::create([
            'title' => $this->title
        ]);

        return redirect()->route('dashboard.dokumen-kurikulum.index');
    }

    public function render()
    {
        return view('livewire.dashboard.dokumen-kurikulum-category.create');
    }
}
