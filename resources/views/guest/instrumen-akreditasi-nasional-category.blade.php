<x-layout.page title="Instrumen Akreditasi Nasional ({{ $instrumen_akreditasi_nasional_category->title }})" background="assets/img/default.jpg" class="instrumen-akreditasi-nasional-category">
    
    {{-- List --}}
    <div class="instrumen-akreditasi-nasional-category__list">
        @foreach ($instrumen_akreditasi_nasional_category->instrumenAkreditasiNasionals as $instrumen_akreditasi_nasional)
            <div class="list__item">
                <h3 class="item__title">{{ $instrumen_akreditasi_nasional->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.instrumen-akreditasi-nasional.download', ['instrumenAkreditasiNasional' => $instrumen_akreditasi_nasional]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $instrumen_akreditasi_nasional->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>