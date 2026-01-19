<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Spmi;
use Illuminate\Http\Request;

class SpmiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.spmi', [
            'spmi' => Spmi::first()
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
        Spmi::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.spmi.index')->with('success', 'Success Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Spmi $spmi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spmi $spmi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spmi $spmi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spmi $spmi)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        Spmi::truncate();

        return redirect()->route('dashboard.spmi.index')->with('success', 'Successfuly deleted all!');
    }
}