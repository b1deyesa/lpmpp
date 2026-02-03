<?php

namespace App\Http\Controllers\Guest;

use App\Models\DokumenMbkm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DokumenMbkmCategory;
use Illuminate\Support\Facades\Storage;

class DokumenMbkmController extends Controller
{
    public function index()
    {
        return view('guest.dokumen-mbkm', [
            'dokumen_mbkms' => DokumenMbkm::all()
        ]);
    }
    
    public function show(DokumenMbkmCategory $dokumenMbkmCategory)
    {
        return view('guest.dokumen-mbkm-category', [
            'dokumen_mbkm_category' => $dokumenMbkmCategory
        ]);
    }
    
    public function download(Request $request, DokumenMbkm $dokumenMbkm)
    {
        if (!Storage::disk('public')->exists($dokumenMbkm->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($dokumenMbkm->file, PATHINFO_EXTENSION);

        $filename = str($dokumenMbkm->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($dokumenMbkm->file, $filename);
    }
}