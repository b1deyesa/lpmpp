<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        Route::resource('kerja-sama-luar-negeri', 'KerjaSamaLuarNegeriController');
        Route::resource('kerja-sama-dalam-negeri', 'KerjaSamaDalamNegeriController');
        Route::resource('portal-informasi', 'PortalInformasiController');
        Route::resource('survey-kepuasan-fakultas', 'SurveyKepuasanFakultasController');
        Route::resource('survey-kepuasan-unit-kerja', 'SurveyKepuasanUnitKerjaController');
        Route::resource('survey-pemahaman-visi-misi', 'SurveyPemahamanVisiMisiController');
        Route::resource('laporan-survey', 'LaporanSurveyController');
        Route::resource('laporan', 'LaporanController');
        Route::resource('peraturan-perundang-undangan', 'PeraturanPerundangUndanganController');
        Route::resource('peraturan-rektor', 'PeraturanRektorController');
        Route::resource('surat-keputusan', 'SuratKeputusanController');
        Route::resource('sertifikat', 'SertifikatController');
        Route::resource('materi-kegiatan', 'MateriKegiatanController');
        Route::resource('dokumen-kurikulum', 'DokumenKurikulumController');
        Route::resource('dokumen-mbkm', 'DokumenMbkmController');
        Route::resource('spmi', 'SpmiController');
        Route::resource('pendampingan-akreditasi-nasional', 'PendampinganAkreditasiNasionalController');
        Route::resource('pendampingan-akreditasi-internasional', 'PendampinganAkreditasiInternasionalController');
        Route::resource('pendampingan-kurikulum', 'PendampinganKurikulumController');
        Route::resource('inovasi-pembelajaran', 'InovasiPembelajaranController');
        Route::resource('layanan-bkd', 'LayananBkdController');
        Route::resource('pelatihan', 'PelatihanController');
        Route::resource('akreditasi-institusi', 'AkreditasiInstitusiController');
        Route::resource('akreditasi-prodi-nasional', 'AkreditasiProdiNasionalController');
        Route::resource('akreditasi-prodi-internasional', 'AkreditasiProdiInternasionalController');
        Route::resource('instrumen-akreditasi-nasional', 'InstrumenAkreditasiNasionalController');
        Route::resource('instrumen-akreditasi-internasional', 'InstrumenAkreditasiInternasionalController');
        Route::post('/akreditasi/import', 'AkreditasiController@import')->name('akreditasi.import');
        
        // Truncate
        Route::post('/sambutan/truncate', 'SambutanController@truncate')->name('sambutan.truncate');
        Route::post('/visi-misi/truncate', 'VisiMisiController@truncate')->name('visi-misi.truncate');
        Route::post('/struktur-organisasi/truncate', 'StrukturOrganisasiController@truncate')->name('struktur-organisasi.truncate');
        Route::post('/tugas-fungsi/truncate', 'TugasFungsiController@truncate')->name('tugas-fungsi.truncate');
        Route::post('/sejarah/truncate', 'SejarahController@truncate')->name('sejarah.truncate');
        Route::post('/pengelola/truncate', 'PengelolaController@truncate')->name('pengelola.truncate');
        Route::post('/pusat/truncate', 'PusatController@truncate')->name('pusat.truncate');
        Route::post('/akreditasi/truncate', 'AkreditasiController@truncate')->name('akreditasi.truncate');
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