<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AuditorMutuInternal;
use Illuminate\Http\Request;

class AuditorMutuInternalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.auditor-mutu-internal', [
            'auditor_mutu_internal' => AuditorMutuInternal::first()
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
        AuditorMutuInternal::updateOrCreate(
            ['id' => 1],
            [
                'body' => $request->body
            ]
        );
        
        return redirect()->route('dashboard.auditor-mutu-internal.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AuditorMutuInternal $auditorMutuInternal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AuditorMutuInternal $auditorMutuInternal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AuditorMutuInternal $auditorMutuInternal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AuditorMutuInternal $auditorMutuInternal)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        AuditorMutuInternal::truncate();

        return redirect()->route('dashboard.auditor-mutu-internal.index')->with('success', 'Successfully deleted all!');
    }
}