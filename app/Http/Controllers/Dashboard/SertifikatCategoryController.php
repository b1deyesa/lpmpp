<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Sertifikat;
use Illuminate\Http\Request;
use App\Models\SertifikatCategory;
use App\Http\Controllers\Controller;

class SertifikatCategoryController extends Controller
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
    public function show(SertifikatCategory $sertifikatCategory)
    {
        return view('dashboard.sertifikat-category', [
            'sertifikat_category' => $sertifikatCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SertifikatCategory $sertifikatCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SertifikatCategory $sertifikatCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SertifikatCategory $sertifikatCategory)
    {
        //
    }
    
    public function truncate(Request $request, SertifikatCategory $sertifikatCategory)
    {
        Sertifikat::where('sertifikat_category_id', $sertifikatCategory->id)->delete();

        return redirect()->route('dashboard.sertifikat-category.show', ['sertifikat_category' => $sertifikatCategory])->with('success', 'Successfully deleted all!');
    }
}