<?php

namespace App\Http\Controllers\Guest;

use App\Models\PendampinganAkreditasiNasional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PendampinganAkreditasiNasionalCategory;
use Illuminate\Support\Facades\Storage;

class PendampinganAkreditasiNasionalController extends Controller
{
    public function index()
    {
        return view('guest.pendampingan-akreditasi-nasional', [
            'pendampingan_akreditasi_nasionals' => PendampinganAkreditasiNasional::all()
        ]);
    }
    
    public function show(PendampinganAkreditasiNasionalCategory $panCategory)
    {
        return view('guest.pendampingan-akreditasi-nasional-category', [
            'pendampingan_akreditasi_nasional_category' => $panCategory
        ]);
    }
    
    public function download(Request $request, PendampinganAkreditasiNasional $pendampinganAkreditasiNasional)
    {
        if (!Storage::disk('public')->exists($pendampinganAkreditasiNasional->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($pendampinganAkreditasiNasional->file, PATHINFO_EXTENSION);

        $filename = str($pendampinganAkreditasiNasional->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($pendampinganAkreditasiNasional->file, $filename);
    }
}