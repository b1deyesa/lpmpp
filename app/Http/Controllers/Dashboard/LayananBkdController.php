<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\LayananBkd;
use Illuminate\Http\Request;

class LayananBkdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.layanan-bkd', [
            'layanan_bkd' => LayananBkd::first()
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
        LayananBkd::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.layanan-bkd.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(LayananBkd $layananBkd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LayananBkd $layananBkd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LayananBkd $layananBkd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LayananBkd $layananBkd)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        LayananBkd::truncate();

        return redirect()->route('dashboard.layanan-bkd.index')->with('success', 'Successfully deleted all!');
    }
}