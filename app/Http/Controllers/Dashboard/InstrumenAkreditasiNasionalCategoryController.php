<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\InstrumenAkreditasiNasional;
use Illuminate\Http\Request;
use App\Models\InstrumenAkreditasiNasionalCategory;
use App\Http\Controllers\Controller;

class InstrumenAkreditasiNasionalCategoryController extends Controller
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
    public function show(InstrumenAkreditasiNasionalCategory $ianCategory)
    {
        return view('dashboard.instrumen-akreditasi-nasional-category', [
            'instrumen_akreditasi_nasional_category' => $ianCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstrumenAkreditasiNasionalCategory $instrumenAkreditasiNasionalCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstrumenAkreditasiNasionalCategory $instrumenAkreditasiNasionalCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstrumenAkreditasiNasionalCategory $instrumenAkreditasiNasionalCategory)
    {
        //
    }
    
    public function truncate(Request $request, InstrumenAkreditasiNasionalCategory $ianCategory)
    {
        InstrumenAkreditasiNasional::where('instrumen_akreditasi_nasional_category_id', $ianCategory->id)->delete();

        return redirect()->route('dashboard.instrumen-akreditasi-nasional-category.show', ['ianCategory' => $ianCategory])->with('success', 'Successfully deleted all!');
    }
}