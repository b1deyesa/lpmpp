<?php

namespace App\Http\Controllers\Guest;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index()
    {
        return view('guest.laporan', [
            'laporans' => Laporan::all()
        ]);
    }
}
