<x-layout.dashboard class="website">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Website Setting</h1>
    
    <div class="dashboard__row">
        
        {{-- Form --}}
        <x-form action="{{ route('dashboard.website.store') }}" method="POST" enctype="multipart/form-data">
            
            {{-- Jumbotron --}}
            <div class="dashboard__header">
                <h2 class="header__title">Jumbotron</h2>
                <hr class="header__line">
            </div>
            <div class="form__row" style="height: fit-content">
                <x-input label="Jumbotron Background" type="image" name="jumbotron_background" value="{{ $website->jumbotron_background }}" class="jumbotron_background" />
                <div class="form__col">
                    <x-input label="Jumbotron Title" type="text" name="jumbotron_title" value="{{ $website->jumbotron_title }}" required />
                    <x-input label="Jumbotron Subtitle" type="text" name="jumbotron_subtitle" value="{{ $website->jumbotron_subtitle }}" required />
                </div>
            </div>
            <x-input label="Jumbotron Description" type="textarea" name="jumbotron_description" value="{{ $website->jumbotron_description }}" />
                
            {{-- Page --}}
            <div class="dashboard__header">
                <h2 class="header__title">Page</h2>
                <hr class="header__line">
            </div>
            <x-input label="Page Background" type="image" name="page_background" value="{{ $website->page_background }}" class="page__background" />
                
            {{-- Contact --}}
            <div class="dashboard__header">
                <h2 class="header__title">Contact</h2>
                <hr class="header__line">
            </div>
            <div class="form__row">
                <x-input label="Phone" type="text" name="phone" value="{{ $website->phone }}" />
                <x-input label="Fax" type="text" name="fax" value="{{ $website->fax }}" />
            </div>
            <x-input label="Email" type="text" name="email" value="{{ $website->email }}" />
            <x-input label="Address" type="textarea" name="address" value="{{ $website->address }}" rows="5" />
                
            {{-- Social Media --}}
            <div class="dashboard__header">
                <h2 class="header__title">Social Media</h2>
                <hr class="header__line">
            </div>
            <x-input label="Facebook Link" type="text" name="facebook_link" value="{{ $website->facebook_link }}" placeholder="https://www.facebook.com/" />
            <x-input label="Tiktok Link" type="text" name="tiktok_link" value="{{ $website->tiktok_link }}" placeholder="https://www.tiktok.com/" />
            <x-input label="X Link" type="text" name="x_link" value="{{ $website->x_link }}" placeholder="https://www.x.com/" />
            <x-input label="Instagram Link" type="text" name="instagram_link" value="{{ $website->instagram_link }}" placeholder="https://www.instagram.com/" />
            <x-input label="Youtube Link" type="text" name="youtube_link" value="{{ $website->youtube_link }}" placeholder="https://www.youtube.com/channel/" />
                
            {{-- Bottom --}}
            <x-slot:bottom>
                <x-modal>
                    <x-slot:trigger>
                        <x-button class="button__outline">Reset All</x-button>
                    </x-slot:trigger>
                    <p>Are you sure you want to reset?</p>
                    <x-form action="{{ route('dashboard.website.truncate') }}" method="POST">
                        <x-slot:bottom>
                            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                            <x-button type="submit">Reset</x-button>
                        </x-slot:bottom>
                    </x-form>
                </x-modal>
                <x-button type="submit">Save</x-button>
            </x-slot:bottom>
        </x-form>
        
        <hr class="dashboard__line">
        
        {{-- Active --}}
        @livewire('dashboard.website.active', compact('website'))
        
    </div>
    
    
</x-layout.dashboard>