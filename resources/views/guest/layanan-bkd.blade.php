<x-layout.page title="Layanan BKD" background="assets/img/default.jpg" class="layanan-bkd">
    
    {{-- List --}}
    <div class="layanan-bkd__list">
        @foreach ($layanan_bkds as $layanan_bkd)
            <div class="list__item">
                <h3 class="item__title">{{ $layanan_bkd->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.layanan-bkd.download', compact('layanan_bkd')) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $layanan_bkd->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>