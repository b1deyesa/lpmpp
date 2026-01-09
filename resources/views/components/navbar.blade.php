<section class="navbar">
    
    {{-- Navbar Top --}}
    <nav class="top">
        <div class="top__container">
            <div class="top__left">
                <div class="top__menu">
                    <a href="" class="menu__item lock">SIMPATTI</a>
                    <a href="" class="menu__item lock">SIMPEL</a>
                    <a href="" class="menu__item lock">ELPATTI</a>
                </div>
            </div>
            <div class="top__right">
                <div class="top__menu">
                    <a href="" class="menu__item lock"><i class="fa-solid fa-earth-europe"></i>Explore</a>
                    {{-- <a href="{{ route('auth.login') }}" target="_blank" class="menu__item"><i class="fa-solid fa-lock"></i>Administrator</a> --}}
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
                        <h1 class="banner__title">Lembaga Penjaminan Mutu</h1>
                        <h2 class="banner__subtitle">Universitas Pattimura</h2>
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
                    <a href="{{ route('guest.pusat') }}" class="menu__item">Pusat LPMPP</a>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Informasi</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item lock">Peraturan Akademik</a>
                            <a href="#" class="menu__item lock">TV Pendidikan</a>
                            <a href="#" class="menu__item lock">Pembelajaran</a>
                            <a href="#" class="menu__item lock">Penjaminan Mutu</a>
                            <a href="#" class="menu__item lock">Kurikulum</a>
                            <a href="#" class="menu__item lock">Daring & PJJ</a>
                            <a href="#" class="menu__item lock">Kampus Berdampak & KTW</a>
                        </div>
                    </div>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">PPEPP</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item lock">Penetapan</a>
                            <a href="#" class="menu__item lock">Pelaksanaan</a>
                            <a href="#" class="menu__item lock">Evaluasi</a>
                            <a href="#" class="menu__item lock">Pengendalian</a>
                            <a href="#" class="menu__item lock">Peningkatan</a>
                        </div>
                    </div>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Kerja Sama</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item lock">Program Asuh PTS</a>
                            <a href="#" class="menu__item lock">FPM BKS PTN Barat</a>
                        </div>
                    </div>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Survey</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item lock">Survey Kepuasan Pelanggan (SKP)</a>
                            <a href="#" class="menu__item lock">Survey Pemahaman Visi Misi</a>
                            <a href="#" class="menu__item lock">SKP (Tahun)</a>
                        </div>
                    </div>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Download</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item lock">Laporan</a>
                            <a href="#" class="menu__item lock">Peraturan Perundang-undangan</a>
                            <a href="#" class="menu__item lock">Peraturan Rektor</a>
                            <a href="#" class="menu__item lock">Surat Keputusan</a>
                            <a href="#" class="menu__item lock">Panduan Buku Ajar & RPS</a>
                            <a href="#" class="menu__item lock">Sertifikat</a>
                            <a href="#" class="menu__item lock">Inventarisasi CP</a>
                            <a href="#" class="menu__item lock">Materi Kegiatan</a>
                            <a href="#" class="menu__item lock">Gallery Kegiatan LPMPP</a>
                            <a href="#" class="menu__item lock">Dokumen Kurikulum & MBKM</a>
                            <a href="#" class="menu__item lock">Others</a>
                        </div>
                    </div>
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Layanan</span>
                        <div class="dropdown__menu">
                            <a href="#" class="menu__item lock">PPID</a>
                            <a href="#" class="menu__item lock">BKD</a>
                            <a href="#" class="menu__item lock">Pelatihan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
</section>
