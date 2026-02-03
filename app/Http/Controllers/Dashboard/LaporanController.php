<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LaporanCategory;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.laporan', [
            'laporan_categories' => LaporanCategory::all(),
            'laporans' => Laporan::whereNull('laporan_category_id')->get()
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
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        
        return redirect()->route('dashboard.laporan.index')->with('success', 'Successfully deleted!');
    }
    
    public function truncate(Request $request)
    {
        LaporanCategory::query()->delete();
        Laporan::truncate();

        return redirect()->route('dashboard.laporan.index')->with('success', 'Successfully deleted all!');
    }
    
    public function download(Request $request, Laporan $laporan)
    {
        if (!Storage::disk('public')->exists($laporan->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($laporan->file, PATHINFO_EXTENSION);

        $filename = str($laporan->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($laporan->file, $filename);
    }
}
