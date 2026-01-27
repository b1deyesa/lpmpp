<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    public function index()
    {
        return view('guest.sambutan', [
            'sambutan' => Sambutan::first()
        ]);
    }
}
