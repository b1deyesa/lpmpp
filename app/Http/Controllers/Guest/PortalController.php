<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\PortalPost;
use App\Models\Pusat;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index(Pusat $pusat)
    {
        $posts = PortalPost::whereHas('categories', function ($q) use ($pusat) { $q->where('pusat_id', $pusat->id); })->orderByDesc('id')->get();
        
        return view('guest.portal.index', [
            'posts' => $posts,
            'pusat' => $pusat
        ]);
    }
}