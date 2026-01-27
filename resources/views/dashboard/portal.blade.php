<x-layout.dashboard class="portal">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Portal Pusat</h1>
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.pusat.portal.store', compact('pusat')) }}" method="POST" enctype="multipart/form-data">
        <div class="form__row">
            <div class="form__col">
                <x-input label="Post Title" type="text" name="title" />
                <x-input label="Post Content" type="editor" name="body" />
            </div>
            <hr class="form__line">
            <div class="form__col">
                <x-input label="Post Cover" type="image" name="cover" />
                @livewire('dashboard.portal-category.create', compact('pusat'))
                <x-button type="submit" class="submit">Publish</x-button>
            </div>
        </div>
    </x-form>
    
    {{-- Header --}}
    <div class="dashboard__header">
        <h2 class="header__title">All Posts</h2>
        <hr class="header__line">
    </div>
    
    {{-- Table --}}
    <div class="dashboard__table" x-data="{ search: '', highlight(text) { if (!this.search) return text; const keyword = this.search.toLowerCase(); const source  = text.toLowerCase(); let result = ''; let i = 0; while (i < text.length) { const index = source.indexOf(keyword, i); if (index === -1) { result += text.slice(i); break; } result += text.slice(i, index); result += `<mark>${text.slice(index, index + this.search.length)}</mark>`; i = index + this.search.length; } return result; } }">
    
        {{-- Features --}}
        <div class="table__features">
            <x-input type="search" class="feature__search" placeholder="Search here..." x-model="search" />
        </div>
        
        {{-- Table --}}
        <x-table>
            <x-slot:head>
                <th>Cover</th>
                <th>Title</th>
                <th>Category</th>
            </x-slot:head>

            <x-slot:body>
                @forelse ($portal_posts ?? [] as $portal_post)
                    @php
                        $searchable = strtolower(
                            implode(' ', [
                                $portal_post->title,
                                $categoriesText = $portal_post->categories->map(fn($c) => $c->title)->implode(' | ')
                            ])
                        );
                    @endphp

                    <tr x-show="search === '' || '{{ $searchable }}'.includes(search.toLowerCase())">
                        <td width="1%"><img src="{{ $portal_post->cover ? asset('storage/'. $portal_post->cover) : asset('assets/img/default.jpg') }}" class="cover"></td>
                        <td x-html="highlight('{{ addslashes($portal_post->title) }}')"></td>
                        <td x-html="highlight('{{ addslashes($portal_post->categories->map(fn($c) => $c->title)->implode(' | ')) }}')" width="1%" style="white-space: nowrap"></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="999" class="table__empty">No content available</td>
                    </tr>
                @endforelse
            </x-slot:body>
        </x-table>
        
    </div>
    
</x-layout.dashboard>