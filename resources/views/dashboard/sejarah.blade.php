<x-layout.dashboard-form title="Sejarah Singkat LPMPP" class="sejarah">
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.sejarah.store') }}" method="POST">
        <x-input type="editor" name="body" value="{{ $sejarah->body ?? '' }}" />
        <x-button type="submit">Save</x-button>
    </x-form>
    
</x-layout.dashboard-form>