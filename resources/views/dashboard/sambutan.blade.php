<x-layout.dashboard class="sambutan">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Sambutan Website</h1>
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.sambutan.store') }}" method="POST" enctype="multipart/form-data">
        <div class="form__row">
            <div class="form__col" style="max-width: 20em">
                <x-input label="Photo" type="image" name="photo" value="{{ $sambutan?->photo }}" />
                <div class="form__term">
                    <h6 class="term__title">Upload Rules:</h6>
                    <ul>
                        <li>The uploaded file must be an image format (e.g., JPG, JPEG, or PNG).</li>
                        <li>The maximum allowed file size is <strong>2 MB</strong>.</li>
                        <li>The image must have an aspect ratio of <strong>4:3</strong>.</li>
                        <li>Files that do not meet these requirements may be rejected or automatically adjusted.</li>
                        <li>You are responsible for ensuring the file meets all upload specifications before submission.</li>
                    </ul>
                </div>
            </div>
            <x-input label="Isi Sambutan" type="textarea" name="body" value="{{ $sambutan?->body }}" />
        </div>
        <x-slot:bottom>
            <x-modal>
                <x-slot:trigger>
                    <x-button class="button__outline">Reset All</x-button>
                </x-slot:trigger>
                <p>Are you sure you want to reset?</p>
                <x-form action="{{ route('dashboard.sambutan.truncate') }}" method="POST">
                    <x-slot:bottom>
                        <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                        <x-button type="submit">Reset</x-button>
                    </x-slot:bottom>
                </x-form>
            </x-modal>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
    
</x-layout.dashboard>