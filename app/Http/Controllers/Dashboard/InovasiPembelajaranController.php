<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\InovasiPembelajaran;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\InovasiPembelajaranCategory;

class InovasiPembelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.inovasi-pembelajaran', [
            'inovasi_pembelajaran_categories' => InovasiPembelajaranCategory::all(),
            'inovasi_pembelajarans' => InovasiPembelajaran::whereNull('inovasi_pembelajaran_category_id')->get()
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
    public function show(InovasiPembelajaran $inovasiPembelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InovasiPembelajaran $inovasiPembelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InovasiPembelajaran $inovasiPembelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InovasiPembelajaran $inovasiPembelajaran)
    {
        $inovasiPembelajaran->delete();
        
        return redirect()->route('dashboard.inovasi-pembelajaran.index')->with('success', 'Successfully deleted!');
    }
    
    public function truncate(Request $request)
    {
        InovasiPembelajaranCategory::query()->delete();
        InovasiPembelajaran::truncate();
        
        return redirect()->route('dashboard.inovasi-pembelajaran.index')->with('success', 'Successfully deleted all!');
    }
    
    public function download(Request $request, InovasiPembelajaran $inovasiPembelajaran)
    {
        if (!Storage::disk('public')->exists($inovasiPembelajaran->file)) {
            abort(404, 'File not found.');
        }
        $extension = pathinfo($inovasiPembelajaran->file, PATHINFO_EXTENSION);
        $filename = str($inovasiPembelajaran->title)->slug() . '.' . $extension;
        return Storage::disk('public')->download($inovasiPembelajaran->file, $filename);
    }
}