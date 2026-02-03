<x-layout.dashboard class="pelatihan-show">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Pelatihan - {{ $pelatihan->title }}</h1>
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.pelatihan.update', compact('pelatihan')) }}" method="PUT">
        <x-input type="editor" name="body" toolbar="full" value="{{ $pelatihan?->body }}" />
        <x-slot:bottom>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
    
</x-layout.dashboard>