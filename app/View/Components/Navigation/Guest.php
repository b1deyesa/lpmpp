<?php

namespace App\View\Components\Navigation;

use Closure;
use App\Models\Pusat;
use Illuminate\View\Component;
use App\Models\LaporanCategory;
use App\Models\RenstraCategory;
use App\Models\PelatihanCategory;
use App\Models\LayananBkdCategory;
use App\Models\SertifikatCategory;
use App\Models\DokumenMbkmCategory;
use Illuminate\Contracts\View\View;
use App\Models\MateriKegiatanCategory;
use App\Models\SuratKeputusanCategory;
use App\Models\PeraturanRektorCategory;
use App\Models\DokumenKurikulumCategory;
use App\Models\InovasiPembelajaranCategory;
use App\Models\PendampinganKurikulumCategory;
use App\Models\PeraturanPerundangUndanganCategory;
use App\Models\InstrumenAkreditasiNasionalCategory;
use App\Models\PendampinganAkreditasiNasionalCategory;
use App\Models\InstrumenAkreditasiInternasionalCategory;
use App\Models\PendampinganAkreditasiInternasionalCategory;

class Guest extends Component
{
    public $renstra_categories = null;
    public $pusats = null;
    public $laporan_categories = null;
    public $peraturan_perundang_undangan_categories = null;
    public $peraturan_rektor_categories = null;
    public $surat_keputusan_categories = null;
    public $sertifikat_categories = null;
    public $materi_kegiatan_categories = null;
    public $dokumen_kurikulum_categories = null;
    public $dokumen_mbkm_categories = null;
    public $pendampingan_akreditasi_nasional_categories = null;
    public $pendampingan_akreditasi_internasional_categories = null;
    public $pendampingan_kurikulum_categories = null;
    public $inovasi_pembelajaran_categories = null;
    public $layanan_bkd_categories = null;
    public $pelatihan_categories = null;
    public $instrumen_akreditasi_nasional_categories = null;
    public $instrumen_akreditasi_internasional_categories = null;
    
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->renstra_categories = RenstraCategory::all();
        $this->pusats = Pusat::all();
        $this->laporan_categories = LaporanCategory::all();
        $this->peraturan_perundang_undangan_categories = PeraturanPerundangUndanganCategory::all();
        $this->peraturan_rektor_categories = PeraturanRektorCategory::all();
        $this->surat_keputusan_categories = SuratKeputusanCategory::all();
        $this->sertifikat_categories = SertifikatCategory::all();
        $this->materi_kegiatan_categories = MateriKegiatanCategory::all();
        $this->dokumen_kurikulum_categories = DokumenKurikulumCategory::all();
        $this->dokumen_mbkm_categories = DokumenMbkmCategory::all();
        $this->pendampingan_akreditasi_nasional_categories = PendampinganAkreditasiNasionalCategory::all();
        $this->pendampingan_akreditasi_internasional_categories = PendampinganAkreditasiInternasionalCategory::all();
        $this->pendampingan_kurikulum_categories = PendampinganKurikulumCategory::all();
        $this->inovasi_pembelajaran_categories = InovasiPembelajaranCategory::all();
        $this->layanan_bkd_categories = LayananBkdCategory::all();
        $this->pelatihan_categories = PelatihanCategory::all();
        $this->instrumen_akreditasi_nasional_categories = InstrumenAkreditasiNasionalCategory::all();
        $this->instrumen_akreditasi_internasional_categories = InstrumenAkreditasiInternasionalCategory::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation.guest');
    }
}
