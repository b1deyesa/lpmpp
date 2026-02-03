<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PendampinganKurikulum;
use Illuminate\Support\Facades\Storage;
use App\Models\PendampinganKurikulumCategory;

class PendampinganKurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pendampingan-kurikulum', [
            'pendampingan_kurikulum_categories' => PendampinganKurikulumCategory::all(),
            'pendampingan_kurikulums' => PendampinganKurikulum::whereNull('pendampingan_kurikulum_category_id')->get()
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
    public function show(PendampinganKurikulum $pendampinganKurikulum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PendampinganKurikulum $pendampinganKurikulum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendampinganKurikulum $pendampinganKurikulum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendampinganKurikulum $pendampinganKurikulum)
    {
        $pendampinganKurikulum->delete();
        
        return redirect()->route('dashboard.pendampingan-kurikulum.index')->with('success', 'Successfully deleted!');
    }
    
    public function truncate(Request $request)
    {
        PendampinganKurikulumCategory::query()->delete();
        PendampinganKurikulum::truncate();
        return redirect()->route('dashboard.pendampingan-kurikulum.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, PendampinganKurikulum $pk)
    {
        if (!Storage::disk('public')->exists($pk->file)) {
            abort(404, 'File not found.');
        }
        $extension = pathinfo($pk->file, PATHINFO_EXTENSION);
        $filename = str($pk->title)->slug() . '.' . $extension;
        return Storage::disk('public')->download($pk->file, $filename);
    }
}