<?php

namespace App\Http\Controllers\Guest;

use App\Models\Renstra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RenstraCategory;
use Illuminate\Support\Facades\Storage;

class RenstraController extends Controller
{
    public function index()
    {
        return view('guest.renstra', [
            'renstras' => Renstra::all()
        ]);
    }
    
    public function show(RenstraCategory $renstraCategory)
    {
        return view('guest.renstra-category', [
            'renstra_category' => $renstraCategory
        ]);
    }
    
    public function download(Request $request, Renstra $renstra)
    {
        if (!Storage::disk('public')->exists($renstra->file)) {
            abort(404, 'File not found.');
        }

        $extension = pathinfo($renstra->file, PATHINFO_EXTENSION);

        $filename = str($renstra->title)->slug() . '.' . $extension;

        return Storage::disk('public')->download($renstra->file, $filename);
    }
}