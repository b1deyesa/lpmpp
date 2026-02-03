<x-layout.page title="{{ $pelatihan->title }}" background="assets/img/default.jpg" class="pelatihan-show">
    
    {{-- Content --}}
    <div class="pelatihan__content">{!! content($pelatihan?->body) !!}</div>
    
</x-layout.page>