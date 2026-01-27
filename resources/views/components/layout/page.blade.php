<x-layout.guest class="page">
    
    {{-- Header --}}
    <section class="page__title">
        <img src="{{ asset($website->page_background ? 'storage/'.$website->page_background : 'assets/img/default.jpg') }}" alt="Background LPMPP" class="title__background">
        <div class="title__container">
            <h1 class="title">{{ $title }}</h1>
        </div>
    </section>
        
    {{-- Slot --}}
    <section class="{{ $class }}">
        {!! $slot->isEmpty() ? '<small class="empty">No content available</small>' : $slot !!}
    </section>
    
</x-layout.guest>