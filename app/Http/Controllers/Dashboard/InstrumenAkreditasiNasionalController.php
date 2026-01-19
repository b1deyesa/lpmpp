<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\InstrumenAkreditasiNasional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InstrumenAkreditasiNasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.instrumen-akreditasi-nasional', [
            'instrumen_akreditasi_nasionals' => InstrumenAkreditasiNasional::all()
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
    public function show(InstrumenAkreditasiNasional $instrumenAkreditasiNasional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstrumenAkreditasiNasional $instrumenAkreditasiNasional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstrumenAkreditasiNasional $instrumenAkreditasiNasional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstrumenAkreditasiNasional $instrumenAkreditasiNasional)
    {
        //
    }

    /**
     * Truncate all records in the table.
     */
    public function truncate(Request $request)
    {
        InstrumenAkreditasiNasional::truncate();

        return redirect()->route('dashboard.instrumen-akreditasi-nasional.index')->with('success', 'Successfully deleted all!');
    }

    /**
     * Download a specific file.
     */
    public function download(Request $request, InstrumenAkreditasiNasional $instrumenAkreditasiNasional)
    {
        if (!Storage::disk('public')->exists($instrumenAkreditasiNasional->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($instrumenAkreditasiNasional->file, PATHINFO_EXTENSION);
        $filename = str($instrumenAkreditasiNasional->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($instrumenAkreditasiNasional->file, $filename);
    }
}