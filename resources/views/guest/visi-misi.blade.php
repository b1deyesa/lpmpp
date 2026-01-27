<x-layout.page title="Visi dan Misi LPMP" background="assets/img/default.jpg" class="visi-misi">
    <div class="page__row">
        
        {{-- Visi --}}
        <div class="page__col">
            <div class="page__header">
                <i class="header__icon fa-solid fa-circle-dot"></i>
                <h2 class="header__title">Visi</h2>
            </div class="page__header">
            {!! $visi_misi->visi ?? '<small class="empty">No content available</small>' !!}
        </div>
        
        {{-- Misi --}}
        <div class="page__col">
            <div class="page__header">
                <i class="header__icon fa-solid fa-circle-dot"></i>
                <h2 class="header__title">Misi</h2>
            </div class="page__header">
            {!! $visi_misi->misi ?? '<small class="empty">No content available</small>' !!}
        </div>
        
    </div>
</x-layout.page>