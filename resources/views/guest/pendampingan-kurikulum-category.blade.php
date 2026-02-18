<x-layout.page title="Pendampingan Kurikulum ({{ $pendampingan_kurikulum_category->title }})" background="assets/img/default.jpg" class="pendampingan-kurikulum-category">
    
    {{-- List --}}
    <div class="pendampingan-kurikulum-category__list">
        @foreach ($pendampingan_kurikulum_category->pendampinganKurikulums as $pendampingan_kurikulum)
            <div class="list__item">
                <h3 class="item__title">{{ $pendampingan_kurikulum->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.pendampingan-kurikulum.download', ['pk' => $pendampingan_kurikulum]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $pendampingan_kurikulum->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>
    
</x-layout.page>