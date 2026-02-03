<?php

namespace App\Http\Controllers\Guest;

use App\Models\InstrumenAkreditasiNasional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InstrumenAkreditasiNasionalCategory;
use Illuminate\Support\Facades\Storage;

class InstrumenAkreditasiNasionalController extends Controller
{
    public function index()
    {
        return view('guest.instrumen-akreditasi-nasional', [
            'instrumen_akreditasi_nasionals' => InstrumenAkreditasiNasional::all()
        ]);
    }
    
    public function show(InstrumenAkreditasiNasionalCategory $ianCategory)
    {
        return view('guest.instrumen-akreditasi-nasional-category', [
            'instrumen_akreditasi_nasional_category' => $ianCategory
        ]);
    }
    
    public function download(Request $request, InstrumenAkreditasiNasional $instrumenAkreditasiNasional)
    {
        if (!Storage::disk('public')->exists($instrumenAkreditasiNasional->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($instrumenAkreditasiNasional->file, PATHINFO_EXTENSION);

        $filename = str($instrumenAkreditasiNasional->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($instrumenAkreditasiNasional->file, $filename);
    }
}