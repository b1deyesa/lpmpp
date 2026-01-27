<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AkreditasiInstitusi;
use Illuminate\Http\Request;

class AkreditasiInstitusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.akreditasi-institusi', [
            'akreditasi_institusi' => AkreditasiInstitusi::first()
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
        AkreditasiInstitusi::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );

        return redirect()->route('dashboard.akreditasi-institusi.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AkreditasiInstitusi $akreditasiInstitusi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkreditasiInstitusi $akreditasiInstitusi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AkreditasiInstitusi $akreditasiInstitusi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkreditasiInstitusi $akreditasiInstitusi)
    {
        //
    }

    public function truncate(Request $request)
    {
        AkreditasiInstitusi::truncate();

        return redirect()->route('dashboard.akreditasi-institusi.index')->with('success', 'Successfully deleted all!');
    }
}