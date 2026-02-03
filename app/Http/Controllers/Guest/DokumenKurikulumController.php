<?php

namespace App\Http\Controllers\Guest;

use App\Models\DokumenKurikulum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DokumenKurikulumCategory;
use Illuminate\Support\Facades\Storage;

class DokumenKurikulumController extends Controller
{
    public function index()
    {
        return view('guest.dokumen-kurikulum', [
            'dokumen_kurikulums' => DokumenKurikulum::all()
        ]);
    }
    
    public function show(DokumenKurikulumCategory $dokumenKurikulumCategory)
    {
        return view('guest.dokumen-kurikulum-category', [
            'dokumen_kurikulum_category' => $dokumenKurikulumCategory
        ]);
    }
    
    public function download(Request $request, DokumenKurikulum $dokumenKurikulum)
    {
        if (!Storage::disk('public')->exists($dokumenKurikulum->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($dokumenKurikulum->file, PATHINFO_EXTENSION);

        $filename = str($dokumenKurikulum->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($dokumenKurikulum->file, $filename);
    }
}