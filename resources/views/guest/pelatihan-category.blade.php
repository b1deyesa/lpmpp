<x-layout.page title="Pelatihan ({{ $pelatihan_category->title }})" background="assets/img/default.jpg" class="pelatihan-category">
    
    {{-- List --}}
    <div class="pelatihan-category__list">
        @foreach ($pelatihan_category->pelatihans as $pelatihan)
            <div class="list__item">
                <h3 class="item__title">{{ $pelatihan->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.pelatihan.download', compact('pelatihan')) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>