<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\PeraturanRektor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PeraturanRektorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.peraturan-rektor', [
            'peraturan_rektors' => PeraturanRektor::all()
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
    public function show(PeraturanRektor $peraturanRektor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeraturanRektor $peraturanRektor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeraturanRektor $peraturanRektor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeraturanRektor $peraturanRektor)
    {
        //
    }

    /**
     * Truncate all records in the table.
     */
    public function truncate(Request $request)
    {
        PeraturanRektor::truncate();

        return redirect()->route('dashboard.peraturan-rektor.index')->with('success', 'Successfully deleted all!');
    }

    /**
     * Download a specific file.
     */
    public function download(Request $request, PeraturanRektor $peraturanRektor)
    {
        if (!Storage::disk('public')->exists($peraturanRektor->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($peraturanRektor->file, PATHINFO_EXTENSION);
        $filename = str($peraturanRektor->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($peraturanRektor->file, $filename);
    }
}