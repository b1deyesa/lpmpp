<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PendampinganAkreditasiNasional;
use Illuminate\Http\Request;

class PendampinganAkreditasiNasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pendampingan-akreditasi-nasional', [
            'pendampingan_akreditasi_nasional' => PendampinganAkreditasiNasional::first()
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
        PendampinganAkreditasiNasional::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.pendampingan-akreditasi-nasional.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PendampinganAkreditasiNasional $pendampinganAkreditasiNasional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PendampinganAkreditasiNasional $pendampinganAkreditasiNasional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendampinganAkreditasiNasional $pendampinganAkreditasiNasional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendampinganAkreditasiNasional $pendampinganAkreditasiNasional)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        PendampinganAkreditasiNasional::truncate();

        return redirect()->route('dashboard.pendampingan-akreditasi-nasional.index')->with('success', 'Successfully deleted all!');
    }
}