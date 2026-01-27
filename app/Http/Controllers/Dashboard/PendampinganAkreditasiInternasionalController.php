<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PendampinganAkreditasiInternasional;
use Illuminate\Http\Request;

class PendampinganAkreditasiInternasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pendampingan-akreditasi-internasional', [
            'pendampingan_akreditasi_internasional' => PendampinganAkreditasiInternasional::first()
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
        PendampinganAkreditasiInternasional::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.pendampingan-akreditasi-internasional.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PendampinganAkreditasiInternasional $pendampinganAkreditasiInternasional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PendampinganAkreditasiInternasional $pendampinganAkreditasiInternasional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendampinganAkreditasiInternasional $pendampinganAkreditasiInternasional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendampinganAkreditasiInternasional $pendampinganAkreditasiInternasional)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        PendampinganAkreditasiInternasional::truncate();

        return redirect()->route('dashboard.pendampingan-akreditasi-internasional.index')->with('success', 'Successfully deleted all!');
    }
}