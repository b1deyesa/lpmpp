<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Pusat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TenagaPengelola;
use App\Http\Controllers\Controller;

class PusatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pusat', [
            'pusats' => Pusat::all(),
            'tenaga_pengelolas' => TenagaPengelola::all()->pluck('nama', 'id')->toJson()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bagian' => 'required'
        ]);
        
        Pusat::create([
            'nama_bagian' => $request->nama_bagian,
            'singkatan_bagian' => Str::lower($request->singkatan_bagian ?? Str::of($request->nama_bagian)->explode(' ')->map(fn ($w) => $w[0])->implode('')),
            'anggota' => json_encode($request->anggota),
            'tugas' => $request->tugas,
            'email' => $request->email,
            'no_telp' => $request->no_telp
        ]);
        
        return redirect()->route('dashboard.pusat.index')->with('success', 'Success added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pusat $pusat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pusat $pusat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pusat $pusat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pusat $pusat)
    {
        //
    }
}
