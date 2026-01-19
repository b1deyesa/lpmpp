<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\InstrumenAkreditasiInternasionalController;
use App\Http\Controllers\Dashboard\PendampinganAkreditasiInternasionalController;

Route::namespace('App\Http\Controllers')->group(function() {
    
    // Auth
    Route::namespace('Auth')->name('auth.')->group(function() {
        Route::get('/login', 'LoginController@index')->name('login.index');
        Route::post('/login', 'LoginController@post')->name('login.post');
    });
    
    // Guest
    Route::namespace('Guest')->name('guest.')->group(function() {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/visi-misi', 'VisiMisiController@index')->name('visi-misi');
        Route::get('/sejarah', 'SejarahController@index')->name('sejarah');
        Route::get('/struktur-organisasi', 'StrukturOrganisasiController@index')->name('struktur-organisasi');
        Route::get('/tugas-fungsi', 'TugasFungsiController@index')->name('tugas-fungsi');
        Route::prefix('portal/{pusat:singkatan_bagian}')->name('portal.')->group(function() {
            Route::get('/', 'PortalController@index')->name('home');
        });
    });
    
    // Dashboard
    Route::namespace('Dashboard')->prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function() {
        
        Route::get('/', 'HomeController@index')->name('home');
        
        // Profil
        Route::resource('sambutan', 'SambutanController');
        Route::resource('visi-misi', 'VisiMisiController');
        Route::resource('struktur-organisasi', 'StrukturOrganisasiController');
        Route::resource('tugas-fungsi', 'TugasFungsiController');                                                                             
        Route::resource('sejarah', 'SejarahController');
        Route::resource('pengelola', 'PengelolaController');
        Route::resource('pusat', 'PusatController');
        Route::resource('pusat.portal', 'PortalController');
        Route::resource('akreditasi', 'AkreditasiController');
        Route::resource('renstra', 'RenstraController');
        Route::resource('auditor-mutu-internal', 'AuditorMutuInternalController');
        Route::resource('asesor-akreditasi', 'AsesorAkreditasiController');
        
        // Kerja sama
        Route::resource('kerja-sama-luar-negeri', 'KerjaSamaLuarNegeriController');
        Route::resource('kerja-sama-dalam-negeri', 'KerjaSamaDalamNegeriController');
        
        // Informasi
        Route::resource('portal-informasi', 'PortalInformasiController');
        
        // Survey
        Route::resource('survey', 'SurveyController');
        Route::resource('survey.survey-form', 'SurveyFormController');
        Route::resource('laporan-survey', 'LaporanSurveyController');
        
        // Download
        Route::resource('laporan', 'LaporanController');
        Route::resource('peraturan-perundang-undangan', 'PeraturanPerundangUndanganController');
        Route::resource('peraturan-rektor', 'PeraturanRektorController');
        Route::resource('surat-keputusan', 'SuratKeputusanController');
        Route::resource('sertifikat', 'SertifikatController');
        Route::resource('materi-kegiatan', 'MateriKegiatanController');
        Route::resource('dokumen-kurikulum', 'DokumenKurikulumController');
        Route::resource('dokumen-mbkm', 'DokumenMbkmController');
        
        // Layanan
        Route::resource('spmi', 'SpmiController');
        Route::resource('pendampingan-akreditasi-nasional', 'PendampinganAkreditasiNasionalController');
        Route::resource('pendampingan-akreditasi-internasional', PendampinganAkreditasiInternasionalController::class)->parameters(['pendampingan-akreditasi-internasional' => 'pendampingan']);
        Route::resource('pendampingan-kurikulum', 'PendampinganKurikulumController');
        Route::resource('inovasi-pembelajaran', 'InovasiPembelajaranController');
        Route::resource('layanan-bkd', 'LayananBkdController');
        Route::resource('pelatihan', 'PelatihanController');
        
        // Akreditasi
        Route::resource('akreditasi-institusi', 'AkreditasiInstitusiController');
        Route::resource('akreditasi-prodi-nasional', 'AkreditasiProdiNasionalController');
        Route::resource('akreditasi-prodi-internasional', 'AkreditasiProdiInternasionalController');
        Route::resource('instrumen-akreditasi-nasional', 'InstrumenAkreditasiNasionalController');
        Route::resource('instrumen-akreditasi-internasional', InstrumenAkreditasiInternasionalController::class )->parameters(['instrumen-akreditasi-internasional' => 'instrumen']);
        Route::post('/akreditasi/import', 'AkreditasiController@import')->name('akreditasi.import');
        
        // Truncate
        Route::post('/sambutan/truncate', 'SambutanController@truncate')->name('sambutan.truncate');
        Route::post('/visi-misi/truncate', 'VisiMisiController@truncate')->name('visi-misi.truncate');
        Route::post('/struktur-organisasi/truncate', 'StrukturOrganisasiController@truncate')->name('struktur-organisasi.truncate');
        Route::post('/tugas-fungsi/truncate', 'TugasFungsiController@truncate')->name('tugas-fungsi.truncate');
        Route::post('/sejarah/truncate', 'SejarahController@truncate')->name('sejarah.truncate');
        Route::post('/pengelola/truncate', 'PengelolaController@truncate')->name('pengelola.truncate');
        Route::post('/pusat/truncate', 'PusatController@truncate')->name('pusat.truncate');
        Route::post('/pusat/portal/truncate', 'PortalController@truncate')->name('pusat.portal.truncate');
        Route::post('/akreditasi/truncate', 'AkreditasiController@truncate')->name('akreditasi.truncate');
        Route::post('/renstra/truncate', 'RenstraController@truncate')->name('renstra.truncate');
        Route::post('/auditor-mutu-internal/truncate', 'AuditorMutuInternalController@truncate')->name('auditor-mutu-internal.truncate');
        Route::post('/asesor-akreditasi/truncate', 'AsesorAkreditasiController@truncate')->name('asesor-akreditasi.truncate');
        Route::post('/kerja-sama-luar-negeri/truncate', 'KerjaSamaLuarNegeriController@truncate')->name('kerja-sama-luar-negeri.truncate');
        Route::post('/kerja-sama-dalam-negeri/truncate', 'KerjaSamaDalamNegeriController@truncate')->name('kerja-sama-dalam-negeri.truncate');
        Route::post('/portal-informasi/truncate', 'PortalInformasiController@truncate')->name('portal-informasi.truncate');
        Route::post('/survey/truncate', 'SurveyController@truncate')->name('survey.truncate');
        Route::post('/survey/{survey}/truncate', 'SurveyFormController@truncate')->name('survey.survey-form.truncate');
        Route::post('/laporan-survey/truncate', 'LaporanSurveyController@truncate')->name('laporan-survey.truncate');
        Route::post('/laporan/truncate', 'LaporanController@truncate')->name('laporan.truncate');
        Route::post('/peraturan-perundang-undangan/truncate', 'PeraturanPerundangUndanganController@truncate')->name('peraturan-perundang-undangan.truncate');
        Route::post('/peraturan-rektor/truncate', 'PeraturanRektorController@truncate')->name('peraturan-rektor.truncate');
        Route::post('/surat-keputusan/truncate', 'SuratKeputusanController@truncate')->name('surat-keputusan.truncate');
        Route::post('/sertifikat/truncate', 'SertifikatController@truncate')->name('sertifikat.truncate');
        Route::post('/materi-kegiatan/truncate', 'MateriKegiatanController@truncate')->name('materi-kegiatan.truncate');
        Route::post('/dokumen-kurikulum/truncate', 'DokumenKurikulumController@truncate')->name('dokumen-kurikulum.truncate');
        Route::post('/dokumen-mbkm/truncate', 'DokumenMbkmController@truncate')->name('dokumen-mbkm.truncate');
        Route::post('/spmi/truncate', 'SpmiController@truncate')->name('spmi.truncate');
        Route::post('/pendampingan-akreditasi-nasional/truncate', 'PendampinganAkreditasiNasionalController@truncate')->name('pendampingan-akreditasi-nasional.truncate');
        Route::post('/pendampingan-akreditasi-internasional/truncate', 'PendampinganAkreditasiInternasionalController@truncate')->name('pendampingan-akreditasi-internasional.truncate');
        Route::post('/pendampingan-kurikulum/truncate', 'PendampinganKurikulumController@truncate')->name('pendampingan-kurikulum.truncate');
        Route::post('/inovasi-pembelajaran/truncate', 'InovasiPembelajaranController@truncate')->name('inovasi-pembelajaran.truncate');
        Route::post('/layanan-bkd/truncate', 'LayananBkdController@truncate')->name('layanan-bkd.truncate');
        Route::post('/pelatihan/truncate', 'PelatihanController@truncate')->name('pelatihan.truncate');
        Route::post('/akreditasi-institusi/truncate', 'AkreditasiInstitusiController@truncate')->name('akreditasi-institusi.truncate');
        Route::post('/akreditasi-prodi-nasional/truncate', 'AkreditasiProdiNasionalController@truncate')->name('akreditasi-prodi-nasional.truncate');
        Route::post('/akreditasi-prodi-internasional/truncate', 'AkreditasiProdiInternasionalController@truncate')->name('akreditasi-prodi-internasional.truncate');
        Route::post('/instrumen-akreditasi-nasional/truncate', 'InstrumenAkreditasiNasionalController@truncate')->name('instrumen-akreditasi-nasional.truncate');
        Route::post('/instrumen-akreditasi-internasional/truncate', 'InstrumenAkreditasiInternasionalController@truncate')->name('instrumen-akreditasi-internasional.truncate');
        
        Route::get('/laporan/{laporan}/download', 'LaporanController@download')->name('laporan.download');
        Route::get('/peraturan-perundang-undangan/{peraturanPerundangUndangan}/download', 'PeraturanPerundangUndanganController@download')->name('peraturan-perundang-undangan.download');
        Route::get('/peraturan-rektor/{peraturanRektor}/download', 'PeraturanRektorController@download')->name('peraturan-rektor.download');
        Route::get('/surat-keputusan/{suratKeputusan}/download', 'SuratKeputusanController@download')->name('surat-keputusan.download');
        Route::get('/sertifikat/{sertifikat}/download', 'SertifikatController@download')->name('sertifikat.download');
        Route::get('/materi-kegiatan/{materiKegiatan}/download', 'MateriKegiatanController@download')->name('materi-kegiatan.download');
        Route::get('/dokumen-kurikulum/{dokumenKurikulum}/download', 'DokumenKurikulumController@download')->name('dokumen-kurikulum.download');
        Route::get('/dokumen-mbkm/{dokumenMbkm}/download', 'DokumenMbkmController@download')->name('dokumen-mbkm.download');        
        Route::get('/instrumen-akreditasi-nasional/{instrumenAkreditasiNasional}/download', 'InstrumenAkreditasiNasionalController@download')->name('instrumen-akreditasi-nasional.download');        
        Route::get('/instrumen-akreditasi-internasional/{instrumenAkreditasiInternasional}/download', 'InstrumenAkreditasiInternasionalController@download')->name('instrumen-akreditasi-internasional.download');        
    });
});


















Route::post('/ckeditor/upload', function (Request $request) {
    $request->validate([
        'upload' => 'required|image'
    ]);

    $path = $request->file('upload')->store('ckeditor', 'public');

    return response()->json([
        'url' => asset('storage/' . $path)
    ]);
});