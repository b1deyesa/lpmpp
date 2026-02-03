<x-layout.page title="Struktur Organisasi dan Personalia" background="assets/img/default.jpg" class="struktur-organisasi">
    
    {{-- Struktur Organisasi --}}
    <div class="struktur-organisasi__content">{!! content($struktur_organisasi?->body) !!}</div>
    
    {{-- Pengelola --}}
    <div class="pengelola">
        <h2 class="pengelola__title">Pengelola</h2>
        <div class="pengelola__list">
            @forelse ($pengelolas as $pengelola)
                <div class="list__item">
                    <img src="{{ image($pengelola?->photo) }}" alt="Pengelola Photo" class="item__photo">    
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
    
</x-layout.page>