<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Pusat;
use App\Models\TenagaPengelola;
use Illuminate\Http\Request;

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
            'tenaga_pengelola_id' => 'required',
            'nama_bagian' => 'required'
        ]);
        
        Pusat::create([
            'tenaga_pengelola_id' => $request->tenaga_pengelola_id,
            'nama_bagian' => $request->nama_bagian,
            'tugas' => $request->tugas
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
