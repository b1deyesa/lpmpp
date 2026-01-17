<?php

namespace App\Http\Controllers\Dashboard;

use App\Imports\AkreditasiImport;
use App\Models\Akreditasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class AkreditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.akreditasi', [
            'akreditasis' => Akreditasi::all()
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Akreditasi $akreditasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akreditasi $akreditasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Akreditasi $akreditasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akreditasi $akreditasi)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        Akreditasi::query()->delete();

        return redirect()->route('dashboard.akreditasi.index')->with('success', 'Successfuly deleted all!');
    }
}
