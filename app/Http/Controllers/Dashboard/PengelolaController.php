<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Pengelola;
use Illuminate\Http\Request;

class PengelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pengelola', [
            'pengelolas' => Pengelola::all()
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
    public function show(Pengelola $tenagaPengelola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengelola $tenagaPengelola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengelola $tenagaPengelola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengelola $tenagaPengelola)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        Pengelola::query()->delete();

        return redirect()->route('dashboard.pengelola.index')->with('success', 'Successfully deleted all!');
    }
}
