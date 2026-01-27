<x-layout.portal class="index">
    <div class="index__container">
        
        {{-- Header --}}
        <section class="header">
            <div class="header__container">
                <h1 class="header__title">Portal Berita {{ $pusat->nama_bagian }}</h1>
            </div>
        </section>
        
        {{-- List --}}
        <div class="list">
            @forelse ($posts as $post)
                <a href="" class="list__item">
                    <img src="{{ $post->cover ? asset('storage/'. $post->cover) : asset('assets/img/default.jpg') }}" class="item__cover">
                    <div class="item__bottom">
                        <h3 class="item__title">{{ $post->title }}</h3>
                        <small class="item__date">{{ $post->created_at->translatedFormat('d F Y') }}</small>
                        <small class="item__excerpt">{{ Str::limit(strip_tags($post->body), 100) }}</small>
                    </div>
                </a>
            @empty 
                <small class="empty">No content available</small>
            @endforelse
        </div>
        
    </div>
</x-layout.portal>