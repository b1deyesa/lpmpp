<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pusat;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('guest.index', [
            'sambutan' => Sambutan::first(),
            'pusats' => Pusat::all()
        ]);
    }
}