<x-layout.page title="Pelatihan" background="assets/img/default.jpg" class="pelatihan">
    
    {{-- List --}}
    <div class="pelatihan__list">
        @foreach ($pelatihans as $pelatihan)
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