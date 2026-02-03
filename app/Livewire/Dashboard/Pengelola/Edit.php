<?php

namespace App\Livewire\Dashboard\Pengelola;

use Livewire\Component;
use App\Models\Pengelola;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    
    public Pengelola $pengelola;
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
    
    public function mount()
    {
        $this->nama = $this->pengelola->nama;
        $this->nip = $this->pengelola->nip;
        $this->nidn = $this->pengelola->nidn;
        $this->jabatan = $this->pengelola->jabatan;
        $this->program_studi = $this->pengelola->program_studi;
        $this->jurusan = $this->pengelola->jurusan;
        $this->fakultas = $this->pengelola->fakultas;
        $this->email = $this->pengelola->email;
        $this->no_telp = $this->pengelola->no_telp;
        $this->id_scopus = $this->pengelola->id_scopus;
        $this->id_sinta = $this->pengelola->id_sinta;
        $this->photo = $this->pengelola->photo;
        $this->tugas = $this->pengelola->tugas;
    }
    
    public function update()
    {
        $this->validate([
            'nama' => 'required'
        ]);
        
        
        if ($this->photo !== $this->pengelola->photo) {
            $photoPath = $this->photo->store('pengelola', 'public');
        }
        
        $this->pengelola->update([
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
            'photo' => $photoPath ?? $this->pengelola->photo,
            'tugas' => $this->tugas
        ]);
        
        return redirect()->route('dashboard.pengelola.index')->with('success', 'Successfully updated!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pengelola.edit', [
            'pengelola' => $this->pengelola
        ]);
    }
}
