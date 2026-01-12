<x-layout.portal class="home">
    <div class="home__container">
        
        {{-- Header --}}
        <section class="header">
            <div class="header__container">
                <img src="{{ asset('assets/img/gedung-lpmpp.png') }}" alt="Header Background" class="header__background">
                <h1 class="header__title">Portal {{ $pusat->nama_bagian }}</h1>
            </div>
        </section>
        
        {{-- Headline --}}
        @if ($posts->count() > 0)
            <section class="headline">
                <div class="headline__container">
                    <div class="headline__left">
                        <a href="#" class="headline__big">
                            <img src="{{ asset('assets/img/default.jpg') }}" alt="Cover" class="post__cover">
                            <h2 class="post__title">{{ $posts->first()?->title }}</h2>
                        </a>
                        {{-- <div class="headline__report">
                            <a href="" class="report__item">
                                <h2 class="item__title">Lorem, ipsum dolor sit amet consectet</h2>
                            </a>
                            <a href="" class="report__item">
                                <h2 class="item__title">Lorem, ipsum dolor sit amet consectet</h2>
                            </a>
                            <a href="" class="report__item">
                                <h2 class="item__title">Lorem, ipsum dolor sit amet consectet</h2>
                            </a>
                        </div> --}}
                    </div>
                    <hr class="headline__line">
                    <div class="headline__right">
                        <h3 class="right__title">Artikel Terbaru</h3>
                        <div class="headline__post">
                            @forelse ($posts->skip(1) as $post)
                                <a href="#" class="post__item">
                                    <img src="{{ asset('assets/img/default.jpg') }}" alt="Cover" class="item__cover">
                                    <div class="item__right">
                                        <h2 class="item__title">{{ $post->title }}</h2>
                                        <div class="item__bottom">
                                            @foreach ($post->categories as $category)
                                                <small class="item__category">{{ $category->title }}</small>
                                            @endforeach
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <small class="empty" style="text-align: center">No content available</small>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
        @else 
            <small class="empty" style="text-align: center">No content available</small>
        @endif
        
    </div>
</x-layout.portal>