<x-layout.page title="Instrumen Akreditasi Nasional" background="assets/img/default.jpg" class="instrumen-akreditasi-nasional">
    
    {{-- List --}}
    <div class="instrumen-akreditasi-nasional__list">
        @foreach ($instrumen_akreditasi_nasionals as $instrumen_akreditasi_nasional)
            <div class="list__item">
                <h3 class="item__title">{{ $instrumen_akreditasi_nasional->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.instrumen-akreditasi-nasional.download', ['instrumenAkreditasiNasional' => $instrumen_akreditasi_nasional]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>