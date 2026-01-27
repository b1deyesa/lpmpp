<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Pusat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Pengelola;
use App\Http\Controllers\Controller;

class PusatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pusat', [
            'pusats' => Pusat::all()
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
    public function show(Pusat $pusat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pusat $pusat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pusat $pusat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pusat $pusat)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        Pusat::query()->delete();

        return redirect()->route('dashboard.pusat.index')->with('success', 'Successfully deleted all!');
    }
}
