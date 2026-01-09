<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\TenagaPengelola;
use Illuminate\Http\Request;

class TenagaPengelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.tenaga-pengelola', [
            'tenaga_pengelolas' => TenagaPengelola::all()
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
            'nama' => 'required'
        ]);
        
        TenagaPengelola::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'nidn' => $request->nidn,
            'jabatan' => $request->jabatan,
            'program_studi' => $request->program_studi,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'id_scopus' => $request->id_scopus,
            'id_sinta' => $request->id_sinta,
            'tugas' => $request->tugas
        ]);
        
        return redirect()->route('dashboard.tenaga-pengelola.index')->with('success', 'Success added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TenagaPengelola $tenagaPengelola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TenagaPengelola $tenagaPengelola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TenagaPengelola $tenagaPengelola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TenagaPengelola $tenagaPengelola)
    {
        //
    }
}
