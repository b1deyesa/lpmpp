<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\PendampinganAkreditasiInternasional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PendampinganAkreditasiInternasionalCategory;
use Illuminate\Support\Facades\Storage;

class PendampinganAkreditasiInternasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pendampingan-akreditasi-internasional', [
            'pendampingan_akreditasi_internasional_categories' => PendampinganAkreditasiInternasionalCategory::all(),
            'pendampingan_akreditasi_internasionals' => PendampinganAkreditasiInternasional::whereNull('pendampingan_akreditasi_internasional_category_id')->get()
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
    public function show(PendampinganAkreditasiInternasional $pendampinganAkreditasiInternasional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PendampinganAkreditasiInternasional $pendampinganAkreditasiInternasional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendampinganAkreditasiInternasional $pendampinganAkreditasiInternasional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendampinganAkreditasiInternasional $pai)
    {
        $pai->delete();
        
        return redirect()->route('dashboard.pendampingan-akreditasi-internasional.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        PendampinganAkreditasiInternasionalCategory::query()->delete();
        PendampinganAkreditasiInternasional::truncate();

        return redirect()->route('dashboard.pendampingan-akreditasi-internasional.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, PendampinganAkreditasiInternasional $pai)
    {
        if (!Storage::disk('public')->exists($pai->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($pai->file, PATHINFO_EXTENSION);

        $filename = str($pai->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($pai->file, $filename);
    }
}