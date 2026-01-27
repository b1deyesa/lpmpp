<?php

namespace App\Http\Controllers\Guest;

use App\Models\Pusat;
use App\Models\Sambutan;
use App\Models\Akreditasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\PortalPost;
use App\Models\Website;

class HomeController extends Controller
{
    public function index()
    {
        $website = Website::first();
        
        if ($website->active) {
            return view('guest.home', [
                'website' => Website::first(),
                'sambutan' => Sambutan::first(),
                'pusats' => Pusat::all(),
                'jenjangs' => Akreditasi::where('status', true)->select('jenjang', DB::raw('count(*) as total'))->groupBy('jenjang')->orderByDesc('total')->pluck('total', 'jenjang')->toArray(),
                'akreditasis' => Akreditasi::where('status', true)->selectRaw("CASE WHEN nilai = 'Terakreditasi Sementara' THEN 'Sementara' WHEN nilai = 'Belum Terakreditasi' THEN 'Belum' ELSE nilai END as nilai_label, COUNT(*) as total")->groupBy('nilai_label')->orderByRaw("FIELD(nilai_label, 'Unggul', 'A', 'Baik Sekali', 'B', 'Baik', 'Sementara', 'Belum')")->pluck('total', 'nilai_label')->toArray(),
                'posts' => PortalPost::orderBy('id', 'desc')->paginate(4),
                'expireds' => Akreditasi::where('status', true)->selectRaw('CASE WHEN tanggal_kadaluarsa < CURDATE() THEN "Expired" WHEN DATEDIFF(tanggal_kadaluarsa, CURDATE()) < 365 THEN "< 1 Tahun" WHEN DATEDIFF(tanggal_kadaluarsa, CURDATE()) < 730 THEN "< 2 Tahun" WHEN DATEDIFF(tanggal_kadaluarsa, CURDATE()) < 1095 THEN "< 3 Tahun" ELSE ">= 3 Tahun" END as masa_expired, COUNT(*) as total')->groupBy('masa_expired')->orderByRaw('FIELD(masa_expired, "Expired", "< 1 Tahun", "< 2 Tahun", "< 3 Tahun", ">= 3 Tahun")')->pluck('total', 'masa_expired')->toArray()
            ]);    
        }
        
        return view('guest.soft-launching');
        return view('guest.maintenance');
    }
}