<x-layout.dashboard class="pendampingan-akreditasi-internasional">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Pendampingan Akreditasi Internasional</h1>
    
    {{-- Table --}}
    <div class="dashboard__file" x-data="{ search: '', highlight(text) { if (!this.search) return text; const keyword = this.search.toLowerCase(); const source  = text.toLowerCase(); let result = ''; let i = 0; while (i < text.length) { const index = source.indexOf(keyword, i); if (index === -1) { result += text.slice(i); break; } result += text.slice(i, index); result += `<mark>${text.slice(index, index + this.search.length)}</mark>`; i = index + this.search.length; } return result; } }">
    
        {{-- Features --}}
        <div class="file__features">
            @livewire('dashboard.pendampingan-akreditasi-internasional-category.create')
            <div class="features__right">
                <x-input type="search" class="feature__search" placeholder="Search here..." x-model="search" />
                <x-modal>
                    <x-slot:trigger>
                        <x-button class="button__outline">Reset All</x-button>
                    </x-slot:trigger>
                    <p>Are you sure you want to reset?</p>
                    <x-form action="{{ route('dashboard.pendampingan-akreditasi-internasional.truncate') }}" method="POST">
                        <x-slot:bottom>
                            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                            <x-button type="submit">Reset</x-button>
                        </x-slot:bottom>
                    </x-form>
                </x-modal>
                @livewire('dashboard.pendampingan-akreditasi-internasional.create')
            </div>
        </div>
        
        {{-- List --}}
        @if (count($pendampingan_akreditasi_internasional_categories) > 0 || count($pendampingan_akreditasi_internasionals) > 0)
            <div class="file__list">
                
                {{-- Category --}}
                <section>
                    @foreach ($pendampingan_akreditasi_internasional_categories as $pendampingan_akreditasi_internasional_category)
                        @php
                            $searchable = strtolower(
                                implode(' ', [
                                    $pendampingan_akreditasi_internasional_category->title
                                ])
                            );
                        @endphp
                        <a href="{{ route('dashboard.pendampingan-akreditasi-internasional-category.show', ['paiCategory' => $pendampingan_akreditasi_internasional_category]) }}" class="list__item" x-show="search === '' || '{{ $searchable }}'.includes(search.toLowerCase())">
                            <div class="item__left">
                                <i class="item__icon fa-regular fa-folder-open"></i>
                                <h3 class="item__title" x-html="highlight('{{ addslashes($pendampingan_akreditasi_internasional_category->title) }}')"></h3>
                            </div>
                        </a>
                    @endforeach
                </section>
                
                {{-- Item --}}
                <section>
                    @foreach ($pendampingan_akreditasi_internasionals as $pendampingan_akreditasi_internasional)
                        @php
                            $searchable = strtolower(
                                implode(' ', [
                                    $pendampingan_akreditasi_internasional->title,
                                    $pendampingan_akreditasi_internasional->file
                                ])
                            );
                        @endphp
                        <div class="list__item" x-show="search === '' || '{{ $searchable }}'.includes(search.toLowerCase())">
                            <div class="item__left">
                                <i class="item__icon fa-regular fa-file-lines"></i>
                                <h3 class="item__title" x-html="highlight('{{ addslashes($pendampingan_akreditasi_internasional->title) }}')"></h3>
                            </div>
                            <div class="item__right">
                                <x-button type="link" href="{{ route('dashboard.pendampingan-akreditasi-internasional.download', ['pai' => $pendampingan_akreditasi_internasional]) }}" class="button__download"><i class="fa-solid fa-download"></i></x-button>
                                @livewire('dashboard.pendampingan-akreditasi-internasional.edit', compact('pendampingan_akreditasi_internasional'), key($pendampingan_akreditasi_internasional->id))
                                <x-modal>
                                    <x-slot:trigger>
                                        <x-button class="button__delete"><i class="fa-solid fa-trash"></i></x-button>
                                    </x-slot:trigger>
                                    <p>Are you sure you want to delete it?</p>
                                    <x-form action="{{ route('dashboard.pendampingan-akreditasi-internasional.destroy', ['pai' => $pendampingan_akreditasi_internasional]) }}" method="DELETE">
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