<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\PendampinganAkreditasiNasional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PendampinganAkreditasiNasionalCategory;
use Illuminate\Support\Facades\Storage;

class PendampinganAkreditasiNasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pendampingan-akreditasi-nasional', [
            'pendampingan_akreditasi_nasional_categories' => PendampinganAkreditasiNasionalCategory::all(),
            'pendampingan_akreditasi_nasionals' => PendampinganAkreditasiNasional::whereNull('pendampingan_akreditasi_nasional_category_id')->get()
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
    public function show(PendampinganAkreditasiNasional $pendampinganAkreditasiNasional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PendampinganAkreditasiNasional $pendampinganAkreditasiNasional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendampinganAkreditasiNasional $pendampinganAkreditasiNasional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendampinganAkreditasiNasional $pendampinganAkreditasiNasional)
    {
        $pendampinganAkreditasiNasional->delete();
        
        return redirect()->route('dashboard.pendampingan-akreditasi-nasional.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        PendampinganAkreditasiNasionalCategory::query()->delete();
        PendampinganAkreditasiNasional::truncate();

        return redirect()->route('dashboard.pendampingan-akreditasi-nasional.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, PendampinganAkreditasiNasional $pan)
    {
        if (!Storage::disk('public')->exists($pan->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($pan->file, PATHINFO_EXTENSION);

        $filename = str($pan->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($pan->file, $filename);
    }
}