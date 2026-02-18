<x-layout.page title="Inovasi Pembelajaran ({{ $inovasi_pembelajaran_category->title }})" background="assets/img/default.jpg" class="inovasi-pembelajaran-category">
    
    {{-- List --}}
    <div class="inovasi-pembelajaran-category__list">
        @foreach ($inovasi_pembelajaran_category->inovasiPembelajarans as $inovasi_pembelajaran)
            <div class="list__item">
                <h3 class="item__title">{{ $inovasi_pembelajaran->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.inovasi-pembelajaran.download', ['inovasiPembelajaran' => $inovasi_pembelajaran]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $inovasi_pembelajaran->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>
    
</x-layout.page>