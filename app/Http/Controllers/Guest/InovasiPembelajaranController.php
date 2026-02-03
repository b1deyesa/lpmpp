<?php

namespace App\Http\Controllers\Guest;

use App\Models\InovasiPembelajaran;
use App\Models\InovasiPembelajaranCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InovasiPembelajaranController extends Controller
{
    public function index()
    {
        return view('guest.inovasi-pembelajaran', [
            'inovasi_pembelajarans' => InovasiPembelajaran::all()
        ]);
    }
    
    public function show(InovasiPembelajaranCategory $inovasiPembelajaranCategory)
    {
        return view('guest.inovasi-pembelajaran-category', [
            'inovasi_pembelajaran_category' => $inovasiPembelajaranCategory
        ]);
    }
    
    public function download(Request $request, InovasiPembelajaran $inovasiPembelajaran)
    {
        if (!Storage::disk('public')->exists($inovasiPembelajaran->file)) {
            abort(404, 'File not found.');
        }
        $extension = pathinfo($inovasiPembelajaran->file, PATHINFO_EXTENSION);
        $filename = str($inovasiPembelajaran->title)->slug() . '.' . $extension;
        return Storage::disk('public')->download($inovasiPembelajaran->file, $filename);
    }
}