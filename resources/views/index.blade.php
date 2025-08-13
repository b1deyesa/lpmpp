<x-layout.page>
    
    {{-- Jumbotron --}}
    <section class="jumbotron">
        <div class="jumbotron__container">
            <div class="jumbotron__left">
                <img src="{{ asset('img/jumbotron/pict-1.jpg') }}" alt="">
                <img src="{{ asset('img/jumbotron/pict-2.jpg') }}" alt="">
                <img src="{{ asset('img/jumbotron/pict-3.jpg') }}" alt="">
                <img src="{{ asset('img/jumbotron/pict-4.jpg') }}" alt="">
                <img src="{{ asset('img/jumbotron/pict-5.jpg') }}" alt="">
            </div>
            <div class="jumbotron__right">
                <i class="fas fa-chevron-up arrow-up" style="cursor:pointer;"></i>
                <div class="news-wrapper" style="overflow: hidden; height: 250px;">
                    <ul class="post">
                        @foreach ($beritas as $berita)
                        <li>
                            <a href="{{ route('berita.show', ['beritum' => $berita]) }}" class="post__item">
                                @if ($berita->cover)
                                    <img src="{{ asset('storage/berita/'. $berita->cover) }}" class="post__thumbnail">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" class="post__thumbnail">
                                @endif
                                <div class="item__right">
                                    <h2 class="post__title">{{ $berita->title }}</h2>
                                    <div class="item__info">
                                        <small><i class="far fa-clock"></i>{{ $berita->created_at?->format('d F Y') }}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <i class="fas fa-chevron-down arrow-down" style="cursor:pointer;"></i>
            </div>
            <script>
                $(function() {
                    let $ul = $(".news-wrapper .post");
                    let itemHeight = $(".post li").outerHeight();
                
                    function scrollUp() {
                        let $first = $ul.find("li:first");
                        $ul.animate({marginTop: -itemHeight}, 500, function() {
                            $ul.append($first).css({marginTop: 0});
                        });
                    }
                
                    function scrollDown() {
                        let $last = $ul.find("li:last");
                        $ul.prepend($last).css({marginTop: -itemHeight});
                        $ul.animate({marginTop: 0}, 500);
                    }
                
                    let autoScroll = setInterval(scrollUp, 3000);
                
                    $(".arrow-up").click(function() {
                        clearInterval(autoScroll);
                        scrollUp();
                        autoScroll = setInterval(scrollUp, 3000);
                    });
                
                    $(".arrow-down").click(function() {
                        clearInterval(autoScroll);
                        scrollDown();
                        autoScroll = setInterval(scrollUp, 3000);
                    });
                });
            </script>                
        </div>
        <script>
            $(function() {
                const $images = $('.jumbotron__left img');
                let currentIndex = 0;
                const displayDuration = 3000;
                const overlapDuration = 1000;
            
                $images.eq(currentIndex).show();
            
                setTimeout(function slide() {
                    let nextIndex = (currentIndex + 1) % $images.length;
                    $images.eq(currentIndex).fadeOut(overlapDuration);
                    $images.eq(nextIndex).fadeIn(overlapDuration);
                    currentIndex = nextIndex;
                    setTimeout(slide, displayDuration - overlapDuration);
                }, displayDuration - overlapDuration);
            });
        </script>
    </section>
    
    <section class="about">
        <div class="about__container">
            
            {{-- Info --}}
            <section class="info">
                <div class="info__container">
                    <header class="info__title">
                        <h2>Info</h2>
                        <hr>
                    </header>
                    <div class="info__post">
                        <div class="info__top">
                            <a href="{{ route('berita.show', ['beritum' => $berita]) }}" class="post__new">
                                @if ($berita->cover)
                                    <img src="{{ asset('storage/berita/'. $berita->cover) }}" class="post__thumbnail">
                                @else
                                    <img src="{{ asset('img/default.jpg') }}" class="post__thumbnail">
                                @endif
                                <div class="item__right">
                                    <h2 class="post__title">{{ Str::limit($berita->title, 50) }}</h2>
                                    <div class="item__info">
                                        <small><i class="far fa-clock"></i>{{ $berita->created_at?->format('d F Y') }}</small>
                                    </div>
                                    <small>{{ Str::limit($berita->body, 100) }}</small>
                                </div>
                            </a>
                            <ul class="post">
                                @foreach ($beritas->take(3) as $berita)
                                <li>
                                    <a href="{{ route('berita.show', ['beritum' => $berita]) }}" class="post__item">
                                        @if ($berita->cover)
                                            <img src="{{ asset('storage/berita/'. $berita->cover) }}" class="post__thumbnail">
                                        @else
                                            <img src="{{ asset('img/default.jpg') }}" class="post__thumbnail">
                                        @endif
                                        <div class="item__right">
                                            <h2 class="post__title">{{ Str::limit($berita->title, 50) }}</h2>
                                            <div class="item__info">
                                                <small><i class="far fa-clock"></i>{{ $berita->created_at?->format('d F Y') }}</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <ul class="post">
                            @foreach ($beritas->slice(3) as $berita)
                            <li>
                                <a href="{{ route('berita.show', ['beritum' => $berita]) }}" class="post__item">
                                    @if ($berita->cover)
                                        <img src="{{ asset('storage/berita/'. $berita->cover) }}" class="post__thumbnail">
                                    @else
                                        <img src="{{ asset('img/default.jpg') }}" class="post__thumbnail">
                                    @endif
                                    <div class="item__right">
                                        <h2 class="post__title">{{ Str::limit($berita->title, 50) }}</h2>
                                        <div class="item__info">
                                            <small><i class="far fa-clock"></i>{{ $berita->created_at?->format('d F Y') }}</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>
            
            {{-- Logo --}}
            <section class="logo">
                <img src="{{ asset('img/logo-blu.png') }}">
                <img src="{{ asset('img/logo-dikstis.png') }}">
                <img src="{{ asset('img/logo-lpmpp.png') }}">
                <img src="{{ asset('img/logo-unpatti.png') }}">
            </section>
            
        </div>
    </section>
    
    
</x-layout.page>