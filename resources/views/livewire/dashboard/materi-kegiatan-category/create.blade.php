<x-modal class="materi-kegiatan-category">
    <x-slot:trigger>
        <x-button class="button__outline">Add Folder</x-button>
    </x-slot:trigger>
    <x-form wire="store()">
        <x-input label="Folder Name" type="text" wire="title" />
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>