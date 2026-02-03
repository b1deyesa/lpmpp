<x-layout.page title="Surat Keputusan" background="assets/img/default.jpg" class="surat-keputusan">
    
    {{-- List --}}
    <div class="surat-keputusan__list">
        @foreach ($surat_keputusans as $surat_keputusan)
            <div class="list__item">
                <h3 class="item__title">{{ $surat_keputusan->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.surat-keputusan.download', compact('surat_keputusan')) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>