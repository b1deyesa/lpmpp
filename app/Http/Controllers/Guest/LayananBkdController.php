<?php

namespace App\Http\Controllers\Guest;

use App\Models\LayananBkd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LayananBkdCategory;
use Illuminate\Support\Facades\Storage;

class LayananBkdController extends Controller
{
    public function index()
    {
        return view('guest.layanan-bkd', [
            'layanan_bkds' => LayananBkd::all()
        ]);
    }
    
    public function show(LayananBkdCategory $layananBkdCategory)
    {
        return view('guest.layanan-bkd-category', [
            'layanan_bkd_category' => $layananBkdCategory
        ]);
    }
    
    public function download(Request $request, LayananBkd $layananBkd)
    {
        if (!Storage::disk('public')->exists($layananBkd->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($layananBkd->file, PATHINFO_EXTENSION);

        $filename = str($layananBkd->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($layananBkd->file, $filename);
    }
}