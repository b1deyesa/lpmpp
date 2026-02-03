<?php

namespace App\Http\Controllers\Guest;

use App\Models\InstrumenAkreditasiInternasional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InstrumenAkreditasiInternasionalCategory;
use Illuminate\Support\Facades\Storage;

class InstrumenAkreditasiInternasionalController extends Controller
{
    public function index()
    {
        return view('guest.instrumen-akreditasi-internasional', [
            'instrumen_akreditasi_internasionals' => InstrumenAkreditasiInternasional::all()
        ]);
    }
    
    public function show(InstrumenAkreditasiInternasionalCategory $iaiCategory)
    {
        return view('guest.instrumen-akreditasi-internasional-category', [
            'instrumen_akreditasi_internasional_category' => $iaiCategory
        ]);
    }
    
    public function download(Request $request, InstrumenAkreditasiInternasional $instrumenAkreditasiInternasional)
    {
        if (!Storage::disk('public')->exists($instrumenAkreditasiInternasional->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($instrumenAkreditasiInternasional->file, PATHINFO_EXTENSION);

        $filename = str($instrumenAkreditasiInternasional->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($instrumenAkreditasiInternasional->file, $filename);
    }
}