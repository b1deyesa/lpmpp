<x-layout.dashboard-form title="Visi dan Misi LPMPP" class="visi-misi">
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.visi-misi.store') }}" method="POST">
        <x-input label="Visi LPMPP" type="editor" name="visi" value="{{ $visi_misi->visi ?? '' }}" />
        <x-input label="Misi LPMPP" type="editor" name="misi" value="{{ $visi_misi->misi ?? '' }}" />
        <x-button type="submit">Save</x-button>
    </x-form>
    
</x-layout.dashboard-form>