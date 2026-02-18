<x-layout.guest class="home">
    
    {{-- Jumbotron --}}
    <section class="jumbotron">
        @if ($website->jumbotron_background)
            <img src="{{ asset('storage/'. $website->jumbotron_background) }}" alt="Gedung LPMPP" class="jumbotron__background">
        @else
            <img src="{{ asset('assets/img/default.jpg') }}" alt="Gedung LPMPP" class="jumbotron__background">
        @endif
        <div class="jumbotron__container">
            <h1 class="jumbotron__title">{{ $website->jumbotron_title }}</h1>
            <h2 class="jumbotron__subtitle">{{ $website->jumbotron_subtitle }}</h2>
            <p class="jumbotron__description">{{ $website->jumbotron_description }}</p>
        </div>
    </section>
    
    {{-- Sambutan --}}
    <section class="sambutan">
        <div class="sambutan__container">
            <img src="{{ asset($sambutan?->photo ? 'storage/'.$sambutan?->photo : 'assets/img/default.jpg') }}" alt="Foto Kepala" class="sambutan__photo" data-animate data-position="bottom" data-delay="300">
            <div class="sambutan__right">
                <h1 class="sambutan__title" data-animate data-position="left" data-delay="200">Sambutan Kepala LPMPP<br>Universitas Pattimura</h1>
                <h3 class="sambutan__author" data-animate data-position="left" data-delay="300">
                    {{ $sambutan?->author ?: 'Unidentified Author' }}
                </h3>
                @if($sambutan?->body)
                    @php
                        $text  = html_entity_decode($sambutan->body);
                        $clean = trim(preg_replace('/\s+/u', ' ', strip_tags($text)));
                        $words = Str::wordCount($clean);
                    @endphp
                    <p data-animate data-position="left" data-delay="500" class="sambutan__body">
                        {{ Str::words($clean, 85) }}
                        @if($words > 85)
                            <a href="{{ route('guest.sambutan') }}" class="body__readmore">Read More</a>
                        @endif
                    </p>
                @else
                    <small class="empty" style="padding: 5em 0">No content available</small>
                @endif
                <div class="sambutan__menu">
                   <a class="menu__item" href="{{ route('guest.sejarah') }}" data-animate data-position="left" data-delay="800">Sejarah Singkat LPMPP<i class="fa-solid fa-circle-arrow-right"></i></a>
                   <a class="menu__item" href="{{ route('guest.visi-misi') }}" data-animate data-position="left" data-delay="900">Visi dan Misi LPMPP<i class="fa-solid fa-circle-arrow-right"></i></a>
                   <a class="menu__item" href="{{ route('guest.tugas-fungsi') }}" data-animate data-position="left" data-delay="1000">Tugas dan Fungsi LPMPP<i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section> 
    
    {{-- Pusat --}}
    <section class="pusat" id="pusat">
        <div class="pusat__container">
            <div class="pusat__header">
                <h2 class="header__title" data-animate data-position="left" data-delay="300">Pusat Layanan LPMPP</h2>
            </div>
            <div class="pusat__list">
                @forelse ($pusats as $pusat)
                    <span data-animate data-position="bottom" data-delay="{{ $loop->iteration * 200 + 400 }}">
                        <div class="list__item">
                            <img src="{{ asset($pusat?->photo ? 'storage/'.$pusat->photo : 'assets/img/default.jpg') }}" alt="Background" class="item__background">
                            <h6 class="item__title">{{ $pusat->nama_bagian }}</h6>
                        </div>
                    </span>
                @empty
                    <small class="empty" style="text-align: center">No content available</small>
                @endforelse
            </div>
        </div>
    </section>
    
    <section class="ivos">
        <img src="{{ asset('assets/img/ivos-lobby.jpg') }}" class="ivos__lobby">
        <img src="{{ asset('assets/img/ivos-texture.jpg') }}" class="ivos__texture">
        <div class="ivos__container">
            <img src="{{ asset('assets/img/ivos-qr.jpg') }}" alt="i-Vos QR" class="ivos__qr">
            <div class="ivos__header">
                <h2 class="header__title">I-VoS</h2>
                <h3 class="header__subtitle">Innovation for Virtual Office Services</h3>
                <small class="header__tagline">Siap Melayani dengan Profesionalisme Digital</small>
            </div>
            <div class="ivos__time">
                <p>08.00 - 16.30 WIT <span>(Senin - Kamis)</span></p>
                <p>08.00 - 17.00 WIT <span>(Jumat)</span></p>
            </div>
        </div>
    </section>
    
    {{-- Pengelola --}}
    <section class="pengelola">
        <div class="pengelola__container">
            <div class="pengelola__header">
                <h2 class="header__title" data-animate data-position="left" data-delay="300">Tenaga Pengelola<br>LPMPP</h2>
            </div>
            <div class="pengelola__list">
                @forelse ($pengelolas as $pengelola)
                    <div class="list__item">
                        <img src="{{ asset($pengelola?->photo ? 'storage/'. $pengelola->photo : 'assets/img/default.jpg') }}" alt="Photo" class="item__photo">
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
    
    {{-- Jenjang --}}
    <section class="jenjang">
        <div class="jenjang__container">
            <div class="jenjang__header">
                <h2 class="header__title" data-animate data-position="left" data-delay="300">Program Studi Aktif per Jenjang</h2>
            </div>
            <div class="jenjang__list">
                @forelse ($jenjangs as $jenjang => $total)
                    <div class="list__item" data-animate data-position="bottom" data-delay="{{ $loop->iteration * 250 }}">
                        <span class="item__count" data-animate-count="{{ $total }}">{{ $total }}</span>
                        <h6 class="item__title">{{ $jenjang }}</h6>
                    </div>
                @empty
                    <small class="empty" style="text-align: center">No content available</small>
                @endforelse
            </div>
        </div>
    </section>
    
    {{-- Akreditasi --}}
    <section class="akreditasi">
        <div class="akreditasi__container">
            @if (count($akreditasis) > 0)
                <div class="akreditasi__item">
                    <canvas id="akreditasiChart" height="200px"></canvas>
                    <script>
                        (function () {
                            const labels = @json(array_keys($akreditasis));
                            const dataValues = @json(array_values($akreditasis));

                            new Chart(document.getElementById('akreditasiChart'), {
                                type: 'bar',
                                data: {
                                    labels: labels,
                                    datasets: [{
                                        label: 'Jumlah Prodi',
                                        data: dataValues,
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: true,
                                    scales: {
                                        y: { beginAtZero: true }
                                    }
                                }
                            });
                        })();
                    </script>
                </div>
            @else
                <small class="empty" style="text-align: center; width: 100%">No content available</small>
            @endif
            @if (count($expireds) > 0)
                <div class="akreditasi__item">
                    <canvas id="expiredChart" height="200px"></canvas>
                    <script>
                        (function () {
                            const labels = @json(array_keys($expireds));
                            const dataValues = @json(array_values($expireds));
        
                            new Chart(document.getElementById('expiredChart'), {
                                type: 'bar',
                                data: {
                                    labels: labels,
                                    datasets: [{
                                        label: 'Jumlah Prodi',
                                        data: dataValues,
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: true,
                                    scales: {
                                        y: { beginAtZero: true }
                                    }
                                }
                            });
                        })();
                    </script>
                </div>
            @else
                <small class="empty" style="text-align: center; width: 100%">No content available</small>
            @endif
        </div>
    </section>
    
    {{-- Advertisement --}}
    <section class="advertisement">
        <div class="advertisement__container">
            <div class="advertisement__left">
                <h2 class="advertisement__title">Mau Akses SIMPATTI?</h2>
                <h5 class="advertisement__body">Sistem Penjaminan Mutu Universitas Pattimura adalah sistem untuk menjamin mutu penyelenggaraan pendidikan tinggi.</h5>
            </div>
            <div class="advertisement__right">
                <a href="#" class="advertisement__link">Akses Sekarang</a>
            </div>
        </div>
    </section>
    
    {{-- Berita --}}
    <section class="berita">
        <div class="berita__container">
            <div class="berita__header">
                <h2 class="header__title">Berita Terkini</h2>
                <hr class="header__line">
            </div>
            <div class="berita__list">
                @foreach ($posts as $post)
                    <a href="" class="list__item">
                        <img src="{{ $post->cover ? asset('storage/'. $post->cover) : asset('assets/img/default.jpg') }}" class="item__cover">
                        <div class="item__bottom">
                            <h3 class="item__title">{{ $post->title }}</h3>
                            <small class="item__date">{{ $post->created_at->translatedFormat('d F Y') }}</small>    
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    
    {{-- Video --}}
    <section class="video">
        <div class="video__container">
            <div class="video__slider">
                <div class="slider__nav">
                    <button class="prev"><i class="fa-solid fa-angle-left"></i></button>
                </div>
                <div class="slider__list">
                    <a href="" class="list__item">
                        <img src="{{ asset('assets/img/default.jpg') }}" alt="" class="item__thumbnail">
                        <i class="fa-solid fa-circle-play"></i>
                    </a>
                    <a href="" class="list__item">
                        <img src="{{ asset('assets/img/default.jpg') }}" alt="" class="item__thumbnail">
                        <i class="fa-solid fa-circle-play"></i>
                    </a>
                    <a href="" class="list__item">
                        <img src="{{ asset('assets/img/default.jpg') }}" alt="" class="item__thumbnail">
                        <i class="fa-solid fa-circle-play"></i>
                    </a>
                </div>
                <div class="slider__nav">
                    <button class="next"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Sosmed --}}
    <section class="sosmed">
        <div class="sosmed__container">
            <a href="" class="sosmed__item"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="" class="sosmed__item"><i class="fa-brands fa-instagram"></i></a>
            <a href="" class="sosmed__item"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="" class="sosmed__item"><i class="fa-brands fa-youtube"></i></a>
            <a href="" class="sosmed__item"><i class="fa-brands fa-tiktok"></i></a>
            <a href="" class="sosmed__item"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </section>
    
    {{-- Sponsorship --}}
    <section class="sponsorship">
        <div class="sponsorship__container">
            <img src="{{ asset('assets/img/logo-unpatti.png') }}" alt="" class="sponsorship__logo">
            <img src="{{ asset('assets/img/logo-lpmpp.png') }}" alt="" class="sponsorship__logo">
            <img src="{{ asset('assets/img/logo-dikstis.png') }}" alt="" class="sponsorship__logo">
            <img src="{{ asset('assets/img/logo-blu.png') }}" alt="" class="sponsorship__logo">
        </div>
    </section>
    
</x-layout.guest>