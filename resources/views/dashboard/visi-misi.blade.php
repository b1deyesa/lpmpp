<x-layout.dashboard class="visi-misi">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Visi dan Misi LPMPP</h1>
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.visi-misi.store') }}" method="POST">
        <div class="form__row">
            <x-input label="Visi LPMPP" type="editor" name="visi" value="{{ $visi_misi->visi ?? '' }}" />
            <x-input label="Misi LPMPP" type="editor" name="misi" value="{{ $visi_misi->misi ?? '' }}" />
        </div>
        <x-slot:bottom>
            <x-modal>
                <x-slot:trigger>
                    <x-button class="button__outline">Reset All</x-button>
                </x-slot:trigger>
                <p>Are you sure you want to reset?</p>
                <x-form action="{{ route('dashboard.visi-misi.truncate') }}" method="POST">
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