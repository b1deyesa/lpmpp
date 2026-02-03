<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\DokumenMbkm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DokumenMbkmCategory;
use Illuminate\Support\Facades\Storage;

class DokumenMbkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dokumen-mbkm', [
            'dokumen_mbkm_categories' => DokumenMbkmCategory::all(),
            'dokumen_mbkms' => DokumenMbkm::whereNull('dokumen_mbkm_category_id')->get()
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
    public function show(DokumenMbkm $dokumenMbkm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DokumenMbkm $dokumenMbkm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DokumenMbkm $dokumenMbkm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DokumenMbkm $dokumenMbkm)
    {
        $dokumenMbkm->delete();
        
        return redirect()->route('dashboard.dokumen-mbkm.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        DokumenMbkmCategory::query()->delete();
        DokumenMbkm::truncate();

        return redirect()->route('dashboard.dokumen-mbkm.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, DokumenMbkm $dokumenMbkm)
    {
        if (!Storage::disk('public')->exists($dokumenMbkm->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($dokumenMbkm->file, PATHINFO_EXTENSION);

        $filename = str($dokumenMbkm->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($dokumenMbkm->file, $filename);
    }
}