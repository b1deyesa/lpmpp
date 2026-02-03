<?php

namespace App\Http\Controllers\Guest;

use App\Models\MateriKegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MateriKegiatanCategory;
use Illuminate\Support\Facades\Storage;

class MateriKegiatanController extends Controller
{
    public function index()
    {
        return view('guest.materi-kegiatan', [
            'materi_kegiatans' => MateriKegiatan::all()
        ]);
    }
    
    public function show(MateriKegiatanCategory $materiKegiatanCategory)
    {
        return view('guest.materi-kegiatan-category', [
            'materi_kegiatan_category' => $materiKegiatanCategory
        ]);
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