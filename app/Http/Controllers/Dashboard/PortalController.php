<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Pusat;
use App\Models\PortalPost;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Pusat $pusat)
    {
        $portal_posts = PortalPost::whereHas('categories', function ($q) use ($pusat) {
            $q->where('pusat_id', $pusat->id);
        })->get();
        
        return view('dashboard.portal', [
            'pusats' => Pusat::all(),
            'pusat' => $pusat,
            'portal_posts' => $portal_posts
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
        
        $coverPath = null;

        if ($request->hasFile('cover')) {
            $extension = $request->file('cover')->getClientOriginalExtension();
            $filename  = Str::uuid()->toString() . '.' . $extension;
            $coverPath = $request->file('cover')->storeAs('portal', $filename, 'public');
        }

        $portal_post = PortalPost::create([
            'title' => $request->title,
            'body'  => $request->body,
            'cover' => $coverPath,
        ]);
        
        $portal_post->categories()->sync(array_keys($request->portal_categories));
        
        return redirect()->route('dashboard.pusat.portal.index', ['pusat' => $pusat])->with('success', 'Successfully added!');
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
