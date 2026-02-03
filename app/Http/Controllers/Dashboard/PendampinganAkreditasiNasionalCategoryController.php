<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\PendampinganAkreditasiNasional;
use Illuminate\Http\Request;
use App\Models\PendampinganAkreditasiNasionalCategory;
use App\Http\Controllers\Controller;

class PendampinganAkreditasiNasionalCategoryController extends Controller
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
    public function show(PendampinganAkreditasiNasionalCategory $panCategory)
    {
        return view('dashboard.pendampingan-akreditasi-nasional-category', [
            'pendampingan_akreditasi_nasional_category' => $panCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PendampinganAkreditasiNasionalCategory $pendampinganAkreditasiNasionalCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendampinganAkreditasiNasionalCategory $pendampinganAkreditasiNasionalCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendampinganAkreditasiNasionalCategory $pendampinganAkreditasiNasionalCategory)
    {
        //
    }
    
    public function truncate(Request $request, PendampinganAkreditasiNasionalCategory $panCategory)
    {
        PendampinganAkreditasiNasional::where('pendampingan_akreditasi_nasional_category_id', $panCategory->id)->delete();

        return redirect()->route('dashboard.pendampingan-akreditasi-nasional-category.show', ['panCategory' => $panCategory])->with('success', 'Successfully deleted all!');
    }
}