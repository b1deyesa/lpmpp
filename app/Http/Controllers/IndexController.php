<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'beritas' => Berita::orderBy('id', 'desc')->get()
        ]);
    }
}
