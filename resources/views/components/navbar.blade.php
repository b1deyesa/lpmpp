<section class="navbar">
    
    {{-- Navbar Top --}}
    <nav class="top">
        <div class="top__container">
            <div class="top__left">
                <div class="top__menu">
                    <a href="" class="menu__item">SIMPATTI</a>
                    <a href="" class="menu__item">SIMPEL</a>
                    <a href="" class="menu__item">ELPATTI</a>
                </div>
            </div>
            <div class="top__right">
                <div class="top__menu">
                    <a href="" class="menu__item"><i class="fa-solid fa-earth-europe"></i>Explore</a>
                    <a href="{{ route('auth.login') }}" target="_blank" class="menu__item"><i class="fa-solid fa-lock"></i>Administrator</a>
                </div>
            </div>
        </div>
    </nav>
    
    {{-- Navbar Bottom --}}
    <nav class="bottom">
        <div class="bottom__container">
            <div class="bottom__left">
                <a href="{{ route('guest.home') }}" class="bottom__banner">
                    <div class="banner__left">
                        <img src="{{ asset('assets/img/logo-unpatti.png') }}" alt="Logo UNPATTI" class="banner__logo">
                        <img src="{{ asset('assets/img/logo-lpmpp.png') }}" alt="Logo LPMPP" class="banner__logo">
                    </div>
                    <div class="banner__right">
                        <h1 class="banner__title">LPMPP UNPATTI</h1>
                        <h2 class="banner__subtitle">Meningkatkan Citra Institusi Menuju WCU</h2>
                    </div>
                </a>
            </div>
            <div class="bottom__right">
                <div class="bottom__menu">
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Profil</span>
                        <div class="dropdown__menu">
                            <a href="{{ route('guest.sejarah') }}" class="menu__item">Sejarah Singkat</a>
                            <a href="{{ route('guest.visi-misi') }}" class="menu__item">Visi & Misi LPMPP</a>
                            <a href="{{ route('guest.struktur-organisasi') }}" class="menu__item">Struktur Organisasi dan Personalia</a>
                            <a href="{{ route('guest.tugas-fungsi') }}" class="menu__item">Tugas dan Fungsi</a>
                        </div>
                    </div>
                    <a href="#pusat" class="menu__item highlight">Pusat LPMPP</a>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Informasi</span>
                        <div class="dropdown__menu">
                            @foreach ($pusats as $pusat)
                                <a href="{{ route('guest.portal.home', compact('pusat')) }}" class="menu__item">Portal {{ $pusat->nama_bagian }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">PPEPP</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item">Penetapan</a>
                            <a href="#" class="menu__item">Pelaksanaan</a>
                            <a href="#" class="menu__item">Evaluasi</a>
                            <a href="#" class="menu__item">Pengendalian</a>
                            <a href="#" class="menu__item">Peningkatan</a>
                        </div>
                    </div>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Kerja Sama</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item">Program Asuh PTS</a>
                            <a href="#" class="menu__item">FPM BKS PTN Barat</a>
                        </div>
                    </div>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Survey</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item">Survey Kepuasan Pelanggan (SKP)</a>
                            <a href="#" class="menu__item">Survey Pemahaman Visi Misi</a>
                            <a href="#" class="menu__item">SKP (Tahun)</a>
                        </div>
                    </div>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Download</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item">Laporan</a>
                            <a href="#" class="menu__item">Peraturan Perundang-undangan</a>
                            <a href="#" class="menu__item">Peraturan Rektor</a>
                            <a href="#" class="menu__item">Surat Keputusan</a>
                            <a href="#" class="menu__item">Panduan Buku Ajar & RPS</a>
                            <a href="#" class="menu__item">Sertifikat</a>
                            <a href="#" class="menu__item">Inventarisasi CP</a>
                            <a href="#" class="menu__item">Materi Kegiatan</a>
                            <a href="#" class="menu__item">Gallery Kegiatan LPMPP</a>
                            <a href="#" class="menu__item">Dokumen Kurikulum & MBKM</a>
                            <a href="#" class="menu__item">Others</a>
                        </div>
                    </div>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Layanan</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item">PPID</a>
                            <a href="#" class="menu__item">BKD</a>
                            <a href="#" class="menu__item">Pelatihan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
</section>
