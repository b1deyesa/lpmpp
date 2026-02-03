<x-layout.page title="Sertifikat ({{ $sertifikat_category->title }})" background="assets/img/default.jpg" class="sertifikat-category">
    
    {{-- List --}}
    <div class="sertifikat-category__list">
        @foreach ($sertifikat_category->sertifikats as $sertifikat)
            <div class="list__item">
                <h3 class="item__title">{{ $sertifikat->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.sertifikat.download', ['sertifikat' => $sertifikat]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>