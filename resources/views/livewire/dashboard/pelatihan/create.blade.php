<x-modal class="pelatihan">
    <x-slot:trigger>
        <x-button>Add Menu</x-button>
    </x-slot:trigger>
    <x-form wire="store()">
        <x-input label="Menu Title" type="text" wire="title" />
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>