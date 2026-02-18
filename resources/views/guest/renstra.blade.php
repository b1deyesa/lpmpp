<x-layout.page title="Renstra" background="assets/img/default.jpg" class="renstra">
    
    {{-- List --}}
    <div class="renstra__list">
        @foreach ($renstras as $renstra)
            <div class="list__item">
                <h3 class="item__title">{{ $renstra->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.renstra.download', compact('renstra')) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $renstra->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>