<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Renstra;
use Illuminate\Http\Request;

class RenstraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.renstra', [
            'renstra' => Renstra::first()
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
        Renstra::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.renstra.index')->with('success', 'Success Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Renstra $renstra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Renstra $renstra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Renstra $renstra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Renstra $renstra)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        Renstra::truncate();

        return redirect()->route('dashboard.renstra.index')->with('success', 'Successfuly deleted all!');
    }
}