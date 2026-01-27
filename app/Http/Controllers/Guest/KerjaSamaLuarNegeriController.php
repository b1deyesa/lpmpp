<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\KerjaSamaLuarNegeri;
use Illuminate\Http\Request;

class KerjaSamaLuarNegeriController extends Controller
{
    public function index()
    {
        return view('guest.kerja-sama-luar-negeri', [
            'kerja_sama_luar_negeri' => KerjaSamaLuarNegeri::first()
        ]);
    }
}
