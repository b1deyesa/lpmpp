<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\InovasiPembelajaran;
use Illuminate\Http\Request;

class InovasiPembelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.inovasi-pembelajaran', [
            'inovasi_pembelajaran' => InovasiPembelajaran::first()
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
        InovasiPembelajaran::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.inovasi-pembelajaran.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(InovasiPembelajaran $inovasiPembelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InovasiPembelajaran $inovasiPembelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InovasiPembelajaran $inovasiPembelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InovasiPembelajaran $inovasiPembelajaran)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        InovasiPembelajaran::truncate();

        return redirect()->route('dashboard.inovasi-pembelajaran.index')->with('success', 'Successfully deleted all!');
    }
}