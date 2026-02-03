<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\PeraturanRektor;
use Illuminate\Http\Request;
use App\Models\PeraturanRektorCategory;
use App\Http\Controllers\Controller;

class PeraturanRektorCategoryController extends Controller
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
    public function show(PeraturanRektorCategory $peraturanRektorCategory)
    {
        return view('dashboard.peraturan-rektor-category', [
            'peraturan_rektor_category' => $peraturanRektorCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeraturanRektorCategory $peraturanRektorCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeraturanRektorCategory $peraturanRektorCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeraturanRektorCategory $peraturanRektorCategory)
    {
        //
    }
    
    public function truncate(Request $request, PeraturanRektorCategory $peraturanRektorCategory)
    {
        PeraturanRektor::where('peraturan_rektor_category_id', $peraturanRektorCategory->id)->delete();

        return redirect()->route('dashboard.peraturan-rektor-category.show', ['peraturan_rektor_category' => $peraturanRektorCategory])->with('success', 'Successfully deleted all!');
    }
}