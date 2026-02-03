<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Models\PelatihanCategory;
use App\Http\Controllers\Controller;

class PelatihanCategoryController extends Controller
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
    public function show(PelatihanCategory $pelatihanCategory)
    {
        return view('dashboard.pelatihan-category', [
            'pelatihan_category' => $pelatihanCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PelatihanCategory $pelatihanCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PelatihanCategory $pelatihanCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PelatihanCategory $pelatihanCategory)
    {
        //
    }
    
    public function truncate(Request $request, PelatihanCategory $pelatihanCategory)
    {
        Pelatihan::where('pelatihan_category_id', $pelatihanCategory->id)->delete();

        return redirect()->route('dashboard.pelatihan-category.show', ['pelatihan_category' => $pelatihanCategory])->with('success', 'Successfully deleted all!');
    }
}