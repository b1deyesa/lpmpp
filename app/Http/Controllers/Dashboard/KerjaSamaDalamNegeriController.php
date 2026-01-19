<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\KerjaSamaDalamNegeri;
use Illuminate\Http\Request;

class KerjaSamaDalamNegeriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kerja-sama-dalam-negeri', [
            'kerja_sama_dalam_negeri' => KerjaSamaDalamNegeri::first()
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
        KerjaSamaDalamNegeri::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.kerja-sama-dalam-negeri.index')->with('success', 'Success Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KerjaSamaDalamNegeri $kerjaSamaDalamNegeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KerjaSamaDalamNegeri $kerjaSamaDalamNegeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KerjaSamaDalamNegeri $kerjaSamaDalamNegeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KerjaSamaDalamNegeri $kerjaSamaDalamNegeri)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        KerjaSamaDalamNegeri::truncate();

        return redirect()->route('dashboard.kerja-sama-dalam-negeri.index')->with('success', 'Successfuly deleted all!');
    }
}
