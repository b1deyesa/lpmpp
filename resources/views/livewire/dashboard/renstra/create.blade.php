<x-modal class="renstra">
    <x-slot:trigger>
        <x-button>Add New</x-button>
    </x-slot:trigger>
    <x-form wire="store()">
        <x-input label="File Name" type="text" wire="title" />
        <x-input label="File" type="file" wire="file" />
        @if ($renstra_categories !== '[]')
            <x-input label="Folder" type="select" wire="renstra_category_id" :options="$renstra_categories" placeholder="Choose Folder" />
        @endif
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>