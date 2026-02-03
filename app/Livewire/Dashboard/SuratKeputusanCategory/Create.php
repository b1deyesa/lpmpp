<?php

namespace App\Livewire\Dashboard\SuratKeputusanCategory;

use Livewire\Component;
use App\Models\SuratKeputusanCategory;

class Create extends Component
{
    public $title;

    public function store()
    {
        $this->validate([
            'title' => 'required',
        ]);

        SuratKeputusanCategory::create([
            'title' => $this->title,
        ]);

        return redirect()->route('dashboard.surat-keputusan.index')->with('success', 'Created successfully!');
    }

    public function render()
    {
        return view('livewire.dashboard.surat-keputusan-category.create');
    }
}