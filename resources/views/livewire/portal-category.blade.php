<div class="portal__category">
    <x-input label="Category" type="checkbox" class="header__category" name="portal_categories" :options="$categories" />
    <x-modal :close="true">
        <x-slot:trigger>
            <x-button class="button__outline">Add Category</x-button>
        </x-slot:trigger>
        <x-form wire="submit()">
            <x-input label="New Category" type="text" wire="title" />
            <div class="modal__bottom">
                <x-button type="submit">Add</x-button>
            </div>
        </x-form>
    </x-modal>
</div>