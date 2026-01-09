<x-layout.app class="dashboard">
    
    {{-- Sidebar --}}
    <section class="dashboard__sidebar">
        <div class="sidebar__container">
            <div class="sidebar__menu">
                <a href="{{ route('dashboard.sambutan.index') }}" class="menu__item">Sambutan</a>
                <a href="{{ route('dashboard.visi-misi.index') }}" class="menu__item">Visi Misi</a>
                <a href="{{ route('dashboard.sejarah.index') }}" class="menu__item">Sejarah Singkat</a>
                <a href="{{ route('dashboard.struktur-organisasi.index') }}" class="menu__item">Struktur Organisasi dan Personalia</a>
                <a href="{{ route('dashboard.tenaga-pengelola.index') }}" class="menu__item">Tenaga Pengelola</a>
                <a href="{{ route('dashboard.tugas-fungsi.index') }}" class="menu__item">Tugas dan Fungsi</a>
                <a href="{{ route('dashboard.pusat.index') }}" class="menu__item">Pusat</a>
            </div>
        </div>
    </section>
    
    {{-- Content --}}
    <section class="dashboard__content">
        <div class="content__container {{ $class }}">
            {{ $slot }}
        </div>
    </section>
    
</x-layout.app>