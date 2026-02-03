<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PendampinganKurikulum;
use App\Models\PendampinganKurikulumCategory;

class PendampinganKurikulumCategoryController extends Controller
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
    public function show(PendampinganKurikulumCategory $pkCategory)
    {
        return view('dashboard.pendampingan-kurikulum-category', [
            'pendampingan_kurikulum_category' => $pkCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PendampinganKurikulumCategory $pendampinganKurikulumCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendampinganKurikulumCategory $pendampinganKurikulumCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendampinganKurikulumCategory $pendampinganKurikulumCategory)
    {
        //
    }
    
    public function truncate(Request $request, PendampinganKurikulumCategory $pkCategory)
    {
        PendampinganKurikulum::where('pendampingan_kurikulum_category_id', $pkCategory->id)->delete();
        
        return redirect()->route('dashboard.pendampingan-kurikulum-category.show', ['pkCategory' => $pkCategory])->with('success', 'Successfully deleted all!');
    }
}
