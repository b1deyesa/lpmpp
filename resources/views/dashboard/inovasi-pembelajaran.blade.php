<x-layout.dashboard class="inovasi-pembelajaran">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Inovasi Pembelajaran</h1>
    
    {{-- Table --}}
    <div class="dashboard__file" x-data="{ search: '', highlight(text) { if (!this.search) return text; const keyword = this.search.toLowerCase(); const source  = text.toLowerCase(); let result = ''; let i = 0; while (i < text.length) { const index = source.indexOf(keyword, i); if (index === -1) { result += text.slice(i); break; } result += text.slice(i, index); result += `<mark>${text.slice(index, index + this.search.length)}</mark>`; i = index + this.search.length; } return result; } }">
    
        {{-- Features --}}
        <div class="file__features">
            @livewire('dashboard.inovasi-pembelajaran-category.create')
            <div class="features__right">
                <x-input type="search" class="feature__search" placeholder="Search here..." x-model="search" />
                <x-modal>
                    <x-slot:trigger>
                        <x-button class="button__outline">Reset All</x-button>
                    </x-slot:trigger>
                    <p>Are you sure you want to reset?</p>
                    <x-form action="{{ route('dashboard.inovasi-pembelajaran.truncate') }}" method="POST">
                        <x-slot:bottom>
                            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                            <x-button type="submit">Reset</x-button>
                        </x-slot:bottom>
                    </x-form>
                </x-modal>
                @livewire('dashboard.inovasi-pembelajaran.create')
            </div>
        </div>
        
        {{-- List --}}
        @if (count($inovasi_pembelajaran_categories) > 0 || count($inovasi_pembelajarans) > 0)
            <div class="file__list">
                
                {{-- Category --}}
                <section>
                    @foreach ($inovasi_pembelajaran_categories as $inovasi_pembelajaran_category)
                        @php
                            $searchable = strtolower(implode(' ', [$inovasi_pembelajaran_category->title]));
                        @endphp
                        <a href="{{ route('dashboard.inovasi-pembelajaran-category.show', compact('inovasi_pembelajaran_category')) }}" class="list__item" x-show="search === '' || '{{ $searchable }}'.includes(search.toLowerCase())">
                            <div class="item__left">
                                <i class="item__icon fa-regular fa-folder-open"></i>
                                <h3 class="item__title" x-html="highlight('{{ addslashes($inovasi_pembelajaran_category->title) }}')"></h3>
                            </div>
                        </a>
                    @endforeach
                </section>
                
                {{-- Item --}}
                <section>
                    @foreach ($inovasi_pembelajarans as $inovasi_pembelajaran)
                        @php
                            $searchable = strtolower(implode(' ', [$inovasi_pembelajaran->title, $inovasi_pembelajaran->file]));
                        @endphp
                        <div class="list__item" x-show="search === '' || '{{ $searchable }}'.includes(search.toLowerCase())">
                            <div class="item__left">
                                <i class="item__icon fa-regular fa-file-lines"></i>
                                <h3 class="item__title" x-html="highlight('{{ addslashes($inovasi_pembelajaran->title) }}')"></h3>
                            </div>
                            <div class="item__right">
                                <x-button type="link" href="{{ route('dashboard.inovasi-pembelajaran.download', compact('inovasi_pembelajaran')) }}" class="button__download"><i class="fa-solid fa-download"></i></x-button>
                                @livewire('dashboard.inovasi-pembelajaran.edit', compact('inovasi_pembelajaran'), key($inovasi_pembelajaran->id))
                                <x-modal>
                                    <x-slot:trigger>
                                        <x-button class="button__delete"><i class="fa-solid fa-trash"></i></x-button>
                                    </x-slot:trigger>
                                    <p>Are you sure you want to delete it?</p>
                                    <x-form action="{{ route('dashboard.inovasi-pembelajaran.destroy', compact('inovasi_pembelajaran')) }}" method="DELETE">
                                        <x-slot:bottom>
                                            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                                            <x-button type="submit">Delete</x-button>
                                        </x-slot:bottom>
                                    </x-form>
                                </x-modal>
                            </div>
                        </div>
                    @endforeach
                </section>
                
            </div>
        @else
            <small class="empty">No content available</small>
        @endif
        
    </div>
    
</x-layout.dashboard>