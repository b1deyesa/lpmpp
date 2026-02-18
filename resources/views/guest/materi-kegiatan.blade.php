<x-layout.page title="Materi Kegiatan" background="assets/img/default.jpg" class="materi-kegiatan">
    
    {{-- List --}}
    <div class="materi-kegiatan__list">
        @foreach ($materi_kegiatans as $materi_kegiatan)
            <div class="list__item">
                <h3 class="item__title">{{ $materi_kegiatan->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.materi-kegiatan.download', ['materiKegiatan' => $materi_kegiatan]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $materi_kegiatan->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>