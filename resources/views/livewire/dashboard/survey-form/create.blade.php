<x-form wire="store()">
    <x-input label="Form Title" type="text" wire="title" />
    <div class="form__items">
        @foreach ($items as $index => $item)
            <div class="item">
                <x-input label="Label" type="text" wire="items.{{ $index }}.label" />
                <x-input label="Input Type" type="select" wire="items.{{ $index }}.field_type" :options="$field_types" width="15em" />
                <x-button wire="remove({{ $index }})" class="remove__button"><i class="fa-solid fa-xmark"></i></x-button>
            </div>
        @endforeach
    </div>
    <x-slot:bottom>
        <x-button wire="add()" class="button__outline">Add Field</x-button>
        <x-button type="submit">Save</x-button>
    </x-slot:bottom>
</x-form>