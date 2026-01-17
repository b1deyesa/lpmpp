<x-layout.dashboard class="tugas-fungsi">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Tugas dan Fungsi LPMPP</h1>
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.tugas-fungsi.store') }}" method="POST">
        <div class="form__row">
            <x-input label="Tugas LPMPP UNPATTI" type="editor" name="tugas" value="{{ $tugas_fungsi?->tugas }}" />
            <x-input label="Fungsi LPMPP UNPATTI" type="editor" name="fungsi" value="{{ $tugas_fungsi?->fungsi }}" />
        </div>
        <x-slot:bottom>
            <x-modal>
                <x-slot:trigger>
                    <x-button class="button__outline">Reset All</x-button>
                </x-slot:trigger>
                <p>Are you sure you want to reset?</p>
                <x-form action="{{ route('dashboard.tugas-fungsi.truncate') }}" method="POST">
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