<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.sejarah', [
            'sejarah' => Sejarah::first()
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
        Sejarah::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.sejarah.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sejarah $sejarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sejarah $sejarah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sejarah $sejarah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sejarah $sejarah)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        Sejarah::truncate();

        return redirect()->route('dashboard.sejarah.index')->with('success', 'Successfully deleted all!');
    }
}
