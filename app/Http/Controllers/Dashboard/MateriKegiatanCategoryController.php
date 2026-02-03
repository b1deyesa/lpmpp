<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\MateriKegiatan;
use Illuminate\Http\Request;
use App\Models\MateriKegiatanCategory;
use App\Http\Controllers\Controller;

class MateriKegiatanCategoryController extends Controller
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
    public function show(MateriKegiatanCategory $materiKegiatanCategory)
    {
        return view('dashboard.materi-kegiatan-category', [
            'materi_kegiatan_category' => $materiKegiatanCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MateriKegiatanCategory $materiKegiatanCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MateriKegiatanCategory $materiKegiatanCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MateriKegiatanCategory $materiKegiatanCategory)
    {
        //
    }
    
    public function truncate(Request $request, MateriKegiatanCategory $materiKegiatanCategory)
    {
        MateriKegiatan::where('materi_kegiatan_category_id', $materiKegiatanCategory->id)->delete();

        return redirect()->route('dashboard.materi-kegiatan-category.show', ['materi_kegiatan_category' => $materiKegiatanCategory])->with('success', 'Successfully deleted all!');
    }
}