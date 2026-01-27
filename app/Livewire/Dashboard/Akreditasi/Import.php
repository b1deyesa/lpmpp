<?php

namespace App\Livewire\Dashboard\Akreditasi;

use Livewire\Component;
use App\Imports\AkreditasiImport;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class Import extends Component
{
    use WithFileUploads;
    public $file;
    
    public function store()
    {
        $this->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new AkreditasiImport, $this->file);

        return redirect()->route('dashboard.akreditasi.index')->with('success', 'Successfully imported!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.akreditasi.import');
    }
}
