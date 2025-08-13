<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.berita.index', [
            'beritas' => Berita::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Berita::where('slug', Str::slug($request->title))->exists()) {
            return redirect()->back()->withErrors(['title' => 'Title sudah ada'])->withInput();
        }
        
        $file = $request->file('cover');
        $filename = time() . '_' . $file->getClientOriginalName();
        Storage::disk('public')->putFileAs('berita', $file, $filename);        
        
        Berita::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'cover' => $filename
        ]);
        
        return redirect()->route('dashboard.berita.index')->with('success', 'Berhasil Menambahkan Berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $beritum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $beritum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $beritum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $beritum)
    {
        $beritum->delete();
        
        return redirect()->route('dashboard.berita.index')->with('success', 'Berhasil Menghapus Berita');
    }
}
