<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\DokumenMbkm;
use Illuminate\Http\Request;
use App\Models\DokumenMbkmCategory;
use App\Http\Controllers\Controller;

class DokumenMbkmCategoryController extends Controller
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
    public function show(DokumenMbkmCategory $dokumenMbkmCategory)
    {
        return view('dashboard.dokumen-mbkm-category', [
            'dokumen_mbkm_category' => $dokumenMbkmCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DokumenMbkmCategory $dokumenMbkmCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DokumenMbkmCategory $dokumenMbkmCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DokumenMbkmCategory $dokumenMbkmCategory)
    {
        //
    }
    
    public function truncate(Request $request, DokumenMbkmCategory $dokumenMbkmCategory)
    {
        DokumenMbkm::where('dokumen_mbkm_category_id', $dokumenMbkmCategory->id)->delete();

        return redirect()->route('dashboard.dokumen-mbkm-category.show', ['dokumen_mbkm_category' => $dokumenMbkmCategory])->with('success', 'Successfully deleted all!');
    }
}