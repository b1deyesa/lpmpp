<x-layout.page title="Tugas dan Fungsi LPMP" background="assets/img/default.jpg" class="tugas-fungsi">
    
    {{-- Tugas --}}
    <div class="tugas">
        <h2 class="tugas__title">Tugas</h2>
        <div class="tugas__content">{!! content($tugas_fungsi?->tugas) !!}</div>
    </div>
    
    {{-- Fungsi --}}
    <div class="fungsi">
        <h2 class="fungsi__title">Fungsi</h2>
        <div class="fungsi__content">{!! content($tugas_fungsi?->fungsi) !!}</div>
    </div>
    
</x-layout.page>