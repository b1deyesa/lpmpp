<x-layout.page title="Peraturan Rektor ({{ $peraturan_rektor_category->title }})" background="assets/img/default.jpg" class="peraturan-rektor-category">
    
    {{-- List --}}
    <div class="peraturan-rektor-category__list">
        @foreach ($peraturan_rektor_category->peraturanRektors as $peraturan_rektor)
            <div class="list__item">
                <h3 class="item__title">{{ $peraturan_rektor->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.peraturan-rektor.download', ['peraturanRektor' => $peraturan_rektor]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $peraturan_rektor->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>