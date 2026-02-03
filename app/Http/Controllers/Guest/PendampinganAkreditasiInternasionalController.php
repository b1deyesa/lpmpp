<?php

namespace App\Http\Controllers\Guest;

use App\Models\PendampinganAkreditasiInternasional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PendampinganAkreditasiInternasionalCategory;
use Illuminate\Support\Facades\Storage;

class PendampinganAkreditasiInternasionalController extends Controller
{
    public function index()
    {
        return view('guest.pendampingan-akreditasi-internasional', [
            'pendampingan_akreditasi_internasionals' => PendampinganAkreditasiInternasional::all()
        ]);
    }
    
    public function show(PendampinganAkreditasiInternasionalCategory $paiCategory)
    {
        return view('guest.pendampingan-akreditasi-internasional-category', [
            'pendampingan_akreditasi_internasional_category' => $paiCategory
        ]);
    }
    
    public function download(Request $request, PendampinganAkreditasiInternasional $pai)
    {
        if (!Storage::disk('public')->exists($pai->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($pai->file, PATHINFO_EXTENSION);

        $filename = str($pai->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($pai->file, $filename);
    }
}