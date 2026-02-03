<?php

namespace App\Http\Controllers\Guest;

use App\Models\PendampinganKurikulum;
use App\Models\PendampinganKurikulumCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PendampinganKurikulumController extends Controller
{
    public function index()
    {
        return view('guest.pendampingan-kurikulum', [
            'pendampingan_kurikulums' => PendampinganKurikulum::all()
        ]);
    }
    
    public function show(PendampinganKurikulumCategory $pkCategory)
    {
        return view('guest.pendampingan-kurikulum-category', [
            'pendampingan_kurikulum_category' => $pkCategory
        ]);
    }
    
    public function download(Request $request, PendampinganKurikulum $pk)
    {
        if (!Storage::disk('public')->exists($pk->file)) {
            abort(404, 'File not found.');
        }
        $extension = pathinfo($pk->file, PATHINFO_EXTENSION);
        $filename = str($pk->title)->slug() . '.' . $extension;
        return Storage::disk('public')->download($pk->file, $filename);
    }
}