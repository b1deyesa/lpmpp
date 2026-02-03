<x-layout.dashboard class="instrumen-akreditasi-internasional-category">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Instrumen Akreditasi Internasional ({{ $instrumen_akreditasi_internasional_category->title }})</h1>
    
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
                    <x-form action="{{ route('dashboard.instrumen-akreditasi-internasional-category.truncate', ['iaiCategory' => $instrumen_akreditasi_internasional_category]) }}" method="POST">
                        <x-slot:bottom>
                            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                            <x-button type="submit">Reset</x-button>
                        </x-slot:bottom>
                    </x-form>
                </x-modal>
                @livewire('dashboard.instrumen-akreditasi-internasional.create')
            </div>
        </div>
        
        {{-- List --}}
        @if (count($instrumen_akreditasi_internasional_category->instrumenAkreditasiInternasionals) > 0)
            <div class="file__list">
                
                {{-- Item --}}
                <section>
                    @foreach ($instrumen_akreditasi_internasional_category->instrumenAkreditasiInternasionals as $instrumen_akreditasi_internasional)
                        @php
                            $searchable = strtolower(
                                implode(' ', [
                                    $instrumen_akreditasi_internasional->title,
                                    $instrumen_akreditasi_internasional->file
                                ])
                            );
                        @endphp
                        <div class="list__item" x-show="search === '' || '{{ $searchable }}'.includes(search.toLowerCase())">
                            <div class="item__left">
                                <i class="item__icon fa-regular fa-file-lines"></i>
                                <h3 class="item__title" x-html="highlight('{{ addslashes($instrumen_akreditasi_internasional->title) }}')"></h3>
                            </div>
                            <div class="item__right">
                                <x-button type="link" href="{{ route('dashboard.instrumen-akreditasi-internasional.download', ['iai' => $instrumen_akreditasi_internasional]) }}" class="button__download"><i class="fa-solid fa-download"></i></x-button>
                                @livewire('dashboard.instrumen-akreditasi-internasional.edit', compact('instrumen_akreditasi_internasional'), key($instrumen_akreditasi_internasional->id))
                                <x-modal>
                                    <x-slot:trigger>
                                        <x-button class="button__delete"><i class="fa-solid fa-trash"></i></x-button>
                                    </x-slot:trigger>
                                    <p>Are you sure you want to delete it?</p>
                                    <x-form action="{{ route('dashboard.instrumen-akreditasi-internasional.destroy', ['iai' => $instrumen_akreditasi_internasional]) }}" method="DELETE">
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