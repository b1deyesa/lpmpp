<x-layout.page title="Sertifikat" background="assets/img/default.jpg" class="sertifikat">
    
    {{-- List --}}
    <div class="sertifikat__list">
        @foreach ($sertifikats as $sertifikat)
            <div class="list__item">
                <h3 class="item__title">{{ $sertifikat->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.sertifikat.download', compact('sertifikat')) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $sertifikat->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>