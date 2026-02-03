<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Sertifikat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SertifikatCategory;
use Illuminate\Support\Facades\Storage;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.sertifikat', [
            'sertifikat_categories' => SertifikatCategory::all(),
            'sertifikats' => Sertifikat::whereNull('sertifikat_category_id')->get()
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
    public function show(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertifikat $sertifikat)
    {
        $sertifikat->delete();
        
        return redirect()->route('dashboard.sertifikat.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        SertifikatCategory::query()->delete();
        Sertifikat::truncate();

        return redirect()->route('dashboard.sertifikat.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, Sertifikat $sertifikat)
    {
        if (!Storage::disk('public')->exists($sertifikat->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($sertifikat->file, PATHINFO_EXTENSION);

        $filename = str($sertifikat->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($sertifikat->file, $filename);
    }
}