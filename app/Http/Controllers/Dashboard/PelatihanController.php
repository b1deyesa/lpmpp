<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PelatihanCategory;
use Illuminate\Support\Facades\Storage;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pelatihan', [
            'pelatihan_categories' => PelatihanCategory::all(),
            'pelatihans' => Pelatihan::whereNull('pelatihan_category_id')->get()
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
    public function show(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
        
        return redirect()->route('dashboard.pelatihan.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        PelatihanCategory::query()->delete();
        Pelatihan::truncate();

        return redirect()->route('dashboard.pelatihan.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, Pelatihan $pelatihan)
    {
        if (!Storage::disk('public')->exists($pelatihan->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($pelatihan->file, PATHINFO_EXTENSION);

        $filename = str($pelatihan->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($pelatihan->file, $filename);
    }
}