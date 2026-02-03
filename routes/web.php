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
        Route::post('/logout', 'LogoutController@post')->name('logout.post');
    });
    
    // Guest
    Route::namespace('Guest')->name('guest.')->group(function() {
        
        Route::get('/', 'HomeController@index')->name('home');
        
        // Profil
        Route::get('/sambutan', 'SambutanController@index')->name('sambutan');
        Route::get('/visi-misi', 'VisiMisiController@index')->name('visi-misi');
        Route::get('/sejarah', 'SejarahController@index')->name('sejarah');
        Route::get('/struktur-organisasi', 'StrukturOrganisasiController@index')->name('struktur-organisasi');
        Route::get('/tugas-fungsi', 'TugasFungsiController@index')->name('tugas-fungsi');
        Route::get('/renstra', 'RenstraController@index')->name('renstra');
        Route::get('/renstra/{renstra_category}', 'RenstraController@show')->name('renstra-category');

        // Kerja Sama
        Route::get('/kerja-sama-luar-negeri', 'KerjaSamaLuarNegeriController@index')->name('kerja-sama-luar-negeri');
        Route::get('/kerja-sama-dalam-negeri', 'KerjaSamaDalamNegeriController@index')->name('kerja-sama-dalam-negeri');

        // Informasi
        Route::prefix('portal/{pusat:singkatan_bagian}')->name('portal.')->group(function() {
            Route::get('/', 'PortalController@index')->name('index');
        });

        // Survey
        Route::get('/survey', 'SurveyController@index')->name('survey');
        Route::get('/survey/{survey}/form', 'SurveyFormController@index')->name('survey-form');
        Route::get('/laporan-survey', 'LaporanSurveyController@index')->name('laporan-survey');

        // Download
        Route::get('/laporan', 'LaporanController@index')->name('laporan');
        Route::get('/laporan/{laporan_category}', 'LaporanController@show')->name('laporan-category');
        Route::get('/peraturan-perundang-undangan', 'PeraturanPerundangUndanganController@index')->name('peraturan-perundang-undangan');
        Route::get('/peraturan-perundang-undangan/{ppuCategory}', 'PeraturanPerundangUndanganController@show')->name('peraturan-perundang-undangan-category');
        Route::get('/peraturan-rektor', 'PeraturanRektorController@index')->name('peraturan-rektor');
        Route::get('/peraturan-rektor/{peraturan_rektor_category}', 'PeraturanRektorController@show')->name('peraturan-rektor-category');
        Route::get('/surat-keputusan', 'SuratKeputusanController@index')->name('surat-keputusan');
        Route::get('/surat-keputusan/{surat_keputusan_category}', 'SuratKeputusanController@show')->name('surat-keputusan-category');
        Route::get('/sertifikat', 'SertifikatController@index')->name('sertifikat');
        Route::get('/sertifikat/{sertifikat_category}', 'SertifikatController@show')->name('sertifikat-category');
        Route::get('/materi-kegiatan', 'MateriKegiatanController@index')->name('materi-kegiatan');
        Route::get('/materi-kegiatan/{materi_kegiatan_category}', 'MateriKegiatanController@show')->name('materi-kegiatan-category');
        Route::get('/dokumen-kurikulum', 'DokumenKurikulumController@index')->name('dokumen-kurikulum');
        Route::get('/dokumen-kurikulum/{dokumen_kurikulum_category}', 'DokumenKurikulumController@show')->name('dokumen-kurikulum-category');
        Route::get('/dokumen-mbkm', 'DokumenMbkmController@index')->name('dokumen-mbkm');
        Route::get('/dokumen-mbkm/{dokumen_mbkm_category}', 'DokumenMbkmController@show')->name('dokumen-mbkm-category');

        // Layanan
        Route::get('/spmi', 'SpmiController@index')->name('spmi');
        Route::get('/pendampingan-akreditasi-nasional', 'PendampinganAkreditasiNasionalController@index')->name('pendampingan-akreditasi-nasional');
        Route::get('/pendampingan-akreditasi-nasional/{panCategory}', 'PendampinganAkreditasiNasionalController@show')->name('pendampingan-akreditasi-nasional-category');
        Route::get('/pendampingan-akreditasi-internasional', 'PendampinganAkreditasiInternasionalController@index')->name('pendampingan-akreditasi-internasional');
        Route::get('/pendampingan-akreditasi-internasional/{paiCategory}', 'PendampinganAkreditasiInternasionalController@show')->name('pendampingan-akreditasi-internasional-category');
        Route::get('/pendampingan-kurikulum', 'PendampinganKurikulumController@index')->name('pendampingan-kurikulum');
        Route::get('/pendampingan-kurikulum/{pkCategory}', 'PendampinganKurikulumController@show')->name('pendampingan-kurikulum-category');
        Route::get('/inovasi-pembelajaran', 'InovasiPembelajaranController@index')->name('inovasi-pembelajaran');
        Route::get('/inovasi-pembelajaran/{inovasi_pembelajaran_category}', 'InovasiPembelajaranController@show')->name('inovasi-pembelajaran-category');
        Route::get('/layanan-bkd', 'LayananBkdController@index')->name('layanan-bkd');
        Route::get('/layanan-bkd/{layanan_bkd_category}', 'LayananBkdController@show')->name('layanan-bkd-category');
        Route::get('/pelatihan', 'PelatihanController@index')->name('pelatihan.index');
        Route::get('/pelatihan/{pelatihan}', 'PelatihanController@show')->name('pelatihan.show');

        // Akreditasi
        Route::get('/akreditasi-institusi', 'AkreditasiInstitusiController@index')->name('akreditasi-institusi');
        Route::get('/akreditasi-prodi-nasional', 'AkreditasiProdiNasionalController@index')->name('akreditasi-prodi-nasional');
        Route::get('/akreditasi-prodi-internasional', 'AkreditasiProdiInternasionalController@index')->name('akreditasi-prodi-internasional');
        Route::get('/instrumen-akreditasi-nasional', 'InstrumenAkreditasiNasionalController@index')->name('instrumen-akreditasi-nasional');
        Route::get('/instrumen-akreditasi-nasional/{ianCategory}', 'InstrumenAkreditasiNasionalController@show')->name('instrumen-akreditasi-nasional-category');
        Route::get('/instrumen-akreditasi-internasional', 'InstrumenAkreditasiInternasionalController@index')->name('instrumen-akreditasi-internasional');
        Route::get('/instrumen-akreditasi-internasional/{iaiCategory}', 'InstrumenAkreditasiInternasionalController@show')->name('instrumen-akreditasi-internasional-category');
        
        // Download
        Route::get('/renstra/{renstra}/download', 'RenstraController@download')->name('renstra.download');
        Route::get('/laporan/{laporan}/download', 'LaporanController@download')->name('laporan.download');
        Route::get('/peraturan-perundang-undangan/{peraturanPerundangUndangan}/download', 'PeraturanPerundangUndanganController@download')->name('peraturan-perundang-undangan.download');
        Route::get('/peraturan-rektor/{peraturanRektor}/download', 'PeraturanRektorController@download')->name('peraturan-rektor.download');
        Route::get('/surat-keputusan/{suratKeputusan}/download', 'SuratKeputusanController@download')->name('surat-keputusan.download');
        Route::get('/sertifikat/{sertifikat}/download', 'SertifikatController@download')->name('sertifikat.download');
        Route::get('/materi-kegiatan/{materiKegiatan}/download', 'MateriKegiatanController@download')->name('materi-kegiatan.download');
        Route::get('/dokumen-kurikulum/{dokumenKurikulum}/download', 'DokumenKurikulumController@download')->name('dokumen-kurikulum.download');
        Route::get('/dokumen-mbkm/{dokumenMbkm}/download', 'DokumenMbkmController@download')->name('dokumen-mbkm.download');
        Route::get('/pendampingan-akreditasi-nasional/{pendampinganAkreditasiNasional}/download', 'PendampinganAkreditasiNasionalController@download')->name('pendampingan-akreditasi-nasional.download');
        Route::get('/pendampingan-akreditasi-internasional/{pai}/download', 'PendampinganAkreditasiInternasionalController@download')->name('pendampingan-akreditasi-internasional.download');
        Route::get('/pendampingan-kurikulum/{pk}/download', 'PendampinganKurikulumController@download')->name('pendampingan-kurikulum.download');
        Route::get('/inovasi-pembelajaran/{inovasiPembelajaran}/download', 'InovasiPembelajaranController@download')->name('inovasi-pembelajaran.download');
        Route::get('/layanan-bkd/{layanan_bkd}/download', 'LayananBkdController@download')->name('layanan-bkd.download');
        Route::get('/instrumen-akreditasi-nasional/{instrumenAkreditasiNasional}/download', 'InstrumenAkreditasiNasionalController@download')->name('instrumen-akreditasi-nasional.download');
        Route::get('/instrumen-akreditasi-internasional/{instrumenAkreditasiInternasional}/download', 'InstrumenAkreditasiInternasionalController@download')->name('instrumen-akreditasi-internasional.download');
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
        Route::resource('akreditasi', 'AkreditasiController');
        Route::resource('renstra', 'RenstraController');
        Route::resource('renstra-category', 'RenstraCategoryController');
        Route::resource('auditor-mutu-internal', 'AuditorMutuInternalController');
        Route::resource('asesor-akreditasi', 'AsesorAkreditasiController');
        
        // Kerja sama
        Route::resource('kerja-sama-luar-negeri', 'KerjaSamaLuarNegeriController');
        Route::resource('kerja-sama-dalam-negeri', 'KerjaSamaDalamNegeriController');
        
        // Informasi
        Route::resource('pusat.portal', 'PortalController');
        Route::resource('portal-informasi', 'PortalInformasiController');
        
        // Survey
        Route::resource('survey', 'SurveyController');
        Route::resource('survey.survey-form', 'SurveyFormController');
        Route::resource('laporan-survey', 'LaporanSurveyController');
        
        // Download
        Route::resource('laporan', 'LaporanController');
        Route::resource('laporan-category', 'LaporanCategoryController');
        Route::resource('peraturan-perundang-undangan', 'PeraturanPerundangUndanganController');
        Route::resource('peraturan-perundang-undangan-category', 'PeraturanPerundangUndanganCategoryController')->parameters(['peraturan-perundang-undangan-category' => 'ppuCategory']);
        Route::resource('peraturan-rektor', 'PeraturanRektorController');
        Route::resource('peraturan-rektor-category', 'PeraturanRektorCategoryController');
        Route::resource('surat-keputusan', 'SuratKeputusanController');
        Route::resource('surat-keputusan-category', 'SuratKeputusanCategoryController');
        Route::resource('sertifikat', 'SertifikatController');
        Route::resource('sertifikat-category', 'SertifikatCategoryController');
        Route::resource('materi-kegiatan', 'MateriKegiatanController');
        Route::resource('materi-kegiatan-category', 'MateriKegiatanCategoryController');
        Route::resource('dokumen-kurikulum', 'DokumenKurikulumController');
        Route::resource('dokumen-kurikulum-category', 'DokumenKurikulumCategoryController');
        Route::resource('dokumen-mbkm', 'DokumenMbkmController');
        Route::resource('dokumen-mbkm-category', 'DokumenMbkmCategoryController');
        
        // Layanan
        Route::resource('spmi', 'SpmiController');
        Route::resource('pendampingan-akreditasi-nasional', 'PendampinganAkreditasiNasionalController');
        Route::resource('pendampingan-akreditasi-nasional-category', 'PendampinganAkreditasiNasionalCategoryController')->parameters(['pendampingan-akreditasi-nasional-category' => 'panCategory']);
        Route::resource('pendampingan-akreditasi-internasional', 'PendampinganAkreditasiInternasionalController')->parameters(['pendampingan-akreditasi-internasional' => 'pai']);
        Route::resource('pendampingan-akreditasi-internasional-category', 'PendampinganAkreditasiInternasionalCategoryController')->parameters(['pendampingan-akreditasi-internasional-category' => 'paiCategory']);
        Route::resource('pendampingan-kurikulum', 'PendampinganKurikulumController');
        Route::resource('pendampingan-kurikulum-category', 'PendampinganKurikulumCategoryController')->parameters(['pendampingan-kurikulum-category' => 'pkCategory']);
        Route::resource('inovasi-pembelajaran', 'InovasiPembelajaranController');
        Route::resource('inovasi-pembelajaran-category', 'InovasiPembelajaranCategoryController');
        Route::resource('layanan-bkd', 'LayananBkdController');
        Route::resource('layanan-bkd-category', 'LayananBkdCategoryController');
        Route::resource('pelatihan', 'PelatihanController');
        
        // Akreditasi
        Route::resource('akreditasi-institusi', 'AkreditasiInstitusiController');
        Route::resource('akreditasi-prodi-nasional', 'AkreditasiProdiNasionalController');
        Route::resource('akreditasi-prodi-internasional', 'AkreditasiProdiInternasionalController');
        Route::resource('instrumen-akreditasi-nasional', 'InstrumenAkreditasiNasionalController');
        Route::resource('instrumen-akreditasi-nasional-category', 'InstrumenAkreditasiNasionalCategoryController')->parameters(['instrumen-akreditasi-nasional-category' => 'ianCategory']);
        Route::resource('instrumen-akreditasi-internasional', 'InstrumenAkreditasiInternasionalController')->parameters(['instrumen-akreditasi-internasional' => 'iai']);
        Route::resource('instrumen-akreditasi-internasional-category', 'InstrumenAkreditasiInternasionalCategoryController')->parameters(['instrumen-akreditasi-internasional-category' => 'iaiCategory']);
        Route::post('/akreditasi/import', 'AkreditasiController@import')->name('akreditasi.import');
        
        // Setting
        Route::resource('role', 'RoleController');
        Route::resource('user', 'UserController');
        Route::resource('website', 'WebsiteController');
        
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
        Route::post('/renstra/truncate/{renstra_category}', 'RenstraCategoryController@truncate')->name('renstra-category.truncate');
        Route::post('/auditor-mutu-internal/truncate', 'AuditorMutuInternalController@truncate')->name('auditor-mutu-internal.truncate');
        Route::post('/asesor-akreditasi/truncate', 'AsesorAkreditasiController@truncate')->name('asesor-akreditasi.truncate');
        Route::post('/kerja-sama-luar-negeri/truncate', 'KerjaSamaLuarNegeriController@truncate')->name('kerja-sama-luar-negeri.truncate');
        Route::post('/kerja-sama-dalam-negeri/truncate', 'KerjaSamaDalamNegeriController@truncate')->name('kerja-sama-dalam-negeri.truncate');
        Route::post('/portal-informasi/truncate', 'PortalInformasiController@truncate')->name('portal-informasi.truncate');
        Route::post('/survey/truncate', 'SurveyController@truncate')->name('survey.truncate');
        Route::post('/survey/{survey}/truncate', 'SurveyFormController@truncate')->name('survey.survey-form.truncate');
        Route::post('/laporan-survey/truncate', 'LaporanSurveyController@truncate')->name('laporan-survey.truncate');
        Route::post('/laporan/truncate', 'LaporanController@truncate')->name('laporan.truncate');
        Route::post('/laporan-category/truncate/{laporan_category}', 'LaporanCategoryController@truncate')->name('laporan-category.truncate');
        Route::post('/peraturan-perundang-undangan/truncate', 'PeraturanPerundangUndanganController@truncate')->name('peraturan-perundang-undangan.truncate');
        Route::post('/peraturan-perundang-undangan/truncate/{ppuCategory}', 'PeraturanPerundangUndanganCategoryController@truncate')->name('peraturan-perundang-undangan-category.truncate');
        Route::post('/peraturan-rektor/truncate', 'PeraturanRektorController@truncate')->name('peraturan-rektor.truncate');
        Route::post('/peraturan-rektor/truncate/{peraturan_rektor_category}', 'PeraturanRektorCategoryController@truncate')->name('peraturan-rektor-category.truncate');
        Route::post('/surat-keputusan/truncate', 'SuratKeputusanController@truncate')->name('surat-keputusan.truncate');
        Route::post('/surat-keputusan/truncate/{surat_keputusan_category}', 'SuratKeputusanCategoryController@truncate')->name('surat-keputusan-category.truncate');
        Route::post('/sertifikat/truncate', 'SertifikatController@truncate')->name('sertifikat.truncate');
        Route::post('/sertifikat/truncate/{sertifikat_category}', 'SertifikatCategoryController@truncate')->name('sertifikat-category.truncate');
        Route::post('/materi-kegiatan/truncate', 'MateriKegiatanController@truncate')->name('materi-kegiatan.truncate');
        Route::post('/materi-kegiatan/truncate/{materi_kegiatan_category}', 'MateriKegiatanCategoryController@truncate')->name('materi-kegiatan-category.truncate');
        Route::post('/dokumen-kurikulum/truncate', 'DokumenKurikulumController@truncate')->name('dokumen-kurikulum.truncate');
        Route::post('/dokumen-kurikulum/truncate/{dokumen_kurikulum_category}', 'DokumenKurikulumCategoryController@truncate')->name('dokumen-kurikulum-category.truncate');
        Route::post('/dokumen-mbkm/truncate', 'DokumenMbkmController@truncate')->name('dokumen-mbkm.truncate');
        Route::post('/dokumen-mbkm/truncate/{dokumen_mbkm_category}', 'DokumenMbkmCategoryController@truncate')->name('dokumen-mbkm-category.truncate');
        Route::post('/spmi/truncate', 'SpmiController@truncate')->name('spmi.truncate');
        Route::post('/pendampingan-akreditasi-nasional/truncate', 'PendampinganAkreditasiNasionalController@truncate')->name('pendampingan-akreditasi-nasional.truncate');
        Route::post('/pendampingan-akreditasi-nasional/truncate/{panCategory}', 'PendampinganAkreditasiNasionalCategoryController@truncate')->name('pendampingan-akreditasi-nasional-category.truncate');
        Route::post('/pendampingan-akreditasi-internasional/truncate', 'PendampinganAkreditasiInternasionalController@truncate')->name('pendampingan-akreditasi-internasional.truncate');
        Route::post('/pendampingan-akreditasi-internasional/truncate/{paiCategory}', 'PendampinganAkreditasiInternasionalCategoryController@truncate')->name('pendampingan-akreditasi-internasional-category.truncate');
        Route::post('/pendampingan-kurikulum/truncate', 'PendampinganKurikulumController@truncate')->name('pendampingan-kurikulum.truncate');
        Route::post('/pendampingan-kurikulum/truncate/{pkCategory}', 'PendampinganKurikulumCategoryController@truncate')->name('pendampingan-kurikulum-category.truncate');
        Route::post('/inovasi-pembelajaran/truncate', 'InovasiPembelajaranController@truncate')->name('inovasi-pembelajaran.truncate');
        Route::post('/inovasi-pembelajaran/truncate/{inovasi_pembelajaran_category}', 'InovasiPembelajaranCategoryController@truncate')->name('inovasi-pembelajaran-category.truncate');
        Route::post('/layanan-bkd/truncate', 'LayananBkdController@truncate')->name('layanan-bkd.truncate');
        Route::post('/layanan-bkd/truncate/{layanan_bkd_category}', 'LayananBkdCategoryController@truncate')->name('layanan-bkd-category.truncate');
        Route::post('/pelatihan/truncate', 'PelatihanController@truncate')->name('pelatihan.truncate');
        Route::post('/akreditasi-institusi/truncate', 'AkreditasiInstitusiController@truncate')->name('akreditasi-institusi.truncate');
        Route::post('/akreditasi-prodi-nasional/truncate', 'AkreditasiProdiNasionalController@truncate')->name('akreditasi-prodi-nasional.truncate');
        Route::post('/akreditasi-prodi-internasional/truncate', 'AkreditasiProdiInternasionalController@truncate')->name('akreditasi-prodi-internasional.truncate');
        Route::post('/instrumen-akreditasi-nasional/truncate', 'InstrumenAkreditasiNasionalController@truncate')->name('instrumen-akreditasi-nasional.truncate');
        Route::post('/instrumen-akreditasi-nasional/truncate/{ianCategory}', 'InstrumenAkreditasiNasionalCategoryController@truncate')->name('instrumen-akreditasi-nasional-category.truncate');
        Route::post('/instrumen-akreditasi-internasional/truncate', 'InstrumenAkreditasiInternasionalController@truncate')->name('instrumen-akreditasi-internasional.truncate');
        Route::post('/instrumen-akreditasi-internasional/truncate/{iaiCategory}', 'InstrumenAkreditasiInternasionalCategoryController@truncate')->name('instrumen-akreditasi-internasional-category.truncate');
        Route::post('/role/truncate', 'RoleController@truncate')->name('role.truncate');
        Route::post('/user/truncate', 'UserController@truncate')->name('user.truncate');
        Route::post('/website/truncate', 'WebsiteController@truncate')->name('website.truncate');
        
        // Download
        Route::get('/renstra/{renstra}/download', 'RenstraController@download')->name('renstra.download');
        Route::get('/laporan/{laporan}/download', 'LaporanController@download')->name('laporan.download');
        Route::get('/peraturan-perundang-undangan/{peraturan_perundang_undangan}/download', 'PeraturanPerundangUndanganController@download')->name('peraturan-perundang-undangan.download');
        Route::get('/peraturan-rektor/{peraturan_rektor}/download', 'PeraturanRektorController@download')->name('peraturan-rektor.download');
        Route::get('/surat-keputusan/{surat_keputusan}/download', 'SuratKeputusanController@download')->name('surat-keputusan.download');
        Route::get('/sertifikat/{sertifikat}/download', 'SertifikatController@download')->name('sertifikat.download');
        Route::get('/materi-kegiatan/{materi_kegiatan}/download', 'MateriKegiatanController@download')->name('materi-kegiatan.download');
        Route::get('/dokumen-kurikulum/{dokumen_kurikulum}/download', 'DokumenKurikulumController@download')->name('dokumen-kurikulum.download');
        Route::get('/dokumen-mbkm/{dokumen_mbkm}/download', 'DokumenMbkmController@download')->name('dokumen-mbkm.download');
        Route::get('/pendampingan-akreditasi-nasional/{pan}/download', 'PendampinganAkreditasiNasionalController@download')->name('pendampingan-akreditasi-nasional.download');
        Route::get('/pendampingan-akreditasi-internasional/{pai}/download', 'PendampinganAkreditasiInternasionalController@download')->name('pendampingan-akreditasi-internasional.download');
        Route::get('/pendampingan-kurikulum/{pk}/download', 'PendampinganKurikulumController@download')->name('pendampingan-kurikulum.download');
        Route::get('/inovasi-pembelajaran/{inovasi_pembelajaran}/download', 'InovasiPembelajaranController@download')->name('inovasi-pembelajaran.download');
        Route::get('/layanan-bkd/{layanan_bkd}/download', 'LayananBkdController@download')->name('layanan-bkd.download');
        Route::get('/instrumen-akreditasi-nasional/{ian}/download', 'InstrumenAkreditasiNasionalController@download')->name('instrumen-akreditasi-nasional.download');
        Route::get('/instrumen-akreditasi-internasional/{iai}/download', 'InstrumenAkreditasiInternasionalController@download')->name('instrumen-akreditasi-internasional.download');
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