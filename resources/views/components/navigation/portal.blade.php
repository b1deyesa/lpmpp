<section class="navigation portal">
    
    {{-- Navigation --}}
    <nav class="navigation">
        <div class="navigation__container">
                
            {{-- Banner --}}
            <a href="{{ route('guest.home') }}" class="banner">
                <div class="banner__left">
                    <img src="{{ asset('assets/img/logo-unpatti.png') }}" alt="Logo UNPATTI" class="banner__logo">
                    <img src="{{ asset('assets/img/logo-lpmpp.png') }}" alt="Logo LPMPP" class="banner__logo">
                </div>
                <div class="banner__right">
                    <h1 class="banner__title">LPMPP UNPATTI</h1>
                    <h2 class="banner__subtitle">Menggerakkan Budaya Mutu Menuju WCU</h2>
                </div>
            </a>
            
            {{-- Search --}}
            <x-input type="search" name="search" placeholder="Search here.." class="search" />
            
        </div>
    </nav>
    
    {{-- Navigation --}}
    <nav class="navigation">
        <div class="navigation__container">
            
            {{-- Menu --}}
            <div class="menu">
                @foreach ($categories as $category)
                    <a href="" class="menu__item">{{ $category->title }}</a>
                @endforeach
            </div>
            
        </div>
    </nav>
    
</section>