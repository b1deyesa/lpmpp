<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\PeraturanPerundangUndangan;
use App\Models\PeraturanPerundangUndanganCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PeraturanPerundangUndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.peraturan-perundang-undangan', [
            'peraturan_perundang_undangan_categories' => PeraturanPerundangUndanganCategory::all(),
            'peraturan_perundang_undangans' => PeraturanPerundangUndangan::whereNull('peraturan_perundang_undangan_category_id')->get()
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
    public function show(PeraturanPerundangUndangan $peraturanPerundangUndangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeraturanPerundangUndangan $peraturanPerundangUndangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeraturanPerundangUndangan $peraturanPerundangUndangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeraturanPerundangUndangan $peraturanPerundangUndangan)
    {
        $peraturanPerundangUndangan->delete();
        
        return redirect()->route('dashboard.peraturan-perundang-undangan.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        PeraturanPerundangUndanganCategory::query()->delete();
        PeraturanPerundangUndangan::truncate();

        return redirect()->route('dashboard.peraturan-perundang-undangan.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, PeraturanPerundangUndangan $peraturanPerundangUndangan)
    {
        if (!Storage::disk('public')->exists($peraturanPerundangUndangan->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($peraturanPerundangUndangan->file, PATHINFO_EXTENSION);
        $filename = str($peraturanPerundangUndangan->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($peraturanPerundangUndangan->file, $filename);
    }
}