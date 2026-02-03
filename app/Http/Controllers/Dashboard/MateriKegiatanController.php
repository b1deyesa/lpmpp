<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\MateriKegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MateriKegiatanCategory;
use Illuminate\Support\Facades\Storage;

class MateriKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.materi-kegiatan', [
            'materi_kegiatan_categories' => MateriKegiatanCategory::all(),
            'materi_kegiatans' => MateriKegiatan::whereNull('materi_kegiatan_category_id')->get()
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
    public function show(MateriKegiatan $materiKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MateriKegiatan $materiKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MateriKegiatan $materiKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MateriKegiatan $materiKegiatan)
    {
        $materiKegiatan->delete();
        
        return redirect()->route('dashboard.materi-kegiatan.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        MateriKegiatanCategory::query()->delete();
        MateriKegiatan::truncate();

        return redirect()->route('dashboard.materi-kegiatan.index')->with('success', 'Successfully deleted all!');
    }

    public function download(Request $request, MateriKegiatan $materiKegiatan)
    {
        if (!Storage::disk('public')->exists($materiKegiatan->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($materiKegiatan->file, PATHINFO_EXTENSION);

        $filename = str($materiKegiatan->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($materiKegiatan->file, $filename);
    }
}