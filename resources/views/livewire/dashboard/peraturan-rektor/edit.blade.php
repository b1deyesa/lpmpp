<x-modal class="peraturan-rektor">
    <x-slot:trigger>
        <x-button class="button__edit"><i class="fa-solid fa-pencil"></i></x-button>
    </x-slot:trigger>
    <x-form wire="update()">
        <x-input label="File Name" type="text" wire="title" />
        @if ($peraturan_rektor_categories !== '[]')
            <x-input label="Folder" type="select" wire="peraturan_rektor_category_id" :options="$peraturan_rektor_categories" placeholder="Choose Folder" />
        @endif
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>