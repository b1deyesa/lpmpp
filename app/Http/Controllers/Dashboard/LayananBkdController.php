<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\LayananBkd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LayananBkdCategory;
use Illuminate\Support\Facades\Storage;

class LayananBkdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.layanan-bkd', [
            'layanan_bkd_categories' => LayananBkdCategory::all(),
            'layanan_bkds' => LayananBkd::whereNull('layanan_bkd_category_id')->get()
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
    public function show(LayananBkd $layananBkd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LayananBkd $layananBkd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LayananBkd $layananBkd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LayananBkd $layananBkd)
    {
        $layananBkd->delete();
        
        return redirect()->route('dashboard.layanan-bkd.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        LayananBkdCategory::query()->delete();
        LayananBkd::truncate();

        return redirect()->route('dashboard.layanan-bkd.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, LayananBkd $layananBkd)
    {
        if (!Storage::disk('public')->exists($layananBkd->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($layananBkd->file, PATHINFO_EXTENSION);

        $filename = str($layananBkd->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($layananBkd->file, $filename);
    }
}