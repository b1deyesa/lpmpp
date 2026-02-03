<?php

namespace App\Http\Controllers\Guest;

use App\Models\SuratKeputusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SuratKeputusanCategory;
use Illuminate\Support\Facades\Storage;

class SuratKeputusanController extends Controller
{
    public function index()
    {
        return view('guest.surat-keputusan', [
            'surat_keputusans' => SuratKeputusan::all()
        ]);
    }
    
    public function show(SuratKeputusanCategory $suratKeputusanCategory)
    {
        return view('guest.surat-keputusan-category', [
            'surat_keputusan_category' => $suratKeputusanCategory
        ]);
    }
    
    public function download(Request $request, SuratKeputusan $suratKeputusan)
    {
        if (!Storage::disk('public')->exists($suratKeputusan->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($suratKeputusan->file, PATHINFO_EXTENSION);

        $filename = str($suratKeputusan->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($suratKeputusan->file, $filename);
    }
}