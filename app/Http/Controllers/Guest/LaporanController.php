<?php

namespace App\Http\Controllers\Guest;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LaporanCategory;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function index()
    {
        return view('guest.laporan', [
            'laporans' => Laporan::all()
        ]);
    }
    
    public function show(LaporanCategory $laporanCategory)
    {
        return view('guest.laporan-category', [
            'laporan_category' => $laporanCategory
        ]);
    }
    
    public function download(Request $request, Laporan $laporan)
    {
        if (!Storage::disk('public')->exists($laporan->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($laporan->file, PATHINFO_EXTENSION);

        $filename = str($laporan->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($laporan->file, $filename);
    }
}
