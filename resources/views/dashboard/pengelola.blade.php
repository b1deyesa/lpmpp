<x-layout.dashboard class="pengelola">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Pengelola LPMPP</h1>
    
    {{-- Table --}}
    <div class="dashboard__table" x-data="{ search: '', highlight(text) { if (!this.search) return text; const keyword = this.search.toLowerCase(); const source  = text.toLowerCase(); let result = ''; let i = 0; while (i < text.length) { const index = source.indexOf(keyword, i); if (index === -1) { result += text.slice(i); break; } result += text.slice(i, index); result += `<mark>${text.slice(index, index + this.search.length)}</mark>`; i = index + this.search.length; } return result; } }">
    
        {{-- Features --}}
        <div class="table__features">
            <x-input type="search" class="feature__search" placeholder="Search here..." x-model="search" />
            <x-modal>
                <x-slot:trigger>
                    <x-button class="button__outline">Reset All</x-button>
                </x-slot:trigger>
                <p>Are you sure you want to reset?</p>
                <x-form action="{{ route('dashboard.pengelola.truncate') }}" method="POST">
                    <x-slot:bottom>
                        <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                        <x-button type="submit">Reset</x-button>
                    </x-slot:bottom>
                </x-form>
            </x-modal>
            @livewire('dashboard.pengelola.create')
        </div>
    
        {{-- Table --}}
        <x-table>
            <x-slot:head>
                <th>Photo</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th></th>
            </x-slot:head>
            <x-slot:body>
                @forelse ($pengelolas ?? [] as $pengelola)
                    @php
                        $searchable = strtolower(
                            implode(' ', [
                                $pengelola->nama,
                                $pengelola->jabatan
                            ])
                        );
                    @endphp
                    <tr x-show="search === '' || '{{ $searchable }}'.includes(search.toLowerCase())">
                        <td width="1%"><img src="{{ $pengelola->photo ? asset('storage/'.$pengelola->photo) : asset('assets/img/default.jpg') }}" class="photo"></td>
                        <td x-html="highlight('{{ addslashes($pengelola->nama) }}')"></td>
                        <td x-html="highlight('{{ addslashes($pengelola->jabatan) }}')" width="20%"></td>
                        <td width="1%">
                            <div class="table__action">
                                @livewire('dashboard.pengelola.edit', compact('pengelola'), key($pengelola->id))
                                <x-modal>
                                    <x-slot:trigger>
                                        <x-button class="button__outline"><i class="fa-solid fa-trash"></i></x-button>
                                    </x-slot:trigger>
                                    <p>Are you sure you want to delete it?</p>
                                    <x-form action="{{ route('dashboard.pengelola.destroy', compact('pengelola')) }}" method="DELETE">
                                        <x-slot:bottom>
                                            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                                            <x-button type="submit">Delete</x-button>
                                        </x-slot:bottom>
                                    </x-form>
                                </x-modal>
                            </div>
                        </td>
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