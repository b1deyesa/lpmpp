<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.sambutan', [
            'sambutan' => Sambutan::first()
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
        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        
        $photoPath = null;
        
        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filename  = 'sambutan.' . $extension;
            $photoPath = $request->file('photo')->storeAs('', $filename, 'public');
            
            Sambutan::updateOrCreate(
                ['id' => 1],
                ['photo' => $photoPath]
            );
        } 
        
        Sambutan::updateOrCreate(
            ['id' => 1],
            [
                'body'  => $request->body,
                'author'  => $request->author
            ]
        );
        
        return redirect()->route('dashboard.sambutan.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sambutan $sambutan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sambutan $sambutan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sambutan $sambutan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sambutan $sambutan)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        Sambutan::truncate();

        return redirect()->route('dashboard.sambutan.index')->with('success', 'Successfully deleted all!');
    }
}
