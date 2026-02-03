<x-layout.page title="Layanan BKD ({{ $layanan_bkd_category->title }})" background="assets/img/default.jpg" class="layanan-bkd-category">
    
    {{-- List --}}
    <div class="layanan-bkd-category__list">
        @foreach ($layanan_bkd_category->layananBkds as $layanan_bkd)
            <div class="list__item">
                <h3 class="item__title">{{ $layanan_bkd->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.layanan-bkd.download', compact('layanan_bkd')) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>