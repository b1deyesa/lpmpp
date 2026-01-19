<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Sertifikat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.sertifikat', [
            'sertifikats' => Sertifikat::all()
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
        //
    }

    /**
     * Truncate all records in the table.
     */
    public function truncate(Request $request)
    {
        Sertifikat::truncate();

        return redirect()->route('dashboard.sertifikat.index')->with('success', 'Successfully deleted all!');
    }

    /**
     * Download a specific file.
     */
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