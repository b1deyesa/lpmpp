<x-layout.page title="Pendampingan Akreditasi Internasional ({{ $pendampingan_akreditasi_internasional_category->title }})" background="assets/img/default.jpg" class="pendampingan-akreditasi-internasional-category">
    
    {{-- List --}}
    <div class="pendampingan-akreditasi-internasional-category__list">
        @foreach ($pendampingan_akreditasi_internasional_category->pendampinganAkreditasiInternasionals as $pendampingan_akreditasi_internasional)
            <div class="list__item">
                <h3 class="item__title">{{ $pendampingan_akreditasi_internasional->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.pendampingan-akreditasi-internasional.download', ['pai' => $pendampingan_akreditasi_internasional]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>