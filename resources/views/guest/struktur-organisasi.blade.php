<x-layout.page title="Struktur Organisasi dan Personalia" background="assets/img/default.jpg" class="struktur-organisasi">
    
    {{-- Struktur Organisasi --}}
    {!! $struktur_organisasi->body ?? '<small class="empty">No content available</small>' !!}
    
    {{-- Pengelola --}}
    <section class="pengelola">
        <div class="pengelola__container">
            <div class="pengelola__header">
                <h2 class="header__title">Pengelola</h2>
                <hr class="header__line">
            </div>
            <div class="pengelola__list">
                @forelse ($pengelolas as $pengelola)
                    <div class="list__item">
                        <img src="{{ asset('assets/img/default.jpg') }}" alt="Photo" class="item__photo">
                        <div class="item__bottom">
                            <h5 class="item__subtitle">{{ $pengelola->jabatan }}</h5>
                            <h4 class="item__title">{{ $pengelola->nama }}</h4>
                        </div>
                    </div>
                @empty
                    <small class="empty">No content available</small> 
                @endforelse
            </div>
        </div>
    </section>
    
</x-layout.page>