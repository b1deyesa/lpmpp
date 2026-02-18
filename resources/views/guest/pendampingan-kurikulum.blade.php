<x-layout.page title="Pendampingan Kurikulum" background="assets/img/default.jpg" class="pendampingan-kurikulum">
    
    {{-- List --}}
    <div class="pendampingan-kurikulum__list">
        @foreach ($pendampingan_kurikulums as $pendampingan_kurikulum)
            <div class="list__item">
                <h3 class="item__title">{{ $pendampingan_kurikulum->title }}</h3>
                <div class="item__right">
                    <x-button type="link" href="{{ route('guest.pendampingan-kurikulum.download', ['pk' => $pendampingan_kurikulum]) }}" class="button__outline item__download"><i class="fa-solid fa-download"></i>Download</x-button>
                    <x-button type="link" href="{{ asset('storage/'. $pendampingan_kurikulum->file) }}" class="item__view"><i class="fa-solid fa-eye"></i></x-button>
                </div>
            </div>
        @endforeach
    </div>
    
</x-layout.page>