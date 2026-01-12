<x-layout.dashboard class="portal">
    
    {{-- Style --}}
    @push('styles')
        <style>
            .ck-editor__editable {
                min-height: 500px;
            }
        </style>
    @endpush
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.pusat.portal.store', compact('pusat')) }}" method="POST">
        
        {{-- Left --}}
        <div class="portal__left">
            <div class="portal__header">
                <div class="header__container">
                    <h2 class="header__title">Portal</h2>
                </div>
            </div>
            <x-input label="Article Title" type="text" name="title" />
            <x-input label="Article Content" type="editor" name="body" />
        </div>
        
        <hr class="portal__line">
        
        {{-- Right --}}
        <div class="portal__right">
            <div class="input">
                <span class="input__label">Pusat LPMPP</span>
                <div class="select">
                    <select onchange="location.href = '{{ route(Route::currentRouteName(), ['pusat' => '__PUSAT__']) }}'.replace('__PUSAT__', this.value);">
                        @foreach ($pusats as $item)
                            <option value="{{ $item->singkatan_bagian }}" @selected($item->singkatan_bagian == request()?->route('pusat')?->singkatan_bagian)>{{ $item->nama_bagian }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @livewire('portal-category', compact('pusat'))
            <x-button type="submit" class="submit">Publish</x-button>
        </div>
        
    </x-form>
    
</x-layout.dashboard>