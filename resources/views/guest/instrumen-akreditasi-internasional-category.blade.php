<x-layout.page title="Instrumen Akreditasi Internasional ({{ $instrumen_akreditasi_internasional_category->title }})" background="assets/img/default.jpg" class="instrumen-akreditasi-internasional-category">
    
    {{-- List --}}
    <div class="instrumen-akreditasi-internasional-category__list">
        @foreach ($instrumen_akreditasi_internasional_category->instrumenAkreditasiInternasionals as $instrumen_akreditasi_internasional)
            <div class="list__item">
                <h3 class="item__title">{{ $instrumen_akreditasi_internasional->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.instrumen-akreditasi-internasional.download', ['instrumenAkreditasiInternasional' => $instrumen_akreditasi_internasional]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>