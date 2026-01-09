<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pusat;
use Illuminate\Http\Request;

class PusatController extends Controller
{
    public function index()
    {
        return view('guest.pusat', [
            'pusats' => Pusat::all()
        ]);
    }
}
