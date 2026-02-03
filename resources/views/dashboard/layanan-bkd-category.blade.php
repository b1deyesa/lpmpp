<x-layout.dashboard class="layanan-bkd-category">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Layanan BKD ({{ $layanan_bkd_category->title }})</h1>
    
    {{-- Table --}}
    <div class="dashboard__file" x-data="{ search: '', highlight(text) { if (!this.search) return text; const keyword = this.search.toLowerCase(); const source  = text.toLowerCase(); let result = ''; let i = 0; while (i < text.length) { const index = source.indexOf(keyword, i); if (index === -1) { result += text.slice(i); break; } result += text.slice(i, index); result += `<mark>${text.slice(index, index + this.search.length)}</mark>`; i = index + this.search.length; } return result; } }">
    
        {{-- Features --}}
        <div class="file__features">
            <div class="features__right">
                <x-input type="search" class="feature__search" placeholder="Search here..." x-model="search" />
                <x-modal>
                    <x-slot:trigger>
                        <x-button class="button__outline">Reset All</x-button>
                    </x-slot:trigger>
                    <p>Are you sure you want to reset?</p>
                    <x-form action="{{ route('dashboard.layanan-bkd-category.truncate', compact('layanan_bkd_category')) }}" method="POST">
                        <x-slot:bottom>
                            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                            <x-button type="submit">Reset</x-button>
                        </x-slot:bottom>
                    </x-form>
                </x-modal>
                @livewire('dashboard.layanan-bkd.create')
            </div>
        </div>
        
        {{-- List --}}
        @if (count($layanan_bkd_category->layananBkds) > 0)
            <div class="file__list">
                
                {{-- Item --}}
                <section>
                    @foreach ($layanan_bkd_category->layananBkds as $layanan_bkd)
                        @php
                            $searchable = strtolower(
                                implode(' ', [
                                    $layanan_bkd->title,
                                    $layanan_bkd->file
                                ])
                            );
                        @endphp
                        <div class="list__item" x-show="search === '' || '{{ $searchable }}'.includes(search.toLowerCase())">
                            <div class="item__left">
                                <i class="item__icon fa-regular fa-file-lines"></i>
                                <h3 class="item__title" x-html="highlight('{{ addslashes($layanan_bkd->title) }}')"></h3>
                            </div>
                            <div class="item__right">
                                <x-button type="link" href="{{ route('dashboard.layanan-bkd.download', compact('layanan_bkd')) }}" class="button__download"><i class="fa-solid fa-download"></i></x-button>
                                @livewire('dashboard.layanan-bkd.edit', compact('layanan_bkd'), key($layanan_bkd->id))
                                <x-modal>
                                    <x-slot:trigger>
                                        <x-button class="button__delete"><i class="fa-solid fa-trash"></i></x-button>
                                    </x-slot:trigger>
                                    <p>Are you sure you want to delete it?</p>
                                    <x-form action="{{ route('dashboard.layanan-bkd.destroy', compact('layanan_bkd')) }}" method="DELETE">
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