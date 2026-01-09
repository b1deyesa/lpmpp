<x-layout.dashboard-form title="Struktur Organisasi dan Personalia" class="struktur-organisasi">
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.struktur-organisasi.store') }}" method="POST">
        <x-input type="editor" name="body" value="{{ $struktur_organisasi->body ?? '' }}" />
        <x-button type="submit">Save</x-button>
    </x-form>
    
</x-layout.dashboard-form>