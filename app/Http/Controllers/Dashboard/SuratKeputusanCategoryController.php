<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\SuratKeputusan;
use Illuminate\Http\Request;
use App\Models\SuratKeputusanCategory;
use App\Http\Controllers\Controller;

class SuratKeputusanCategoryController extends Controller
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
    public function show(SuratKeputusanCategory $suratKeputusanCategory)
    {
        return view('dashboard.surat-keputusan-category', [
            'surat_keputusan_category' => $suratKeputusanCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratKeputusanCategory $suratKeputusanCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratKeputusanCategory $suratKeputusanCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratKeputusanCategory $suratKeputusanCategory)
    {
        //
    }
    
    public function truncate(Request $request, SuratKeputusanCategory $suratKeputusanCategory)
    {
        SuratKeputusan::where('surat_keputusan_category_id', $suratKeputusanCategory->id)->delete();

        return redirect()->route('dashboard.surat-keputusan-category.show', ['surat_keputusan_category' => $suratKeputusanCategory])->with('success', 'Successfully deleted all!');
    }
}