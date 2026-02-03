<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\InstrumenAkreditasiNasional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InstrumenAkreditasiNasionalCategory;
use Illuminate\Support\Facades\Storage;

class InstrumenAkreditasiNasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.instrumen-akreditasi-nasional', [
            'instrumen_akreditasi_nasional_categories' => InstrumenAkreditasiNasionalCategory::all(),
            'instrumen_akreditasi_nasionals' => InstrumenAkreditasiNasional::whereNull('instrumen_akreditasi_nasional_category_id')->get()
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
        $instrumenAkreditasiNasional->delete();
        
        return redirect()->route('dashboard.instrumen-akreditasi-nasional.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        InstrumenAkreditasiNasionalCategory::query()->delete();
        InstrumenAkreditasiNasional::truncate();

        return redirect()->route('dashboard.instrumen-akreditasi-nasional.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, InstrumenAkreditasiNasional $ian)
    {
        if (!Storage::disk('public')->exists($instrumenAkreditasiNasional->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($instrumenAkreditasiNasional->file, PATHINFO_EXTENSION);

        $filename = str($instrumenAkreditasiNasional->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($instrumenAkreditasiNasional->file, $filename);
    }
}