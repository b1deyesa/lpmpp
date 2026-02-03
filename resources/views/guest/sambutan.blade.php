<x-layout.page title="Sambutan Kepala Lembaga LPMPP" background="assets/img/default.jpg" class="sambutan">
    
    {{-- Photo --}}
    <img src="{{ image($sambutan?->photo) }}" alt="Sambutan Photo" class="sambutan__photo">
    
    {{-- Content --}}
    <div class="sambutan__content">{!! content($sambutan?->body) !!}</div>
        
</x-layout.page>