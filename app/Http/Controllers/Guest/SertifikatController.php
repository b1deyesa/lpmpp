<?php

namespace App\Http\Controllers\Guest;

use App\Models\Sertifikat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SertifikatCategory;
use Illuminate\Support\Facades\Storage;

class SertifikatController extends Controller
{
    public function index()
    {
        return view('guest.sertifikat', [
            'sertifikats' => Sertifikat::all()
        ]);
    }
    
    public function show(SertifikatCategory $sertifikatCategory)
    {
        return view('guest.sertifikat-category', [
            'sertifikat_category' => $sertifikatCategory
        ]);
    }
    
    public function download(Request $request, Sertifikat $sertifikat)
    {
        if (!Storage::disk('public')->exists($sertifikat->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($sertifikat->file, PATHINFO_EXTENSION);

        $filename = str($sertifikat->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($sertifikat->file, $filename);
    }
}