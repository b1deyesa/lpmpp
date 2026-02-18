<x-layout.page title="Peraturan Rektor" background="assets/img/default.jpg" class="peraturan-rektor">
    
    {{-- List --}}
    <div class="peraturan-rektor__list">
        @foreach ($peraturan_rektors as $peraturan_rektor)
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
