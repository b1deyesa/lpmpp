<section class="navigation guest">
    
    {{-- Navigation --}}
    <nav class="navigation">
        <div class="navigation__container">
            
            {{-- Menu --}}
            <div class="menu">
                <a href="" class="menu__item">SIMPATTI</a>
                <a href="" class="menu__item">SIMPEL</a>
                <a href="" class="menu__item">ELPATTI</a>
                <a href="" class="menu__item">PPEPP</a>
            </div>
            
            {{-- Menu --}}
            <div class="menu">
                <a href="#" class="menu__item"><i class="menu__icon fa-solid fa-earth-europe"></i>Explore</a>
                {{-- <a href="{{ route('auth.login.index') }}" target="_blank" class="menu__item"><i class="menu__icon fa-solid fa-lock"></i>Administrator</a> --}}
            </div>
            
        </div>
    </nav>
    
    {{-- Navigation --}}
    <nav class="navigation">
        <div class="navigation__container">
                
            {{-- Banner --}}
            <a href="{{ route('guest.home') }}" class="banner">
                <div class="banner__left">
                    <img src="{{ asset('assets/img/logo-unpatti.png') }}" alt="Logo UNPATTI" class="banner__logo">
                    <img src="{{ asset('assets/img/logo-lpmpp.png') }}" alt="Logo LPMPP" class="banner__logo">
                </div>
                <div class="banner__right">
                    <h1 class="banner__title">LPMPP UNPATTI</h1>
                    <h2 class="banner__subtitle">Menggerakkan Budaya Mutu Menuju WCU</h2>
                </div>
            </a>
            
            {{-- Manu --}}
            <div class="menu">
                
                {{-- Profil --}}
                <div class="menu__dropdown">
                    <span class="dropdown__label">Profil<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu" style="left: 0">
                        <a href="{{ route('guest.visi-misi') }}" class="menu__item">Visi & Misi</a>
                        <a href="{{ route('guest.struktur-organisasi') }}" class="menu__item">Struktur Organisasi dan Personalia</a>
                        <a href="{{ route('guest.tugas-fungsi') }}" class="menu__item">Tugas dan Fungsi</a>
                        <a href="{{ route('guest.sejarah') }}" class="menu__item">Sejarah</a>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.renstra') }}" class="dropdown__label">Renstra<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($renstra_categories as $renstra_category)
                                    <a href="{{ route('guest.renstra-category', compact('renstra_category')) }}" class="menu__item">{{ $renstra_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <span class="dropdown__label">Auditor/Asesor<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu">
                                <a href="#" class="menu__item">Auditor Mutu Internal</a>
                                <a href="#" class="menu__item">Asesor Akreditasi</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Pusat --}}
                <a href="{{ route('guest.home') }}#pusat" class="menu__item menu__highlight">Pusat-Pusat</a>
                
                {{-- Kerja Sama --}}
                <div class="menu__dropdown">
                    <span class="dropdown__label">Kerja Sama<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu" style="left: 0">
                        <a href="{{ route('guest.kerja-sama-luar-negeri') }}" class="menu__item">Luar Negeri</a>
                        <a href="{{ route('guest.kerja-sama-dalam-negeri') }}" class="menu__item">Dalam Negeri</a>
                    </div>
                </div>
                
                {{-- Informasi --}}
                <div class="menu__dropdown">
                    <span class="dropdown__label">Informasi<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu">
                        @foreach ($pusats as $pusat)
                            <a href="{{ route('guest.portal.index', compact('pusat')) }}" class="menu__item">Portal {{ $pusat->nama_bagian }}</a>
                        @endforeach
                    </div>
                </div>
                
                {{-- Survey --}}
                <div class="menu__dropdown">
                    <span class="dropdown__label">Survey<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu">
                        <div class="menu__dropdown">
                            <span class="dropdown__label">Survey Kepuasan<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">Supuas Fakultas/Pascasarjana</a>
                                <a href="#" class="menu__item">Supuas Unit kerja Lainnya</a>
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <span class="dropdown__label">Survey Pemahaman Visi Misi<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">Isi Survey</a>
                                <a href="#" class="menu__item">Laporan Survey</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Download --}}
                <div class="menu__dropdown">
                    <span class="dropdown__label">Download<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu">
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.laporan') }}" class="dropdown__label">Laporan<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($laporan_categories as $laporan_category)
                                    <a href="{{ route('guest.laporan-category', compact('laporan_category')) }}" class="menu__item">{{ $laporan_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.peraturan-perundang-undangan') }}" class="dropdown__label">Peraturan Perundang-Undangan<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($peraturan_perundang_undangan_categories as $ppuCategory)
                                    <a href="{{ route('guest.peraturan-perundang-undangan-category', ['ppuCategory' => $ppuCategory]) }}" class="menu__item">{{ $ppuCategory->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.peraturan-rektor') }}" class="dropdown__label">Peraturan Rektor<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($peraturan_rektor_categories as $peraturan_rektor_category)
                                    <a href="{{ route('guest.peraturan-rektor-category', compact('peraturan_rektor_category')) }}" class="menu__item">{{ $peraturan_rektor_category->title }}</a>
                                @endforeach
                            </div>
                        </div>                        
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.surat-keputusan') }}" class="dropdown__label">Surat Keputusan<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($surat_keputusan_categories as $surat_keputusan_category)
                                    <a href="{{ route('guest.surat-keputusan-category', compact('surat_keputusan_category')) }}" class="menu__item">{{ $surat_keputusan_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.sertifikat') }}" class="dropdown__label">Sertifikat<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($sertifikat_categories as $sertifikat_category)
                                    <a href="{{ route('guest.sertifikat-category', compact('sertifikat_category')) }}" class="menu__item">{{ $sertifikat_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.materi-kegiatan') }}" class="dropdown__label">Materi Kegiatan<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($materi_kegiatan_categories as $materi_kegiatan_category)
                                    <a href="{{ route('guest.materi-kegiatan-category', compact('materi_kegiatan_category')) }}" class="menu__item">{{ $materi_kegiatan_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.dokumen-kurikulum') }}" class="dropdown__label">Dokumen Kurikulum<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($dokumen_kurikulum_categories as $dokumen_kurikulum_category)
                                    <a href="{{ route('guest.dokumen-kurikulum-category', compact('dokumen_kurikulum_category')) }}" class="menu__item">{{ $dokumen_kurikulum_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.dokumen-mbkm') }}" class="dropdown__label">Dokumen MBKM<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($dokumen_mbkm_categories as $dokumen_mbkm_category)
                                    <a href="{{ route('guest.dokumen-mbkm-category', compact('dokumen_mbkm_category')) }}" class="menu__item">{{ $dokumen_mbkm_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Layanan --}}
                <div class="menu__dropdown">
                    <span class="dropdown__label">Layanan<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu">
                        <a href="#" class="menu__item">Penyusunan Dokumen SPMI</a>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.pendampingan-akreditasi-nasional') }}" class="dropdown__label">Pendampingan Akreditasi Nasional<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($pendampingan_akreditasi_nasional_categories as $pendampingan_akreditasi_nasional_category)
                                    <a href="{{ route('guest.pendampingan-akreditasi-nasional-category', ['panCategory' => $pendampingan_akreditasi_nasional_category]) }}" class="menu__item">{{ $pendampingan_akreditasi_nasional_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.pendampingan-akreditasi-internasional') }}" class="dropdown__label">Pendampingan Akreditasi Internasional<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($pendampingan_akreditasi_internasional_categories as $pendampingan_akreditasi_internasional_category)
                                    <a href="{{ route('guest.pendampingan-akreditasi-internasional-category', ['paiCategory' => $pendampingan_akreditasi_internasional_category]) }}" class="menu__item">{{ $pendampingan_akreditasi_internasional_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.pendampingan-kurikulum') }}" class="dropdown__label">Pendampingan Kurikulum<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($pendampingan_kurikulum_categories as $pendampingan_kurikulum_category)
                                    <a href="{{ route('guest.pendampingan-kurikulum-category', ['pkCategory' => $pendampingan_kurikulum_category]) }}" class="menu__item">{{ $pendampingan_kurikulum_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.inovasi-pembelajaran') }}" class="dropdown__label">Inovasi Pembelajaran<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($inovasi_pembelajaran_categories as $inovasi_pembelajaran_category)
                                    <a href="{{ route('guest.inovasi-pembelajaran-category', compact('inovasi_pembelajaran_category')) }}" class="menu__item">{{ $inovasi_pembelajaran_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.layanan-bkd') }}" class="dropdown__label">Layanan BKD<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($layanan_bkd_categories as $layanan_bkd_category)
                                    <a href="{{ route('guest.layanan-bkd-category', compact('layanan_bkd_category')) }}" class="menu__item">{{ $layanan_bkd_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.pelatihan.index') }}" class="dropdown__label">Pelatihan<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($pelatihans as $pelatihan)
                                    <a href="{{ route('guest.pelatihan.show', compact('pelatihan')) }}" class="menu__item">{{ $pelatihan->title }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Akreditasi --}}
                <div class="menu__dropdown">
                    <span class="dropdown__label">Akreditasi<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu">
                        <a href="#" class="menu__item">Akreditas Institusi</a>
                        <a href="#" class="menu__item">Akreditasi Prodi Nasional</a>
                        <div class="menu__dropdown">
                            <span class="dropdown__label">Akreditas Prodi Internasional<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">ASIIN</a>
                                <a href="#" class="menu__item">ACQUIN</a>
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.instrumen-akreditasi-nasional') }}" class="dropdown__label">Instrumen Akreditasi Nasional<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($instrumen_akreditasi_nasional_categories as $instrumen_akreditasi_nasional_category)
                                    <a href="{{ route('guest.instrumen-akreditasi-nasional-category', ['ianCategory' => $instrumen_akreditasi_nasional_category]) }}" class="menu__item">{{ $instrumen_akreditasi_nasional_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <a href="{{ route('guest.instrumen-akreditasi-internasional') }}" class="dropdown__label">Instrumen Akreditasi Internasional<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></a>
                            <div class="dropdown__menu" style="left: -100%">
                                @foreach ($instrumen_akreditasi_internasional_categories as $instrumen_akreditasi_internasional_category)
                                    <a href="{{ route('guest.instrumen-akreditasi-internasional-category', ['iaiCategory' => $instrumen_akreditasi_internasional_category]) }}" class="menu__item">{{ $instrumen_akreditasi_internasional_category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </nav>
    
</section>
