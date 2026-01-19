<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AkreditasiProdiNasional;
use Illuminate\Http\Request;

class AkreditasiProdiNasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.akreditasi-prodi-nasional', [
            'akreditasi_prodi_nasional' => AkreditasiProdiNasional::first()
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
        AkreditasiProdiNasional::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.akreditasi-prodi-nasional.index')->with('success', 'Success Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AkreditasiProdiNasional $akreditasiProdiNasional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkreditasiProdiNasional $akreditasiProdiNasional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AkreditasiProdiNasional $akreditasiProdiNasional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkreditasiProdiNasional $akreditasiProdiNasional)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        AkreditasiProdiNasional::truncate();

        return redirect()->route('dashboard.akreditasi-prodi-nasional.index')->with('success', 'Successfully deleted all!');
    }
}