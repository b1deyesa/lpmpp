<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\TugasFungsi;
use Illuminate\Http\Request;

class TugasFungsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.tugas-fungsi', [
            'tugas_fungsi' => TugasFungsi::first()
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
        TugasFungsi::updateOrCreate(
            ['id' => 1],
            [
                'tugas' => $request->tugas,
                'fungsi' => $request->fungsi
            ]
        );
        
        return redirect()->route('dashboard.tugas-fungsi.index')->with('success', 'Success Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasFungsi $tugasFungsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TugasFungsi $tugasFungsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TugasFungsi $tugasFungsi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TugasFungsi $tugasFungsi)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        TugasFungsi::truncate();

        return redirect()->route('dashboard.tugas-fungsi.index')->with('success', 'Successfuly deleted all!');
    }
}