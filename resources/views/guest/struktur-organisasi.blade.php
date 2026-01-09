<x-layout.page title="Struktur Organisasi dan Personalia" background="assets/img/default.jpg" class="struktur-organisasi">
    
    {{-- Struktur Organisasi --}}
    {!! $struktur_organisasi->body ?? '<small class="empty">No content available</small>' !!}
    
    {{-- Tenaga Pengelola --}}
    <section class="tenaga-pengelola">
        <div class="tenaga-pengelola__container">
            <div class="tenaga-pengelola__header">
                <h2 class="header__title">Tenaga Pengelola</h2>
                <hr class="header__line">
            </div>
            <div class="tenaga-pengelola__list">
                @forelse ($tenaga_pengelolas as $tenaga_pengelola)
                    <div class="list__item">
                        <img src="{{ asset('assets/img/default.jpg') }}" alt="Photo" class="item__photo">
                        <div class="item__bottom">
                            <h5 class="item__subtitle">{{ $tenaga_pengelola->jabatan }}</h5>
                            <h4 class="item__title">{{ $tenaga_pengelola->nama }}</h4>
                        </div>
                    </div>
                @empty
                    <small class="empty">No content available</small> 
                @endforelse
            </div>
        </div>
    </section>
    
</x-layout.page>