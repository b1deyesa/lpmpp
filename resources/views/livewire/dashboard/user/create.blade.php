<x-modal class="user">
    <x-slot:trigger>
        <x-button>Add New</x-button>
    </x-slot:trigger>
    <x-form wire="store()">
        <x-input label="Name" type="text" wire="name" />
        <x-input label="Email" type="email" wire="email" />
        <x-input label="Role" type="select" placeholder="Select" wire="role" :options="$roles" />
        <x-input label="Password" type="password" wire="password" />
        <x-input label="Password Confirmation" type="password" wire="password_confirmation" />
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>
