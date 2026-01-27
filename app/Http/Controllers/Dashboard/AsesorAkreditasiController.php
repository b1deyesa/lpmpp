<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AsesorAkreditasi;
use Illuminate\Http\Request;

class AsesorAkreditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.asesor-akreditasi', [
            'asesor_akreditasi' => AsesorAkreditasi::first()
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
        AsesorAkreditasi::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.asesor-akreditasi.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AsesorAkreditasi $asesorAkreditasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AsesorAkreditasi $asesorAkreditasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AsesorAkreditasi $asesorAkreditasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AsesorAkreditasi $asesorAkreditasi)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        AsesorAkreditasi::truncate();

        return redirect()->route('dashboard.asesor-akreditasi.index')->with('success', 'Successfully deleted all!');
    }
}