<x-modal class="dokumen-kurikulum">
    <x-slot:trigger>
        <x-button>Add New</x-button>
    </x-slot:trigger>
    <x-form wire="store()">
        <x-input label="File Name" wire="title" />
        <x-input label="File" type="file" wire="file" />
        @if ($dokumen_kurikulum_categories !== '[]')
            <x-input type="select" label="Folder" wire="dokumen_kurikulum_category_id" :options="$dokumen_kurikulum_categories" placeholder="Choose Folder" />
        @endif
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>
