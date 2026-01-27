<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Website;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.website', [
            'website' => Website::first()
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
            'jumbotron_background' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5000',
            'jumbotron_title' => 'required',
            'jumbotron_subtitle' => 'required',
            'jumbotron_description' => 'required',
            'page_background' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5000'
        ]);
        
        $jumbotron_background_path = null;
        $page_background_path = null;
        
        if ($request->hasFile('jumbotron_background')) {
            $extension = $request->file('jumbotron_background')->getClientOriginalExtension();
            $filename  = 'jumbotron_background.' . $extension;
            Storage::disk('public')->delete($filename);
            $jumbotron_background_path = $request->file('jumbotron_background')->storeAs('', $filename, 'public');
            
            Website::updateOrCreate(
                ['id' => 1],
                ['jumbotron_background' => $jumbotron_background_path]
            );
        } 
        
        if ($request->hasFile('page_background')) {
            $extension = $request->file('page_background')->getClientOriginalExtension();
            $filename  = 'page_background.' . $extension;
            Storage::disk('public')->delete($filename);
            $page_background_path = $request->file('page_background')->storeAs('', $filename, 'public');
            
            Website::updateOrCreate(
                ['id' => 1],
                ['page_background' => $page_background_path]
            );
        } 
        
        Website::updateOrCreate(
            ['id' => 1],
            [
                'jumbotron_title' => $request->jumbotron_title,
                'jumbotron_subtitle' => $request->jumbotron_subtitle,
                'jumbotron_description' => $request->jumbotron_description,
                'phone' => $request->phone,
                'email' => $request->email,
                'fax' => $request->fax,
                'address' => $request->address,
                'facebook_link' => $request->facebook_link,
                'tiktok_link' => $request->tiktok_link,
                'x_link' => $request->x_link,
                'instagram_link' => $request->instagram_link,
                'youtube_link' => $request->youtube_link
            ]
        );
        
        return redirect()->route('dashboard.website.index')->with('success', 'Successfully Update!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Website $website)
    {
        //
    }
    
    public function truncate(Request $request)
    {
        Website::where('id', 1)->update([
            'active' => false,
            'jumbotron_title' => 'Lembaga Penjaminan Mutu dan Pengembangan Pembelajaran (LPMPP)',
            'jumbotron_subtitle' => 'Universitas Pattimura',
            'jumbotron_description' => 'Menggerakkan Budaya Mutu Universitas Pattimura Menuju World Class University',
            'jumbotron_background' => null,
            'page_background' => null,
        ]);
        
        return redirect()->route('dashboard.website.index')->with('success', 'Successfully deleted all!');
    }
}
