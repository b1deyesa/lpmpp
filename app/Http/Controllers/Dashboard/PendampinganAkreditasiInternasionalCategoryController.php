<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\PendampinganAkreditasiInternasional;
use Illuminate\Http\Request;
use App\Models\PendampinganAkreditasiInternasionalCategory;
use App\Http\Controllers\Controller;

class PendampinganAkreditasiInternasionalCategoryController extends Controller
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
    public function show(PendampinganAkreditasiInternasionalCategory $paiCategory)
    {
        return view('dashboard.pendampingan-akreditasi-internasional-category', [
            'pendampingan_akreditasi_internasional_category' => $paiCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PendampinganAkreditasiInternasionalCategory $pendampinganAkreditasiInternasionalCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendampinganAkreditasiInternasionalCategory $pendampinganAkreditasiInternasionalCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendampinganAkreditasiInternasionalCategory $pendampinganAkreditasiInternasionalCategory)
    {
        //
    }
    
    public function truncate(Request $request, PendampinganAkreditasiInternasionalCategory $paiCategory)
    {
        PendampinganAkreditasiInternasional::where('pendampingan_akreditasi_internasional_category_id', $paiCategory->id)->delete();

        return redirect()->route('dashboard.pendampingan-akreditasi-internasional-category.show', ['paiCategory' => $paiCategory])->with('success', 'Successfully deleted all!');
    }
}