<x-layout.dashboard-form title="Tugas dan Fungsi" class="tugas-fungsi">
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.tugas-fungsi.store') }}" method="POST">
        <x-input label="Tugas LPMPP UNPATTI" type="editor" name="tugas" value="{{ $tugas_fungsi->tugas ?? '' }}" />
        <x-input label="Fungsi LPMPP UNPATTI" type="editor" name="fungsi" value="{{ $tugas_fungsi->fungsi ?? '' }}" />
        <x-button type="submit">Save</x-button>
    </x-form>
    
</x-layout.dashboard-form>