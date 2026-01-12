<section class="portal-navbar">
    
    {{-- Top --}}
    <nav class="top">
        <div class="top__container">
            <div class="top__left">
                <a href="{{ route('guest.home') }}" class="top__banner">
                    <div class="banner__left">
                        <img src="{{ asset('assets/img/logo-unpatti.png') }}" alt="Logo UNPATTI" class="banner__logo">
                        <img src="{{ asset('assets/img/logo-lpmpp.png') }}" alt="Logo LPMPP" class="banner__logo">
                    </div>
                    <div class="banner__right">
                        <h1 class="banner__title">LPMPP UNPATTI</h1>
                        <h2 class="banner__subtitle">Meningkatkan Citra Institusi Menuju WCU</h2>
                    </div>
                </a>
            </div>
            <div class="top__right">
                <x-input type="search" name="search" placeholder="Search here.." />
            </div>
        </div>
    </nav>
    
    {{-- Bottom --}}
    <nav class="bottom">
        <div class="bottom__container">
            <div class="bottom__menu">
                @foreach ($categories as $category)
                    <a href="" class="menu__item">{{ $category->title }}</a>
                @endforeach
            </div>
        </div>
    </nav>
    
</section>