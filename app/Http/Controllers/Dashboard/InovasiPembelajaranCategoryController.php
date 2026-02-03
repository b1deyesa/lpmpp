<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\InovasiPembelajaran;
use App\Http\Controllers\Controller;
use App\Models\InovasiPembelajaranCategory;

class InovasiPembelajaranCategoryController extends Controller
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
    public function show(InovasiPembelajaranCategory $inovasiPembelajaranCategory)
    {
        return view('dashboard.inovasi-pembelajaran-category', [
            'inovasi_pembelajaran_category' => $inovasiPembelajaranCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InovasiPembelajaranCategory $inovasiPembelajaranCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InovasiPembelajaranCategory $inovasiPembelajaranCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InovasiPembelajaranCategory $inovasiPembelajaranCategory)
    {
        //
    }
    
    public function truncate(Request $request, InovasiPembelajaranCategory $inovasiPembelajaranCategory)
    {
        InovasiPembelajaran::where('inovasi_pembelajaran_category_id', $inovasiPembelajaranCategory->id)->delete();
        
        return redirect()->route('dashboard.inovasi-pembelajaran-category.show', ['inovasi_pembelajaran_category' => $inovasiPembelajaranCategory])->with('success', 'Successfully deleted all!');
    }
}
