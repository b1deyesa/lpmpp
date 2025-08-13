<x-layout.app class="dashboard">
    
    {{-- Sidebar --}}
    <section class="sidebar">
        <div class="sidebar__container">
            <ul class="sidebar__menu">
                <li class="menu__item"><a href="{{ route('dashboard.berita.index') }}">Berita</a></li>
            </ul>
        </div>
    </section>
    
    {{-- Content --}}
    <section class="{{ $class }}">
        @if ($title)
            <header>{{ $title }}</header>
        @endif
        {{ $slot }}
    </section>
    
</x-layout.app>