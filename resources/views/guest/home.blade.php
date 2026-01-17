<x-layout.guest class="home">
    
    {{-- Jumbotron --}}
    <section class="jumbotron">
        <img src="{{ asset('assets/img/gedung-lpmpp.jpg') }}" alt="Gedung LPMPP" class="jumbotron__background">
        <div class="jumbotron__container">
            <h1 class="jumbotron__title">Lembaga Penjaminan Mutu dan Pengembangan Pembelajaran (LPMPP)</h1>
            <h2 class="jumbotron__subtitle">Universitas Pattimura</h2>
            <p class="jumbotron__description">Meningkatkan Mutu Universitas Pattimura Menuju <i>World Class University</i></p>
        </div>
    </section>
    
    {{-- Sambutan --}}
    <section class="sambutan">
        <div class="sambutan__container">
            @if ($sambutan?->photo)
                <img src="{{ asset('storage/'. $sambutan->photo) }}" alt="Foto Ketua" class="sambutan__photo" data-animate data-position="bottom" data-delay="300">
            @else
                <img src="{{ asset('assets/img/default.jpg') }}" alt="Default Image" class="sambutan__photo" data-animate data-position="bottom" data-delay="300">
            @endif
            <div class="sambutan__right">
                <h1 class="sambutan__title" data-animate data-position="left" data-delay="200">LPMPP Universitas Pattimura</h1>
                <hr class="sambutan__line" data-animate data-position="left" data-delay="300">
                @if($sambutan?->body)
                    <p data-animate data-position="left" data-delay="500">{{ $sambutan->body }}</p> 
                @else
                    <small class="empty">No content available</small>
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
                <h2 class="header__title" data-animate data-position="left" data-delay="300">Pusat Layanan<br>LPMPP</h2>
            </div>
            <div class="pusat__list">
                @forelse ($pusats as $pusat)
                    <span data-animate data-position="bottom" data-delay="{{ $loop->iteration * 200 + 400 }}">
                        <div class="list__item">
                            <img src="{{ asset('assets/img/gedung-lpmpp.png') }}" alt="Background" class="item__background">
                            <h6 class="item__title">{{ $pusat->nama_bagian }}</h6>
                        </div>
                    </span>
                @empty
                    <small class="empty" style="text-align: center">No content available</small>
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
                <a href="" class="list__item">
                    <img src="{{ asset('assets/img/default.jpg') }}" alt="" class="item__cover">
                    <div class="item__text">
                        <h4 class="text__title">Lorem ipsum dolor sit amet</h4>
                        <small class="text__date"><i class="fa-regular fa-clock"></i>24 November 2026</small>
                    </div>
                </a>
                <a href="" class="list__item">
                    <img src="{{ asset('assets/img/default.jpg') }}" alt="" class="item__cover">
                    <div class="item__text">
                        <h4 class="text__title">Lorem ipsum dolor sit amet</h4>
                        <small class="text__date"><i class="fa-regular fa-clock"></i>24 November 2026</small>
                    </div>
                </a>
                <a href="" class="list__item">
                    <img src="{{ asset('assets/img/default.jpg') }}" alt="" class="item__cover">
                    <div class="item__text">
                        <h4 class="text__title">Lorem ipsum dolor sit amet</h4>
                        <small class="text__date"><i class="fa-regular fa-clock"></i>24 November 2026</small>
                    </div>
                </a>
                <a href="" class="list__item">
                    <img src="{{ asset('assets/img/default.jpg') }}" alt="" class="item__cover">
                    <div class="item__text">
                        <h4 class="text__title">Lorem ipsum dolor sit amet</h4>
                        <small class="text__date"><i class="fa-regular fa-clock"></i>24 November 2026</small>
                    </div>
                </a>
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