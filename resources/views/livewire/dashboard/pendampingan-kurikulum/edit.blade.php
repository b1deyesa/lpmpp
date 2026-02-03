<x-modal class="pendampingan-kurikulum">
    <x-slot:trigger>
        <x-button class="button__edit"><i class="fa-solid fa-pencil"></i></x-button>
    </x-slot:trigger>
    <x-form wire="update()">
        <x-input label="File Name" type="text" wire="title" />
        @if ($pendampingan_kurikulum_categories !== '[]')
            <x-input label="Folder" type="select" wire="pendampingan_kurikulum_category_id" :options="$pendampingan_kurikulum_categories" placeholder="Choose Folder" />
        @endif
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>