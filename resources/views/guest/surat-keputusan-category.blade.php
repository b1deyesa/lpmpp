<x-layout.page title="Surat Keputusan ({{ $surat_keputusan_category->title }})" background="assets/img/default.jpg" class="surat-keputusan-category">
    
    {{-- List --}}
    <div class="surat-keputusan-category__list">
        @foreach ($surat_keputusan_category->suratKeputusans as $surat_keputusan)
            <div class="list__item">
                <h3 class="item__title">{{ $surat_keputusan->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.surat-keputusan.download', ['suratKeputusan' => $surat_keputusan]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $surat_keputusan->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>