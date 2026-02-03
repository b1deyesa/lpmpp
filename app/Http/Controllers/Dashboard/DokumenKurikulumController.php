<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\DokumenKurikulum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DokumenKurikulumCategory;
use Illuminate\Support\Facades\Storage;

class DokumenKurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dokumen-kurikulum', [
            'dokumen_kurikulum_categories' => DokumenKurikulumCategory::all(),
            'dokumen_kurikulums' => DokumenKurikulum::whereNull('dokumen_kurikulum_category_id')->get()
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
    public function show(DokumenKurikulum $dokumenKurikulum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DokumenKurikulum $dokumenKurikulum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DokumenKurikulum $dokumenKurikulum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DokumenKurikulum $dokumenKurikulum)
    {
        $dokumenKurikulum->delete();
        
        return redirect()->route('dashboard.dokumen-kurikulum.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        DokumenKurikulumCategory::query()->delete();
        DokumenKurikulum::truncate();

        return redirect()->route('dashboard.dokumen-kurikulum.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, DokumenKurikulum $dokumenKurikulum)
    {
        if (!Storage::disk('public')->exists($dokumenKurikulum->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($dokumenKurikulum->file, PATHINFO_EXTENSION);

        $filename = str($dokumenKurikulum->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($dokumenKurikulum->file, $filename);
    }
}