<x-layout.page>
    
    {{-- Jumbotron --}}
    <section class="jumbotron">
        <div class="jumbotron__container">
            <div class="jumbotron__slide">
                <i class="fas fa-angle-left"></i>
                <div class="slide__menu">
                    <div class="slide__item">                        
                        <img src="{{ asset('img/jumbotron/pict-1.jpg') }}" alt="">
                        <div class="item__content">
                            <h2 class="item__title">Helo a</h2>
                            <p class="item__subtitle">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit temporibus voluptatem ex molestiae! Unde assumenda harum provident. Autem, dolor! Repellendus tempore cum vel illo quam magni voluptates ratione assumenda consectetur, quod asperiores exercitationem sed blanditiis suscipit ut? Cupiditate, esse ea magnam sequi quis voluptatem eius consequuntur a ducimus aliquid consequatur?</p>
                            <x-button type="link" href="#" class="item__button">Selengkapnya</x-button>
                        </div>
                    </div>
                    <div class="slide__item">                        
                        <img src="{{ asset('img/jumbotron/pict-2.jpg') }}" alt="">
                        <div class="item__content">
                            <h2 class="item__title">Helo Bideyesa</h2>
                            <p class="item__subtitle">Lsumenda harum provident. Autem, dolor! Repellendus tempore cum vel illo quam magni voluptates ratione assumenda consectetur, quod asperiores exercitationem sed blanditiis suscipit ut? Cupiditate, esse ea magnam sequi quis voluptatem eius consequuntur a ducimus aliquid consequatur?</p>
                            <x-button type="link" href="#" class="item__button">Selengkapnya</x-button>
                        </div>
                    </div>
                    <div class="slide__item">                        
                        <img src="{{ asset('img/jumbotron/pict-3.jpg') }}" alt="">
                        <div class="item__content">
                            <h2 class="item__title">Helo v</h2>
                            <p class="item__subtitle">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit temporonsequatur?</p>
                            <x-button type="link" href="#" class="item__button">Selengkapnya</x-button>
                        </div>
                    </div>
                </div>
                <i class="fas fa-angle-right"></i>
            </div>
            <script>
                $(function(){
                    let current = 0;
                    let slides = $(".slide__item");
                    let total = slides.length;

                    function goToSlide(next){
                        slides.removeClass("prev active");
                        slides.eq(current).addClass("prev");
                        slides.eq(next).addClass("active");
                        current = next;
                    }

                    function showNext(){
                        let next = (current + 1) % total;
                        goToSlide(next);
                    }

                    function showPrev(){
                        let prev = (current - 1 + total) % total;
                        goToSlide(prev);
                    }

                    $(".fa-angle-right").click(showNext);
                    $(".fa-angle-left").click(showPrev);

                    let autoSlide = setInterval(showNext, 4000);

                    $(".jumbotron__slide").hover(
                        function(){ clearInterval(autoSlide); },
                        function(){ autoSlide = setInterval(showNext, 4000); }
                    );

                    slides.eq(current).addClass("active");
                });
            </script>                
        </div>
    </section>
    
    {{-- Sipenjamu --}}
    <section class="sipenjamu">
        <div class="sipenjamu__container">
            <div class="sipenjamu__data">
                <div class="data__item">
                    <h6 class="data__title">Jumlah Program Studi</h6>
                    <span>{{ $program_studis->count() }}</span>
                </div>
                <div class="data__item">
                    <h6 class="data__title">Jumlah Terakreditasi Unggul/A</h6>
                    <span>{{ count($akreditasis[0]['program_studi']) + count($akreditasis[5]['program_studi']) }}</span>
                </div>
                <div class="data__item">
                    <h6 class="data__title">Presentase Terakreditasi Unggul/A</h6>
                    <span>{{ round(((count($akreditasis[0]['program_studi']) + count($akreditasis[5]['program_studi'])) / $program_studis->count()) * 100, 1) }}%</span>
                </div>
            </div>
            <div class="sipenjamu__header">
                <h1 class="header__title">SIPENJAMU UNPATTI</h1>
                <p class="header__subtitle">Sistem Penjaminan Mutu Universitas Pattimura</p>
            </div>
            <div class="sipenjamu__logo">
                <img src="{{ asset('img/logo-unpatti.png') }}" alt="Logo UNPATTI">
                <img src="{{ asset('img/logo-lpmpp.png') }}" alt="Logo LPMPP">
                <img src="{{ asset('img/logo-dikstis.png') }}" alt="Logo DIKSTIS">
                <img src="{{ asset('img/logo-blu.png') }}" alt="Logo BLU">
            </div>
            <x-button type="link" href="#" class="sipenjamu__button">Klik Di Sini</x-button>
        </div>
        <img src="{{ asset('img/gedung-unpatti.jpg') }}" alt="">
    </section>
    
    {{-- <section class="grafik-akreditasi">
        <div class="grafik-akreditasi__container">
            <div class="grafik-akreditasi__item">
                <h3 class="item__title">Grafik Akreditasi Program Studi</h3>
                <x-chart id="akreditasi" height="300px" type="pie" :label="$akreditasi_program_studi['labels']" :data="$akreditasi_program_studi['data']" :colors="$akreditasi_program_studi['colors']" title="Jumlah Program Studi berdasarkan Akreditasi"/>            
            </div>
        </div>
    </section> --}}
    
    {{-- Berita --}}
    <section class="berita">
        <div class="berita__container">
            <header class="berita__header">
                <h2 class="header__title">Berita Terkini</h2>
                <hr>
            </header>
            <div class="berita__post">
                <div href="{{ route('berita.show', ['beritum' => $beritas?->first()]) }}" class="post__top">
                    @if ($beritas?->first()->cover)
                        <img src="{{ asset('storage/berita/'. $beritas?->first()->cover) }}" class="post__thumbnail">
                    @else
                        <img src="{{ asset('img/default.jpg') }}" class="post__thumbnail">
                    @endif
                    <div class="item__right">
                        <h2 class="post__title">{{ Str::limit($beritas?->first()->title, 50) }}</h2>
                        <div class="item__info">
                            <small><i class="far fa-clock"></i>{{ $beritas?->first()->created_at?->format('d F Y') }}</small>
                        </div>
                        <p class="post__excerpt">{{ Str::limit($beritas?->first()->body, 220) }}</p>
                        <x-button type="link" href="{{ route('berita.show', ['beritum' => $beritas?->first()]) }}) }}" class="post__button">Baca Selengkapnya</x-button>
                    </div>
                </div>
                <div class="post__bottom">
                    @foreach ($beritas?->slice(1)->take(3) as $berita)
                        <div href="{{ route('berita.show', ['beritum' => $berita]) }}" class="post__item">
                            @if ($berita->cover)
                                <img src="{{ asset('storage/berita/'. $berita->cover) }}" class="post__thumbnail">
                            @else
                                <img src="{{ asset('img/default.jpg') }}" class="post__thumbnail">
                            @endif
                            <div class="item__bottom">
                                <h2 class="post__title">{{ Str::limit($berita->title, 50) }}</h2>
                                <div class="item__info">
                                    <small><i class="far fa-clock"></i>{{ $berita->created_at?->format('d F Y') }}</small>
                                </div>
                                <x-button type="link" href="{{ route('berita.show', ['beritum' => $berita]) }}) }}" class="post__button">Baca Selengkapnya</x-button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <x-button type="link" href="" class="berita__button">Lihat Semua Berita</x-button>
            </div>
        </div>
    </section>
    
    <div class="info">
        <div class="info__container">
            <div class="agenda">
                <div class="agenda__container">
                    <header class="agenda__header">
                        <h2 class="header__title">Agenda & Kegiatan</h2>
                        <hr>
                    </header>
                    <div class="agenda__list">
                        <a href="#" class="list__item">
                            <div class="item__time">
                                <span class="time__date">15</span>
                                <span class="time__month">Nov</span>
                            </div>
                            <h2 class="item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, accusantium?</h2>
                        </a>
                        <a href="#" class="list__item">
                            <div class="item__time">
                                <span class="time__date">15</span>
                                <span class="time__month">Nov</span>
                            </div>
                            <h2 class="item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, accusantium?</h2>
                        </a>
                        <a href="#" class="list__item">
                            <div class="item__time">
                                <span class="time__date">15</span>
                                <span class="time__month">Nov</span>
                            </div>
                            <h2 class="item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, accusantium?</h2>
                        </a>
                        <a href="#" class="list__item">
                            <div class="item__time">
                                <span class="time__date">15</span>
                                <span class="time__month">Nov</span>
                            </div>
                            <h2 class="item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, accusantium?</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pengumuman">
                <div class="pengumuman__container">
                    <header class="pengumuman__header">
                        <h2 class="header__title">Pengumuman</h2>
                        <hr>
                    </header>
                    <div class="pengumuman__list">
                        <a href="#" class="list__item">
                            <img src="{{ asset('img/default.jpg') }}" alt="">
                            <div class="item__right">
                                <small class="item__date"><i class="fas fa-clock"></i>14 Agustus 2025</small>
                                <h2 class="item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, accusantium?</h2>
                            </div>
                        </a> 
                        <a href="#" class="list__item">
                            <img src="{{ asset('img/default.jpg') }}" alt=""> 
                            <div class="item__right">
                                <small class="item__date"><i class="fas fa-clock"></i>14 Agustus 2025</small>
                                <h2 class="item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, accusantium?</h2>
                            </div>
                        </a>
                        <a href="#" class="list__item">
                            <img src="{{ asset('img/default.jpg') }}" alt="">
                            <div class="item__right">
                                <small class="item__date"><i class="fas fa-clock"></i>14 Agustus 2025</small>
                                <h2 class="item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, accusantium?</h2>
                            </div>
                        </a>
                        <a href="#" class="list__item">
                            <img src="{{ asset('img/default.jpg') }}" alt="">
                            <div class="item__right">
                                <small class="item__date"><i class="fas fa-clock"></i>14 Agustus 2025</small>
                                <h2 class="item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, accusantium?</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout.page>