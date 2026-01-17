<div class="portal__category">
    <x-input label="Category" type="checkbox" class="header__category" name="portal_categories" :options="$categories" />
    <x-modal>
        <x-slot:trigger>
            <x-button class="button__outline category__button">Add Category</x-button>
        </x-slot:trigger>
        <x-form wire="submit()">
            <x-input label="New Category" type="text" wire="title" />
            <x-slot:bottom>
                <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                <x-button type="submit">Add</x-button>
            </x-slot:bottom>
        </x-form>
    </x-modal>
</div>