<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PelatihanCategory;
use Illuminate\Support\Facades\Storage;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pelatihan.index', [
            'pelatihans' => Pelatihan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelatihan $pelatihan)
    {
        return view('dashboard.pelatihan.show', [
            'pelatihan' => $pelatihan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        $pelatihan->update([
            'body' => $request->body
        ]);
        
        return redirect()->route('dashboard.pelatihan.show', compact('pelatihan'))->with('success', 'Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
        
        return redirect()->route('dashboard.pelatihan.index')->with('success', 'Successfully deleted!');
    }

    public function truncate(Request $request)
    {
        Pelatihan::truncate();

        return redirect()->route('dashboard.pelatihan.index')->with('success', 'Successfully deleted all!');
    }
}