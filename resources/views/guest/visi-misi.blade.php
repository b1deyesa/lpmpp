<x-layout.page title="Visi dan Misi LPMP" background="assets/img/default.jpg" class="visi-misi">
        
    {{-- Visi --}}
    <div class="visi">
        <h2 class="visi__title">Visi</h2>
        <div class="visi__content">{!! content($visi_misi?->visi) !!}</div>
    </div>
    
    {{-- Misi --}}
    <div class="misi">
        <h2 class="misi__title">Misi</h2>
        <div class="misi__content">{!! content($visi_misi?->misi) !!}</div>
    </div>
        
</x-layout.page>