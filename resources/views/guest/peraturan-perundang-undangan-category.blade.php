<x-layout.page title="Peraturan ({{ $peraturan_perundang_undangan_category->title }})" background="assets/img/default.jpg" class="peraturan-perundang-undangan-category">
    
    {{-- List --}}
    <div class="peraturan-perundang-undangan-category__list">
        @foreach ($peraturan_perundang_undangan_category->peraturanPerundangUndangans as $peraturan_perundang_undangan)
            <div class="list__item">
                <h3 class="item__title">{{ $peraturan_perundang_undangan->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.peraturan-perundang-undangan.download', ['peraturanPerundangUndangan' => $peraturan_perundang_undangan]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.page>