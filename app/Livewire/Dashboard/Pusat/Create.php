<?php

namespace App\Livewire\Dashboard\Pusat;

use App\Models\Pusat;
use Livewire\Component;
use App\Models\Pengelola;
use Illuminate\Support\Str;

class Create extends Component
{
    public $nama_bagian;
    public $singkatan_bagian;
    public $tugas;
    public $email;
    public $no_telp;
    public $pengelolas;
    public $selectedPengelola;
    public $anggota = [];

    public function mount()
    {
        $this->pengelolas = Pengelola::pluck('nama', 'id')->toArray();
    }

    public function add()
    {
        if (!$this->selectedPengelola) return;

        if (collect($this->anggota)->pluck('pengelola_id')->contains($this->selectedPengelola)) {
            $this->selectedPengelola = null;
            return;
        }

        $this->anggota[] = [
            'pengelola_id' => $this->selectedPengelola,
            'nama' => $this->pengelolas[$this->selectedPengelola],
            'jabatan' => '',
        ];

        $this->selectedPengelola = null;
    }

    public function remove($index)
    {
        unset($this->anggota[$index]);
        $this->anggota = array_values($this->anggota);
    }
    
    public function store()
    {
        $this->validate([
            'nama_bagian' => 'required'
        ]);
        
        $singkatan_bagian = Str::lower($this->singkatan_bagian ?? Str::of($this->nama_bagian)->explode(' ')->map(fn ($w) => $w[0])->implode(''));
        
        if (Pusat::where('singkatan_bagian', $singkatan_bagian)->exists()) {
            $this->addError('singkatan_bagian', 'Singkatan Pusat already exists.');
            return;
        }
        
        Pusat::create([
            'nama_bagian' => $this->nama_bagian,
            'singkatan_bagian' => $singkatan_bagian,
            'anggota' => json_encode($this->anggota),
            'tugas' => $this->tugas,
            'email' => $this->email,
            'no_telp' => $this->no_telp
        ]);
        
        return redirect()->route('dashboard.pusat.index')->with('success', 'Success added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.pusat.create');
    }
}
