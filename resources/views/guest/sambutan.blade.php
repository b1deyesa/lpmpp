<x-layout.page title="Sambutan Kepala Lembaga LPMPP" background="assets/img/default.jpg" class="sambutan">
    
    {{-- Photo --}}
    <img src="{{ asset('storage/'.($sambutan?->photo ?? '')) ?: asset('assets/img/default.jpg') }}" alt="Foto Ketua" class="sambutan__photo">    
    
    {{-- Body --}}
    <div class="sambutan__body">
        {!! $sambutan->body ?? null !!}
    </div>
        
</x-layout.page>