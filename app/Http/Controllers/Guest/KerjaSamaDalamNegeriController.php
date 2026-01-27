<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\KerjaSamaDalamNegeri;

class KerjaSamaDalamNegeriController extends Controller
{
    public function index()
    {
        return view('guest.kerja-sama-dalam-negeri', [
            'kerja_sama_dalam_negeri' => KerjaSamaDalamNegeri::first()
        ]);
    }
}