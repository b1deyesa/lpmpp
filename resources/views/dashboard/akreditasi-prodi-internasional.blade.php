<x-layout.dashboard class="akreditasi-prodi-internasional">

    {{-- Title --}}
    <h1 class="dashboard__title">Akreditasi Prodi Internasional</h1>

    {{-- Form --}}
    <x-form action="{{ route('dashboard.akreditasi-prodi-internasional.store') }}" method="POST">
        <x-input type="editor" name="body" toolbar="full" value="{{ $akreditasi_prodi_internasional?->body }}" />
        <x-slot:bottom>
            <x-modal>
                <x-slot:trigger>
                    <x-button class="button__outline">Reset All</x-button>
                </x-slot:trigger>
                <p>Are you sure you want to reset?</p>
                <x-form action="{{ route('dashboard.akreditasi-prodi-internasional.truncate') }}" method="POST">
                    <x-slot:bottom>
                        <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                        <x-button type="submit">Reset</x-button>
                    </x-slot:bottom>
                </x-form>
            </x-modal>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>

</x-layout.dashboard>