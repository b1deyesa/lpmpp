<?php

namespace App\Http\Controllers\Guest;

use App\Models\PeraturanRektor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PeraturanRektorCategory;
use Illuminate\Support\Facades\Storage;

class PeraturanRektorController extends Controller
{
    public function index()
    {
        return view('guest.peraturan-rektor', [
            'peraturan_rektors' => PeraturanRektor::all()
        ]);
    }
    
    public function show(PeraturanRektorCategory $peraturanRektorCategory)
    {
        return view('guest.peraturan-rektor-category', [
            'peraturan_rektor_category' => $peraturanRektorCategory
        ]);
    }
    
    public function download(Request $request, PeraturanRektor $peraturanRektor)
    {
        if (!Storage::disk('public')->exists($peraturanRektor->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($peraturanRektor->file, PATHINFO_EXTENSION);

        $filename = str($peraturanRektor->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($peraturanRektor->file, $filename);
    }
}
