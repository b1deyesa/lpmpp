<x-layout.guest class="home">
    
    {{-- Jumbotron --}}
    <section class="jumbotron">
        <img src="{{ asset('assets/img/gedung-lpmpp.png') }}" alt="Gedung LPMPP" class="jumbotron__background">
        <div class="jumbotron__container">
            <h1 class="jumbotron__title">Lembaga Penjaminan Mutu dan Pengembangan Pembelajaran (LPMPP)</h1>
            <h2 class="jumbotron__subtitle">Universitas Pattimura</h2>
            <p class="jumbotron__description">Welcome to the website of the Institute for Quality Assurance and Learning Development (LPMPP), Pattimura University</p>
        </div>
    </section>
    
    {{-- Sambutan --}}
    <section class="sambutan">
        <div class="sambutan__container">
            <div class="sambutan__left">
                <img src="{{ asset('assets/img/default.jpg') }}" alt="Foto Ketua" class="sambutan__photo" data-animate data-position="bottom" data-delay="300">
            </div>
            <div class="sambutan__right">
                <h1 class="sambutan__title" data-animate data-position="left" data-delay="200">LPMPP Universitas Pattimura</h1>
                <hr data-animate data-position="left" data-delay="300">
                <span data-animate data-position="left" data-delay="500">
                    {!! $sambutan->body ?? '<small class="empty">No content available</small>' !!}
                </span>
                <ul class="sambutan__menu">
                   <li class="menu__item" data-animate data-position="left" data-delay="800"><a href="{{ route('guest.sejarah') }}">Sejarah Singkat LPMPP<i class="fa-solid fa-circle-arrow-right"></i></a></li>
                   <li class="menu__item" data-animate data-position="left" data-delay="900"><a href="{{ route('guest.visi-misi') }}">Visi dan Misi LPMPP<i class="fa-solid fa-circle-arrow-right"></i></a></li>
                   <li class="menu__item" data-animate data-position="left" data-delay="1000"><a href="{{ route('guest.tugas-fungsi') }}">Tugas dan Fungsi LPMPP<i class="fa-solid fa-circle-arrow-right"></i></a></li>
                </ul>
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
    
    {{-- Parameter --}}
    {{-- <section class="parameter">
        <div class="parameter__container">
            <div class="parameter__item" data-animate data-position="bottom" data-delay="0">
                <span class="item__count">0</span>
                <h6 class="item__title">Jumlah Program Studi</h6>
            </div>
    
            <div class="parameter__item" data-animate data-position="bottom" data-delay="200">
                <span class="item__count">0</span>
                <h6 class="item__title">Jumlah Terakreditasi Unggul/A</h6>
            </div>
    
            <div class="parameter__item" data-animate data-position="bottom" data-delay="400">
                <span class="item__count">0</span>
                <h6 class="item__title">Presentase Terakreditasi Unggul/A</h6>
            </div>
        </div>
    </section> --}}
    
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