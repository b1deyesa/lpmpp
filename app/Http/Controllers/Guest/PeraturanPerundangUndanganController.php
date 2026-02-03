<?php

namespace App\Http\Controllers\Guest;

use App\Models\PeraturanPerundangUndangan;
use App\Models\PeraturanPerundangUndanganCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PeraturanPerundangUndanganController extends Controller
{
    public function index()
    {
        return view('guest.peraturan-perundang-undangan', [
            'peraturan_perundang_undangans' => PeraturanPerundangUndangan::all()
        ]);
    }
    
    public function show(PeraturanPerundangUndanganCategory $ppuCategory)
    {
        return view('guest.peraturan-perundang-undangan-category', [
            'peraturan_perundang_undangan_category' => $ppuCategory
        ]);
    }
    
    public function download(Request $request, PeraturanPerundangUndangan $peraturanPerundangUndangan)
    {
        if (!Storage::disk('public')->exists($peraturanPerundangUndangan->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($peraturanPerundangUndangan->file, PATHINFO_EXTENSION);
        $filename = str($peraturanPerundangUndangan->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($peraturanPerundangUndangan->file, $filename);
    }
}