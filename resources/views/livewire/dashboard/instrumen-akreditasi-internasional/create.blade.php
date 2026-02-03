<x-modal class="instrumen-akreditasi-internasional">
    <x-slot:trigger>
        <x-button>Add New</x-button>
    </x-slot:trigger>
    <x-form wire="store()">
        <x-input label="File Name" type="text" wire="title" />
        <x-input label="File" type="file" wire="file" />
        @if ($instrumen_akreditasi_internasional_categories !== '[]')
            <x-input label="Folder" type="select" wire="instrumen_akreditasi_internasional_category_id" :options="$instrumen_akreditasi_internasional_categories" placeholder="Choose Folder" />
        @endif
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>