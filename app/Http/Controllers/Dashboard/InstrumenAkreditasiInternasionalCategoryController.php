<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\InstrumenAkreditasiInternasional;
use Illuminate\Http\Request;
use App\Models\InstrumenAkreditasiInternasionalCategory;
use App\Http\Controllers\Controller;

class InstrumenAkreditasiInternasionalCategoryController extends Controller
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
    public function show(InstrumenAkreditasiInternasionalCategory $iaiCategory)
    {
        return view('dashboard.instrumen-akreditasi-internasional-category', [
            'instrumen_akreditasi_internasional_category' => $iaiCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstrumenAkreditasiInternasionalCategory $instrumenAkreditasiInternasionalCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstrumenAkreditasiInternasionalCategory $instrumenAkreditasiInternasionalCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstrumenAkreditasiInternasionalCategory $instrumenAkreditasiInternasionalCategory)
    {
        //
    }
    
    public function truncate(Request $request, InstrumenAkreditasiInternasionalCategory $iaiCategory)
    {
        InstrumenAkreditasiInternasional::where('instrumen_akreditasi_internasional_category_id', $iaiCategory->id)->delete();

        return redirect()->route('dashboard.instrumen-akreditasi-internasional-category.show', ['iaiCategory' => $iaiCategory])->with('success', 'Successfully deleted all!');
    }
}