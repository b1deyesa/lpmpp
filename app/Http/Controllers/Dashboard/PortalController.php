<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PortalPost;
use App\Models\Pusat;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Pusat $pusat)
    {
        return view('dashboard.portal', [
            'pusats' => Pusat::all(),
            'pusat' => $pusat
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
    public function store(Request $request, Pusat $pusat)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'portal_categories' => 'required'
        ]);
        
        $portal_post = PortalPost::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        
        $portal_post->categories()->sync(array_keys($request->portal_categories));
        
        return redirect()->route('dashboard.pusat.portal.index', ['pusat' => $pusat])->with('success', 'Success added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PortalPost $portalPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PortalPost $portalPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PortalPost $portalPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PortalPost $portalPost)
    {
        //
    }
}
