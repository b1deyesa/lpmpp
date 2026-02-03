<x-modal class="dokumen-mbkm">
    <x-slot:trigger>
        <x-button class="button__edit"><i class="fa-solid fa-pencil"></i></x-button>
    </x-slot:trigger>
    <x-form wire="update()">
        <x-input label="File Name" type="text" wire="title" />
        @if ($dokumen_mbkm_categories !== '[]')
            <x-input label="Folder" type="select" wire="dokumen_mbkm_category_id" :options="$dokumen_mbkm_categories" placeholder="Choose Folder" />
        @endif
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>