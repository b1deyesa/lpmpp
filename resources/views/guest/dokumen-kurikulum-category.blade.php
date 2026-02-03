<x-layout.page title="Dokumen Kurikulum ({{ $dokumen_kurikulum_category->title }})" background="assets/img/default.jpg" class="dokumen-kurikulum-category">
    
    {{-- List --}}
    <div class="dokumen-kurikulum-category__list">
        @foreach ($dokumen_kurikulum_category->dokumenKurikulums as $dokumen_kurikulum)
            <div class="list__item">
                <h3 class="item__title">{{ $dokumen_kurikulum->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.dokumen-kurikulum.download', ['dokumenKurikulum' => $dokumen_kurikulum]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>