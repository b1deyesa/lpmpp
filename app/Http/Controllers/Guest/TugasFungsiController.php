<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\TugasFungsi;
use Illuminate\Http\Request;

class TugasFungsiController extends Controller
{
    public function index()
    {
        return view('guest.tugas-fungsi', [
            'tugas_fungsi' => TugasFungsi::first()
        ]);
    }
}
