<section class="navigation dashboard">
    <div class="navigation__container">
        
        {{-- Banner --}}
        <a href="{{ route('dashboard.home') }}" class="banner">
            <div class="banner__top">
                <img src="{{ asset('assets/img/logo-unpatti.png') }}" alt="Logo UNPATTI" class="banner__logo">
                <img src="{{ asset('assets/img/logo-lpmpp.png') }}" alt="Logo LPMPP" class="banner__logo">
            </div>
            <div class="banner__bottom">
                <h1 class="banner__title">LPMPP UNPATTI</h1>
                <h2 class="banner__subtitle">Menggerakkan Budaya Mutu Menuju WCU</h2>
            </div>
        </a>
        
        {{-- Menu --}}
        <div class="menu">
            
            {{-- Profil --}}
            @role('admin', 'superadmin')
                <div class="menu__dropdown">
                    <span class="dropdown__label">Profil<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu" style="display: none">
                        <a href="{{ route('dashboard.sambutan.index') }}" class="menu__item {{ request()->routeIs('dashboard.sambutan.*') ? 'active' : '' }}">Sambutan</a>
                        <a href="{{ route('dashboard.visi-misi.index') }}" class="menu__item {{ request()->routeIs('dashboard.visi-misi.*') ? 'active' : '' }}">Visi Misi</a>
                        <a href="{{ route('dashboard.struktur-organisasi.index') }}" class="menu__item {{ request()->routeIs('dashboard.struktur-organisasi.*') ? 'active' : '' }}">Struktur Organisasi dan Personalia</a>
                        <a href="{{ route('dashboard.tugas-fungsi.index') }}" class="menu__item {{ request()->routeIs('dashboard.tugas-fungsi.*') ? 'active' : '' }}">Tugas dan Fungsi</a>
                        <a href="{{ route('dashboard.sejarah.index') }}" class="menu__item {{ request()->routeIs('dashboard.sejarah.*') ? 'active' : '' }}">Sejarah</a>
                        <a href="{{ route('dashboard.renstra.index') }}" class="menu__item {{ request()->routeIs('dashboard.renstra.*') ? 'active' : '' }}">Renstra</a>
                        <a href="{{ route('dashboard.auditor-mutu-internal.index') }}" class="menu__item {{ request()->routeIs('dashboard.auditor-mutu-internal.*') ? 'active' : '' }}">Auditor Mutu Internal</a>
                        <a href="{{ route('dashboard.asesor-akreditasi.index') }}" class="menu__item {{ request()->routeIs('dashboard.asesor-akreditasi.*') ? 'active' : '' }}">Asesor Akreditasi</a>
                        <a href="{{ route('dashboard.pengelola.index') }}" class="menu__item {{ request()->routeIs('dashboard.pengelola.*') ? 'active' : '' }}">Pengelola</a>
                    </div>
                </div>
            @endrole
           
            {{-- Pusat-Pusat --}}
            @role('admin', 'superadmin')
                <a href="{{ route('dashboard.pusat.index') }}" class="menu__item {{ request()->routeIs('dashboard.pusat.*') ? 'active' : '' }}">Pusat</a>
            @endrole
            
            {{-- Informasi --}}
            @role('admin', 'superadmin')
                @if($pusats->count() > 0)
                    <div class="menu__dropdown">
                        <span class="dropdown__label">Informasi<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                        <div class="dropdown__menu" style="display: none">
                            @foreach ($pusats as $pusat)
                                <a href="{{ route('dashboard.pusat.portal.index', ['pusat' => $pusat]) }}" class="menu__item {{ request()->route('pusat')?->id === $pusat->id ? 'active' : '' }}">{{ $pusat->nama_bagian }}</a> 
                            @endforeach
                        </div>
                    </div>
                @endif
            @endrole
            
            {{-- Kerja Sama --}}
            @role('admin', 'superadmin')
                <div class="menu__dropdown">
                    <span class="dropdown__label">Kerja Sama<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu" style="display: none">
                        <a href="{{ route('dashboard.kerja-sama-luar-negeri.index') }}" class="menu__item {{ request()->routeIs('dashboard.kerja-sama-luar-negeri.*') ? 'active' : '' }}">Kerja Sama Luar Negeri</a>
                        <a href="{{ route('dashboard.kerja-sama-dalam-negeri.index') }}" class="menu__item {{ request()->routeIs('dashboard.kerja-sama-dalam-negeri.*') ? 'active' : '' }}">Kerja Sama Dalam Negeri</a>
                    </div>
                </div>
            @endrole

            {{-- Survey --}}
            @role('admin', 'superadmin')
                <div class="menu__dropdown">
                    <span class="dropdown__label">Survey<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu" style="display: none">
                        <a href="{{ route('dashboard.survey.index') }}" class="menu__item {{ request()->routeIs('dashboard.survey.*') ? 'active' : '' }}">Daftar Survey</a>
                        <a href="{{ route('dashboard.laporan-survey.index') }}" class="menu__item {{ request()->routeIs('dashboard.laporan-survey.*') ? 'active' : '' }}">Laporan Survey</a>
                    </div>
                </div>
            @endrole

            {{-- Download --}}
            @role('admin', 'superadmin')
                <div class="menu__dropdown">
                    <span class="dropdown__label">Download<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu" style="display: none">
                        <a href="{{ route('dashboard.laporan.index') }}" class="menu__item {{ request()->routeIs('dashboard.laporan.*') || request()->routeIs('dashboard.laporan-category.*') ? 'active' : '' }}">Laporan</a>
                        <a href="{{ route('dashboard.peraturan-perundang-undangan.index') }}" class="menu__item {{ request()->routeIs('dashboard.peraturan-perundang-undangan.*') || request()->routeIs('dashboard.peraturan-perundang-undangan-category.*') ? 'active' : '' }}">Peraturan Perundang-Undangan</a>
                        <a href="{{ route('dashboard.peraturan-rektor.index') }}" class="menu__item {{ request()->routeIs('dashboard.peraturan-rektor.*') || request()->routeIs('dashboard.peraturan-rektor-category.*') ? 'active' : '' }}">Peraturan Rektor</a>
                        <a href="{{ route('dashboard.surat-keputusan.index') }}" class="menu__item {{ request()->routeIs('dashboard.surat-keputusan.*') || request()->routeIs('dashboard.surat-keputusan-category.*') ? 'active' : '' }}">Surat Keputusan</a>
                        <a href="{{ route('dashboard.sertifikat.index') }}" class="menu__item {{ request()->routeIs('dashboard.sertifikat.*') || request()->routeIs('dashboard.sertifikat-category.*') ? 'active' : '' }}">Sertifikat</a>
                        <a href="{{ route('dashboard.materi-kegiatan.index') }}" class="menu__item {{ request()->routeIs('dashboard.materi-kegiatan.*') || request()->routeIs('dashboard.materi-kegiatan-category.*') ? 'active' : '' }}">Materi Kegiatan</a>
                        <a href="{{ route('dashboard.dokumen-kurikulum.index') }}" class="menu__item {{ request()->routeIs('dashboard.dokumen-kurikulum.*') || request()->routeIs('dashboard.dokumen-kurikulum-category.*') ? 'active' : '' }}">Dokumen Kurikulum</a>
                        <a href="{{ route('dashboard.dokumen-mbkm.index') }}" class="menu__item {{ request()->routeIs('dashboard.dokumen-mbkm.*') || request()->routeIs('dashboard.dokumen-mbkm-category.*') ? 'active' : '' }}">Dokumen MBKM</a>
                    </div>
                </div>
            @endrole

            {{-- Layanan --}}
            @role('admin', 'superadmin')
                <div class="menu__dropdown">
                    <span class="dropdown__label">Layanan<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu" style="display: none">
                        <a href="{{ route('dashboard.spmi.index') }}" class="menu__item {{ request()->routeIs('dashboard.spmi.*') ? 'active' : '' }}">Penyusunan Dokumen SPMI</a>
                        <a href="{{ route('dashboard.pendampingan-akreditasi-nasional.index') }}" class="menu__item {{ request()->routeIs('dashboard.pendampingan-akreditasi-nasional.*') ? 'active' : '' }}">Pendampingan Akreditasi Nasional</a>
                        <a href="{{ route('dashboard.pendampingan-akreditasi-internasional.index') }}" class="menu__item {{ request()->routeIs('dashboard.pendampingan-akreditasi-internasional.*') ? 'active' : '' }}">Pendampingan Akreditasi Internasional</a>
                        <a href="{{ route('dashboard.pendampingan-kurikulum.index') }}" class="menu__item {{ request()->routeIs('dashboard.pendampingan-kurikulum.*') ? 'active' : '' }}">Pendampingan Kurikulum</a>
                        <a href="{{ route('dashboard.inovasi-pembelajaran.index') }}" class="menu__item {{ request()->routeIs('dashboard.inovasi-pembelajaran.*') ? 'active' : '' }}">Inovasi Pembelajaran</a>
                        <a href="{{ route('dashboard.layanan-bkd.index') }}" class="menu__item {{ request()->routeIs('dashboard.layanan-bkd.*') ? 'active' : '' }}">Layanan BKD</a>
                        <a href="{{ route('dashboard.pelatihan.index') }}" class="menu__item {{ request()->routeIs('dashboard.pelatihan.*') ? 'active' : '' }}">Pelatihan</a>
                    </div>
                </div>
            @endrole

            {{-- Akreditasi --}}
            @role('admin', 'superadmin')
                <div class="menu__dropdown">
                    <span class="dropdown__label">Akreditasi<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu" style="display: none">
                        <a href="{{ route('dashboard.akreditasi.index') }}" class="menu__item {{ request()->routeIs('dashboard.akreditasi.*') ? 'active' : '' }}">Akreditasi</a>
                        <a href="{{ route('dashboard.akreditasi-institusi.index') }}" class="menu__item {{ request()->routeIs('dashboard.akreditasi-institusi.*') ? 'active' : '' }}">Akreditasi Institusi</a>
                        <a href="{{ route('dashboard.akreditasi-prodi-nasional.index') }}" class="menu__item {{ request()->routeIs('dashboard.akreditasi-prodi-nasional.*') ? 'active' : '' }}">Akreditasi Prodi Nasional</a>
                        <a href="{{ route('dashboard.akreditasi-prodi-internasional.index') }}" class="menu__item {{ request()->routeIs('dashboard.akreditasi-prodi-internasional.*') ? 'active' : '' }}">Akreditasi Prodi Internasional</a>
                        <a href="{{ route('dashboard.instrumen-akreditasi-nasional.index') }}" class="menu__item {{ request()->routeIs('dashboard.instrumen-akreditasi-nasional.*') || request()->routeIs('dashboard.instrumen-akreditasi-nasional-category.*') ? 'active' : '' }}">Instrumen Akreditasi Nasional</a>
                        <a href="{{ route('dashboard.instrumen-akreditasi-internasional.index') }}" class="menu__item {{ request()->routeIs('dashboard.instrumen-akreditasi-internasional.*') || request()->routeIs('dashboard.instrumen-akreditasi-internasional-category.*') ? 'active' : '' }}">Instrumen Akreditasi Internasional</a>
                    </div>
                </div>
            @endrole
            
            {{-- Setting --}}
            @role('superadmin')
                <div class="menu__dropdown">
                    <span class="dropdown__label">Setting<i class="menu__icon__dropdown fa-solid fa-angle-down"></i></span>
                    <div class="dropdown__menu" style="display: none">
                        <a href="{{ route('dashboard.role.index') }}" class="menu__item {{ request()->routeIs('dashboard.role.*') ? 'active' : '' }}">Role</a>
                        <a href="{{ route('dashboard.user.index') }}" class="menu__item {{ request()->routeIs('dashboard.user.*') ? 'active' : '' }}">User</a>
                        <a href="{{ route('dashboard.website.index') }}" class="menu__item {{ request()->routeIs('dashboard.website.*') ? 'active' : '' }}">Website</a>
                    </div>
                </div>
            @endrole
            
        </div>
        
        {{-- Logout --}}
        <div class="navigation__bottom">
            <hr class="navigation__line">
            <x-form action="{{ route('auth.logout.post') }}" method="POST" class="logout">
                <x-button type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</x-button>
            </x-form>
        </div>
        
    </div>
</section>