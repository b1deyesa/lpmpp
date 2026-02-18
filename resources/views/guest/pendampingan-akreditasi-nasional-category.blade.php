<x-layout.page title="Pendampingan Akreditasi Nasional ({{ $pendampingan_akreditasi_nasional_category->title }})" background="assets/img/default.jpg" class="pendampingan-akreditasi-nasional-category">
    
    {{-- List --}}
    <div class="pendampingan-akreditasi-nasional-category__list">
        @foreach ($pendampingan_akreditasi_nasional_category->pendampinganAkreditasiNasionals as $pendampingan_akreditasi_nasional)
            <div class="list__item">
                <h3 class="item__title">{{ $pendampingan_akreditasi_nasional->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.pendampingan-akreditasi-nasional.download', ['pendampinganAkreditasiNasional' => $pendampingan_akreditasi_nasional]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $pendampingan_akreditasi_nasional->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>