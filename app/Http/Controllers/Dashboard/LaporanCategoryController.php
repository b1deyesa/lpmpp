<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\LaporanCategory;
use App\Http\Controllers\Controller;

class LaporanCategoryController extends Controller
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
    public function show(LaporanCategory $laporanCategory)
    {
        return view('dashboard.laporan-category', [
            'laporan_category' => $laporanCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LaporanCategory $laporanCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LaporanCategory $laporanCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LaporanCategory $laporanCategory)
    {
        //
    }
    
    public function truncate(Request $request, LaporanCategory $laporanCategory)
    {
        Laporan::where('laporan_category_id', $laporanCategory->id)->delete();

        return redirect()->route('dashboard.laporan-category.show', ['laporan_category' => $laporanCategory])->with('success', 'Successfully deleted all!');
    }
}
