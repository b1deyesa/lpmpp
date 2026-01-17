<section class="navigation dashboard">
    <div class="navigation__container">
        
        {{-- Menu --}}
        <div class="menu">
            
            {{-- Profil --}}
            <a href="{{ route('dashboard.sambutan.index') }}" class="menu__item">Sambutan</a>
            <a href="{{ route('dashboard.visi-misi.index') }}" class="menu__item">Visi Misi</a>
            <a href="{{ route('dashboard.struktur-organisasi.index') }}" class="menu__item">Struktur Organisasi dan Personalia</a>
            <a href="{{ route('dashboard.tugas-fungsi.index') }}" class="menu__item">Tugas dan Fungsi</a>
            <a href="{{ route('dashboard.sejarah.index') }}" class="menu__item">Sejarah</a>
            <a href="{{ route('dashboard.pengelola.index') }}" class="menu__item">Pengelola</a>
            
            <hr class="menu__line">
            
            {{-- Pusat-Pusat --}}
            <a href="{{ route('dashboard.pusat.index') }}" class="menu__item">Pusat</a>
            @if($pusats->count() > 0)
                <hr class="menu__line">
                <a href="{{ route('dashboard.pusat.portal.index', ['pusat' => $pusats->first()]) }}" class="menu__item">Portal</a> 
            @endif
            
            <hr class="menu__line">

            {{-- Kerja Sama --}}
            <a href="{{ route('dashboard.kerja-sama-luar-negeri.index') }}" class="menu__item">Kerja Sama Luar Negeri</a>
            <a href="{{ route('dashboard.kerja-sama-dalam-negeri.index') }}" class="menu__item">Kerja Sama Dalam Negeri</a>

            <hr class="menu__line">

            {{-- Informasi --}}
            <a href="{{ route('dashboard.portal-informasi.index') }}" class="menu__item">Portal Informasi Pusat</a>

            <hr class="menu__line">

            {{-- Survey --}}
            <a href="{{ route('dashboard.survey-kepuasan-fakultas.index') }}" class="menu__item">Survey Kepuasan Fakultas / Pascasarjana</a>
            <a href="{{ route('dashboard.survey-kepuasan-unit-kerja.index') }}" class="menu__item">Survey Kepuasan Unit Kerja Lainnya</a>
            <a href="{{ route('dashboard.survey-pemahaman-visi-misi.index') }}" class="menu__item">Survey Pemahaman Visi Misi</a>
            <a href="{{ route('dashboard.laporan-survey.index') }}" class="menu__item">Laporan Survey</a>

            <hr class="menu__line">

            {{-- Download --}}
            <a href="{{ route('dashboard.laporan.index') }}" class="menu__item">Laporan</a>
            <a href="{{ route('dashboard.peraturan-perundang-undangan.index') }}" class="menu__item">Peraturan Perundang-undangan</a>
            <a href="{{ route('dashboard.peraturan-rektor.index') }}" class="menu__item">Peraturan Rektor</a>
            <a href="{{ route('dashboard.surat-keputusan.index') }}" class="menu__item">Surat Keputusan</a>
            <a href="{{ route('dashboard.sertifikat.index') }}" class="menu__item">Sertifikat</a>
            <a href="{{ route('dashboard.materi-kegiatan.index') }}" class="menu__item">Materi Kegiatan</a>
            <a href="{{ route('dashboard.dokumen-kurikulum.index') }}" class="menu__item">Dokumen Kurikulum</a>
            <a href="{{ route('dashboard.dokumen-mbkm.index') }}" class="menu__item">Dokumen MBKM</a>

            <hr class="menu__line">

            {{-- Layanan --}}
            <a href="{{ route('dashboard.spmi.index') }}" class="menu__item">Penyusunan Dokumen SPMI</a>
            <a href="{{ route('dashboard.pendampingan-akreditasi-nasional.index') }}" class="menu__item">Pendampingan Akreditasi Nasional</a>
            <a href="{{ route('dashboard.pendampingan-akreditasi-internasional.index') }}" class="menu__item">Pendampingan Akreditasi Internasional</a>
            <a href="{{ route('dashboard.pendampingan-kurikulum.index') }}" class="menu__item">Pendampingan Kurikulum</a>
            <a href="{{ route('dashboard.inovasi-pembelajaran.index') }}" class="menu__item">Inovasi Pembelajaran</a>
            <a href="{{ route('dashboard.layanan-bkd.index') }}" class="menu__item">Layanan BKD</a>
            <a href="{{ route('dashboard.pelatihan.index') }}" class="menu__item">Pelatihan</a>

            <hr class="menu__line">

            {{-- Akreditasi --}}
            <a href="{{ route('dashboard.akreditasi.index') }}" class="menu__item">Akreditasi</a>
            <a href="{{ route('dashboard.akreditasi-institusi.index') }}" class="menu__item">Akreditasi Institusi</a>
            <a href="{{ route('dashboard.akreditasi-prodi-nasional.index') }}" class="menu__item">Akreditasi Prodi Nasional</a>
            <a href="{{ route('dashboard.akreditasi-prodi-internasional.index') }}" class="menu__item">Akreditasi Prodi Internasional</a>
            <a href="{{ route('dashboard.instrumen-akreditasi-nasional.index') }}" class="menu__item">Instrumen Akreditasi Nasional</a>
            <a href="{{ route('dashboard.instrumen-akreditasi-internasional.index') }}" class="menu__item">Instrumen Akreditasi Internasional</a>
        </div>
        
    </div>
</section>