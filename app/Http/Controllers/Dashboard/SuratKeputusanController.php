<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\SuratKeputusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SuratKeputusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.surat-keputusan', [
            'surat_keputusans' => SuratKeputusan::all()
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
    public function show(SuratKeputusan $suratKeputusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratKeputusan $suratKeputusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratKeputusan $suratKeputusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratKeputusan $suratKeputusan)
    {
        //
    }

    /**
     * Truncate all records in the table.
     */
    public function truncate(Request $request)
    {
        SuratKeputusan::truncate();

        return redirect()->route('dashboard.surat-keputusan.index')->with('success', 'Successfully deleted all!');
    }

    /**
     * Download a specific file.
     */
    public function download(Request $request, SuratKeputusan $suratKeputusan)
    {
        if (!Storage::disk('public')->exists($suratKeputusan->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($suratKeputusan->file, PATHINFO_EXTENSION);
        $filename = str($suratKeputusan->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($suratKeputusan->file, $filename);
    }
}