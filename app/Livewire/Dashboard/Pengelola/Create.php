<?php

namespace App\Livewire\Dashboard\Pengelola;

use Livewire\Component;
use App\Models\Pengelola;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $nama;
    public $nip;
    public $nidn;
    public $jabatan;
    public $program_studi;
    public $jurusan;
    public $fakultas;
    public $email;
    public $no_telp;
    public $id_scopus;
    public $id_sinta;
    public $photo;
    public $tugas;
    
    public function store()
    {
        $this->validate([
            'nama' => 'required'
        ]);
        
        if ($this->photo) {
            $photoPath = $this->photo->store('pengelola', 'public');
        }
        
        Pengelola::create([
            'nama' => $this->nama,
            'nip' => $this->nip,
            'nidn' => $this->nidn,
            'jabatan' => $this->jabatan,
            'program_studi' => $this->program_studi,
            'jurusan' => $this->jurusan,
            'fakultas' => $this->fakultas,
            'email' => $this->email,
            'no_telp' => $this->no_telp,
            'id_scopus' => $this->id_scopus,
            'id_sinta' => $this->id_sinta,
            'photo' => $photoPath ?? null,
            'tugas' => $this->tugas
        ]);
        
        return redirect()->route('dashboard.pengelola.index')->with('success', 'Success added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pengelola.create');
    }
}
