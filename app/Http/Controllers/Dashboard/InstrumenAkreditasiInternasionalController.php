<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\InstrumenAkreditasiInternasional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InstrumenAkreditasiInternasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.instrumen-akreditasi-internasional', [
            'instrumen_akreditasi_internasionals' => InstrumenAkreditasiInternasional::all()
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
    public function show(InstrumenAkreditasiInternasional $instrumenAkreditasiInternasional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstrumenAkreditasiInternasional $instrumenAkreditasiInternasional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstrumenAkreditasiInternasional $instrumenAkreditasiInternasional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstrumenAkreditasiInternasional $instrumenAkreditasiInternasional)
    {
        //
    }

    /**
     * Truncate all records in the table.
     */
    public function truncate(Request $request)
    {
        InstrumenAkreditasiInternasional::truncate();

        return redirect()->route('dashboard.instrumen-akreditasi-internasional.index')->with('success', 'Successfully deleted all!');
    }

    /**
     * Download a specific file.
     */
    public function download(Request $request, InstrumenAkreditasiInternasional $instrumenAkreditasiInternasional)
    {
        if (!Storage::disk('public')->exists($instrumenAkreditasiInternasional->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($instrumenAkreditasiInternasional->file, PATHINFO_EXTENSION);
        $filename = str($instrumenAkreditasiInternasional->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($instrumenAkreditasiInternasional->file, $filename);
    }
}