<x-layout.page title="Dokumen Kurikulum" background="assets/img/default.jpg" class="dokumen-kurikulum">
    
    {{-- List --}}
    <div class="dokumen-kurikulum__list">
        @foreach ($dokumen_kurikulums as $dokumen_kurikulum)
            <div class="list__item">
                <h3 class="item__title">{{ $dokumen_kurikulum->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.dokumen-kurikulum.download', ['dokumenKurikulum' => $dokumen_kurikulum]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $dokumen_kurikulum->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>