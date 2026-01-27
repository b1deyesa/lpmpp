<x-layout.page title="Laporan" background="assets/img/default.jpg" class="laporan">
    
    {{-- Photo --}}
    <img src="{{ asset('storage/'.($sambutan?->photo ?? '')) ?: asset('assets/img/default.jpg') }}" alt="Foto Ketua" class="sambutan__photo">    
    
    {{-- Body --}}
    <div class="sambutan__body">
        {!! $sambutan->body ?? null !!}
    </div>
        
</x-layout.page>