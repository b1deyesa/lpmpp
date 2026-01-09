<x-layout.guest class="home">
    
    {{-- Jumbotron --}}
    <section class="jumbotron">
        <img src="{{ asset('assets/img/gedung-unpatti.png') }}" alt="Gedung UNPATTI" class="jumbotron__background">
        <div class="jumbotron__container">
            <h1 class="jumbotron__title">LPMPP UNPATTI</h1>
            <h2 class="jumbotron__subtitle">Official Website</h2>
            <p class="jumbotron__description">Welcome to the website of the Institute for Quality Assurance and Learning Development (LPMPP), Pattimura University</p>
        </div>
    </section>
    
    {{-- Parameter --}}
    <section class="parameter">
        <div class="parameter__container">
            <div class="parameter__item">
                <span class="item__count">0</span>
                <h6 class="item__title">Jumlah Program Studi</h6>
            </div>
            <div class="parameter__item">
                <span class="item__count">0</span>
                <h6 class="item__title">Jumlah Terakreditasi Unggul/A
                </h6>
            </div>
            <div class="parameter__item">
                <span class="item__count">0</span>
                <h6 class="item__title">Presentase Terakreditasi Unggul/A</h6>
            </div>
        </div>
    </section>
    
    {{-- Sambutan --}}
    <section class="sambutan">
        <div class="sambutan__container">
            <div class="sambutan__left">
                <img src="{{ asset('assets/img/default.jpg') }}" alt="Foto Ketua" class="sambutan__photo">
            </div>
            <div class="sambutan__right">
                <h1 class="sambutan__title">LPMPP Universitas Pattimura</h1>
                <hr>
                {!! $sambutan->body ?? '<small class="empty">No content available</small>' !!}
                <ul class="sambutan__menu">
                   <li class="menu__item"><a href="{{ route('guest.sejarah') }}">Sejarah Singkat LPMPP<i class="fa-solid fa-circle-arrow-right"></i></a></li>
                   <li class="menu__item"><a href="{{ route('guest.visi-misi') }}">Visi dan Misi LPMPP<i class="fa-solid fa-circle-arrow-right"></i></a></li>
                   <li class="menu__item"><a href="{{ route('guest.tugas-fungsi') }}">Tugas dan Fungsi LPMPP<i class="fa-solid fa-circle-arrow-right"></i></a></li>
                </ul>
            </div>
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