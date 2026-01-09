<x-layout.page title="Tugas dan Fungsi LPMP" background="assets/img/default.jpg" class="tugas-fungsi">
    
    {{-- Tugas --}}
    <section class="tugas">
        <header>
            <i class="fa-solid fa-circle-dot"></i>
            <h2>Tugas</h2>
        </header>
        {!! $tugas_fungsi->tugas ?? '<small class="empty">No content available</small>' !!}
    </section>
    
    {{-- Fungsi --}}
    <section class="fungsi">
        <header>
            <i class="fa-solid fa-circle-dot"></i>
            <h2>Fungsi</h2>
        </header>
        {!! $tugas_fungsi->fungsi ?? '<small class="empty">No content available</small>' !!}
    </section>
    
</x-layout.page>