<x-layout.page title="Dokumen MKBKM" background="assets/img/default.jpg" class="dokumen-mbkm">
    
    {{-- List --}}
    <div class="dokumen-mbkm__list">
        @foreach ($dokumen_mbkms as $dokumen_mbkm)
            <div class="list__item">
                <h3 class="item__title">{{ $dokumen_mbkm->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.dokumen-mbkm.download', ['dokumenMbkm' => $dokumen_mbkm]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $dokumen_mbkm->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>