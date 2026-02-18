<x-layout.page title="Laporan" background="assets/img/default.jpg" class="laporan">
    
    {{-- List --}}
    <div class="laporan__list">
        @foreach ($laporans as $laporan)
            <div class="list__item">
                <h3 class="item__title">{{ $laporan->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.laporan.download', compact('laporan')) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $laporan->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>