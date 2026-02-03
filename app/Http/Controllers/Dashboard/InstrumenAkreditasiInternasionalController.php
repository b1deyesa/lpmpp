<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\InstrumenAkreditasiInternasional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InstrumenAkreditasiInternasionalCategory;
use Illuminate\Support\Facades\Storage;

class InstrumenAkreditasiInternasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.instrumen-akreditasi-internasional', [
            'instrumen_akreditasi_internasional_categories' => InstrumenAkreditasiInternasionalCategory::all(),
            'instrumen_akreditasi_internasionals' => InstrumenAkreditasiInternasional::whereNull('instrumen_akreditasi_internasional_category_id')->get()
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
    public function destroy(InstrumenAkreditasiInternasional $iai)
    {
        $iai->delete();
        
        return redirect()->route('dashboard.instrumen-akreditasi-internasional.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        InstrumenAkreditasiInternasionalCategory::query()->delete();
        InstrumenAkreditasiInternasional::truncate();

        return redirect()->route('dashboard.instrumen-akreditasi-internasional.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, InstrumenAkreditasiInternasional $iai)
    {
        if (!Storage::disk('public')->exists($instrumenAkreditasiInternasional->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($instrumenAkreditasiInternasional->file, PATHINFO_EXTENSION);

        $filename = str($instrumenAkreditasiInternasional->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($instrumenAkreditasiInternasional->file, $filename);
    }
}