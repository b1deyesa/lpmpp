<x-layout.page title="Pelatihan" background="assets/img/default.jpg" class="pelatihan">
    
    {{-- List --}}
    <div class="pelatihan__list">
        @foreach ($pelatihans as $pelatihan)
            <div class="list__item">
                <h2 class="item__title">{{ $pelatihan->title }}</h2>
                <div class="item__content">{!! content($pelatihan?->body) !!}</div>
            </div>
        @endforeach
    </div>

</x-layout.page>