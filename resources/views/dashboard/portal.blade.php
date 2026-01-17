<x-layout.dashboard class="portal">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Portal Pusat</h1>
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.pusat.portal.store', compact('pusat')) }}" method="POST">
        <div class="form__row">
            <div class="form__col">
                <x-input label="Article Title" type="text" name="title" />
                <x-input label="Article Content" type="editor" name="body" />
            </div>
            <hr class="form__line">
            <div class="form__col">
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
                @livewire('dashboard.portal-category.create', compact('pusat'))
                <x-button type="submit" class="submit">Publish</x-button>
            </div>
        </div>
    </x-form>
    
</x-layout.dashboard>