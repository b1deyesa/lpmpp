<?php

namespace App\Http\Controllers\Guest;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PelatihanController extends Controller
{
    public function index()
    {
        return view('guest.pelatihan.index', [
            'pelatihans' => Pelatihan::all()
        ]);
    }
    
    public function show(Pelatihan $pelatihan)
    {
        return view('guest.pelatihan.show', [
            'pelatihan' => $pelatihan
        ]);
    }
    
    public function download(Request $request, Pelatihan $pelatihan)
    {
        if (!Storage::disk('public')->exists($pelatihan->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($pelatihan->file, PATHINFO_EXTENSION);

        $filename = str($pelatihan->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($pelatihan->file, $filename);
    }
}