<x-layout.dashboard-form title="Sambutan Website" class="sambutan">
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.sambutan.store') }}" method="POST">
        <x-input type="editor" name="body" value="{{ $sambutan->body ?? '' }}" />
        <x-button type="submit">Save</x-button>
    </x-form>
    
</x-layout.dashboard-form>