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
                        <a href="#" class="menu__item">Rensra</a>
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
                        <a href="{{ route('guest.laporan') }}" class="menu__item">Laporan</a>
                        <a href="#" class="menu__item">Peraturan Perundang-undangan</a>
                        <div class="menu__dropdown">
                            <span class="dropdown__label">Peraturan Rektor<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">Peraturan Rektor Universitas</a>
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <span class="dropdown__label">Surat Keputusan<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">Penetapan Kurikulum</a>
                                <a href="#" class="menu__item">SK Panitia Kegiatan</a>
                                <a href="#" class="menu__item">SK Narasumber Kegiatan</a>
                            </div>
                        </div>
                        <a href="#" class="menu__item">Sertifikat</a>
                        <a href="#" class="menu__item">Materi Kegiatan</a>
                        <div class="menu__dropdown">
                            <span class="dropdown__label">Dokumen Kurikulum & MBKM<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">Panduan Kurikulum (Tahun)</a>
                                <a href="#" class="menu__item">Panduan MBKM</a>
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
                            <span class="dropdown__label">Pendampingan Akreditasi<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">Nasional</a>
                                <a href="#" class="menu__item">Internasional</a>
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <span class="dropdown__label">Pendampingan Kurikulum<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">Penyusunan Kurikulum</a>
                                <a href="#" class="menu__item">Asesmen Pembelajaran</a>
                                <a href="#" class="menu__item">Evaluasi Kurikulum</a>
                            </div>
                        </div>
                        <a href="#" class="menu__item">Inovasi Pembelajaran</a>
                        <div class="menu__dropdown">
                            <span class="dropdown__label">Layanan BKD<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">Asesor BKD</a>
                                <a href="#" class="menu__item">BKD Dosen</a>
                            </div>
                        </div>
                        <div class="menu__dropdown">
                            <span class="dropdown__label">Pelatihan<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">Auditor Mutu Internal</a>
                                <a href="#" class="menu__item">LMS ELPATTI</a>
                                <a href="#" class="menu__item">Pekerti</a>
                                <a href="#" class="menu__item">Applied Approach(AA)</a>
                                <a href="#" class="menu__item">Buku Ajar</a>
                                <a href="#" class="menu__item">Asesmen Pembelajaran</a>
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
                            <span class="dropdown__label">Instrumen Akrediatasi<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                            <div class="dropdown__menu" style="left: -100%">
                                <a href="#" class="menu__item">Nasional</a>
                                <a href="#" class="menu__item">Internasional</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </nav>
    
</section>
