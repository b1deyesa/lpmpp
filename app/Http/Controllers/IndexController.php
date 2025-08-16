<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index()
    {
        $program_studis = Http::get('https://sipenjamu-lpmpp-unpatti.id/api/program-studi')->collect('data');
        
        $akreditasis = Http::get('https://sipenjamu-lpmpp-unpatti.id/api/akreditasi')->collect('data');

        // Urutan label akreditasi
        $order = ['Unggul', 'Baik Sekali', 'Baik', 'A', 'B', 'C'];

        $labels = [];
        $data   = [];
        $colors = [];

        $colorMap = [
            'Unggul'      => 'rgba(66, 165, 3, 0.7)',
            'Baik Sekali' => 'rgba(220, 50, 76, 0.7)',
            'Baik'        => 'rgba(203, 189, 56, 0.7)',
            'A'           => 'rgba(45, 100, 13, 0.7)',
            'B'           => 'rgba(117, 212, 57, 0.7)',
            'C'           => 'rgba(0, 150, 200, 0.7)',
        ];

        foreach ($order as $label) {
            $labels[] = $label;
            $data[]   = isset($akreditasis[$label]) ? count($akreditasis[$label]) : 0;
            $colors[] = $colorMap[$label];
        }

        // Bungkus hasilnya dalam satu array
        $akreditasi_program_studi = [
            'labels' => $labels,
            'data'   => $data,
            'colors' => $colors,
        ];

        return view('index', [
            'beritas'                => Berita::orderBy('id', 'desc')->get(),
            'program_studis'         => $program_studis,
            'akreditasis'            => $akreditasis,
            'akreditasi_program_studi' => $akreditasi_program_studi,
        ]);
    }
}
