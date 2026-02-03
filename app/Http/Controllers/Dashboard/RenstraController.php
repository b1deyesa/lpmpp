<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Renstra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RenstraCategory;
use Illuminate\Support\Facades\Storage;

class RenstraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.renstra', [
            'renstra_categories' => RenstraCategory::all(),
            'renstras' => Renstra::whereNull('renstra_category_id')->get()
        ]);
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
    public function show(Renstra $renstra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Renstra $renstra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Renstra $renstra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Renstra $renstra)
    {
        $renstra->delete();
        
        return redirect()->route('dashboard.renstra.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        RenstraCategory::query()->delete();
        Renstra::truncate();

        return redirect()->route('dashboard.renstra.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, Renstra $renstra)
    {
        if (!Storage::disk('public')->exists($renstra->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($renstra->file, PATHINFO_EXTENSION);

        $filename = str($renstra->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($renstra->file, $filename);
    }
}