<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\LayananBkd;
use Illuminate\Http\Request;
use App\Models\LayananBkdCategory;
use App\Http\Controllers\Controller;

class LayananBkdCategoryController extends Controller
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
    public function show(LayananBkdCategory $layananBkdCategory)
    {
        return view('dashboard.layanan-bkd-category', [
            'layanan_bkd_category' => $layananBkdCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LayananBkdCategory $layananBkdCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LayananBkdCategory $layananBkdCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LayananBkdCategory $layananBkdCategory)
    {
        //
    }
    
    public function truncate(Request $request, LayananBkdCategory $layananBkdCategory)
    {
        LayananBkd::where('layanan_bkd_category_id', $layananBkdCategory->id)->delete();

        return redirect()->route('dashboard.layanan-bkd-category.show', ['layanan_bkd_category' => $layananBkdCategory])->with('success', 'Successfully deleted all!');
    }
}