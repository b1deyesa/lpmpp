<x-layout.guest class="page">
    
    {{-- Header --}}
    <section class="page__header">
        <img src="{{ asset($background) }}" class="header__background">
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