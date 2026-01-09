<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        return view('guest.sejarah', [
            'sejarah' => Sejarah::first()
        ]);
    }
}
