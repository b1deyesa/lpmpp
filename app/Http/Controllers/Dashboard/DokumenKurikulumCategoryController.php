<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\DokumenKurikulum;
use Illuminate\Http\Request;
use App\Models\DokumenKurikulumCategory;
use App\Http\Controllers\Controller;

class DokumenKurikulumCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
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
    public function show(DokumenKurikulumCategory $dokumenKurikulumCategory)
    {
        return view('dashboard.dokumen-kurikulum-category', [
            'dokumen_kurikulum_category' => $dokumenKurikulumCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DokumenKurikulumCategory $dokumenKurikulumCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DokumenKurikulumCategory $dokumenKurikulumCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DokumenKurikulumCategory $dokumenKurikulumCategory)
    {
        //
    }
    
    public function truncate(Request $request, DokumenKurikulumCategory $dokumenKurikulumCategory)
    {
        DokumenKurikulum::where('dokumen_kurikulum_category_id', $dokumenKurikulumCategory->id)->delete();

        return redirect()->route('dashboard.dokumen-kurikulum-category.show', ['dokumen_kurikulum_category' => $dokumenKurikulumCategory])->with('success', 'Successfully deleted all!');
    }
}