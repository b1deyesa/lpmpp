<x-layout.page title="Instrumen Akreditasi Internasional" background="assets/img/default.jpg" class="instrumen-akreditasi-internasional">
    
    {{-- List --}}
    <div class="instrumen-akreditasi-internasional__list">
        @foreach ($instrumen_akreditasi_internasionals as $instrumen_akreditasi_internasional)
            <div class="list__item">
                <h3 class="item__title">{{ $instrumen_akreditasi_internasional->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.instrumen-akreditasi-internasional.download', compact('instrumen_akreditasi_internasional')) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $instrumen_akreditasi_internasional->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>