<x-layout.guest class="page">
    
    {{-- Header --}}
    <section class="page__header">
        @if ($website->page_background)
            <img src="{{ asset('storage/'. $website->page_background) }}" alt="Background LPMPP" class="header__background">
        @else
            <img src="{{ asset('assets/img/default.jpg') }}" alt="Background LPMPP" class="header__background">
        @endif
        <div class="header__container">
            <h1 class="header__title">{{ $title }}</h1>
        </div>
    </section>
        
    {{-- Content --}}
    <section class="page__content">
        <div class="content__container {{ $class }}">
            {!! $slot->isEmpty() ? '<small class="empty">No content available</small>' : $slot !!}
        </div>
    </section>
    
</x-layout.guest>