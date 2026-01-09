<x-layout.page title="Visi dan Misi LPMP" background="assets/img/default.jpg" class="visi-misi">
    
    {{-- Visi --}}
    <section class="visi">
        <header>
            <i class="fa-solid fa-circle-dot"></i>
            <h2>Visi</h2>
        </header>
        {!! $visi_misi->visi ?? '<small class="empty">No content available</small>' !!}
    </section>
    
    {{-- Misi --}}
    <section class="misi">
        <header>
            <i class="fa-solid fa-circle-dot"></i>
            <h2>Misi</h2>
        </header>
        {!! $visi_misi->misi ?? '<small class="empty">No content available</small>' !!}
    </section>
    
</x-layout.page>