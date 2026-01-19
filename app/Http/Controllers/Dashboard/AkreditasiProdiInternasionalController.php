<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AkreditasiProdiInternasional;
use Illuminate\Http\Request;

class AkreditasiProdiInternasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.akreditasi-prodi-internasional', [
            'akreditasi_prodi_internasional' => AkreditasiProdiInternasional::first()
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
        AkreditasiProdiInternasional::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.akreditasi-prodi-internasional.index')->with('success', 'Success Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AkreditasiProdiInternasional $akreditasiProdiInternasional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkreditasiProdiInternasional $akreditasiProdiInternasional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AkreditasiProdiInternasional $akreditasiProdiInternasional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkreditasiProdiInternasional $akreditasiProdiInternasional)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        AkreditasiProdiInternasional::truncate();

        return redirect()->route('dashboard.akreditasi-prodi-internasional.index')->with('success', 'Successfully deleted all!');
    }
}