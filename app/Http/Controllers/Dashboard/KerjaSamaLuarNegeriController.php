<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\KerjaSamaLuarNegeri;
use Illuminate\Http\Request;

class KerjaSamaLuarNegeriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kerja-sama-luar-negeri', [
            'kerja_sama_luar_negeri' => KerjaSamaLuarNegeri::first()
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
        KerjaSamaLuarNegeri::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.kerja-sama-luar-negeri.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KerjaSamaLuarNegeri $kerjaSamaLuarNegeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KerjaSamaLuarNegeri $kerjaSamaLuarNegeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KerjaSamaLuarNegeri $kerjaSamaLuarNegeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KerjaSamaLuarNegeri $kerjaSamaLuarNegeri)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        KerjaSamaLuarNegeri::truncate();

        return redirect()->route('dashboard.kerja-sama-luar-negeri.index')->with('success', 'Successfully deleted all!');
    }
}
