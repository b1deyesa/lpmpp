<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\PeraturanPerundangUndangan;
use App\Models\PeraturanPerundangUndanganCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeraturanPerundangUndanganCategoryController extends Controller
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
    public function show(PeraturanPerundangUndanganCategory $ppuCategory)
    {
        return view('dashboard.peraturan-perundang-undangan-category', [
            'peraturan_perundang_undangan_category' => $ppuCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeraturanPerundangUndanganCategory $peraturanPerundangUndanganCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeraturanPerundangUndanganCategory $peraturanPerundangUndanganCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeraturanPerundangUndanganCategory $peraturanPerundangUndanganCategory)
    {
        //
    }
    
    public function truncate(Request $request, PeraturanPerundangUndanganCategory $ppuCategory)
    {
        PeraturanPerundangUndangan::where('peraturan_perundang_undangan_category_id', $ppuCategory->id)->delete();

        return redirect()->route('dashboard.peraturan-perundang-undangan-category.show', ['ppuCategory' => $ppuCategory])->with('success', 'Successfully deleted all!');
    }
}