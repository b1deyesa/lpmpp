<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
use App\Models\TenagaPengelola;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        return view('guest.struktur-organisasi', [
            'struktur_organisasi' => StrukturOrganisasi::first(),
            'tenaga_pengelolas' => TenagaPengelola::all()
        ]);
    }
}
