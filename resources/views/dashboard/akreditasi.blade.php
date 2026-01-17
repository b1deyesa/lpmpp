<x-layout.dashboard class="akreditasi">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Akreditasi</h1>
    
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
                <x-form action="{{ route('dashboard.akreditasi.truncate') }}" method="POST">
                    <x-slot:bottom>
                        <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                        <x-button type="submit">Reset</x-button>
                    </x-slot:bottom>
                </x-form>
            </x-modal>
            @livewire('dashboard.akreditasi.import')
            @livewire('dashboard.akreditasi.create')
        </div>
        
        {{-- Table --}}
        <x-table>
            <x-slot:head>
                <th>Program Studi</th>
                <th>Status</th>
                <th>Jenjang</th>
                <th>Kategori</th>
                <th>Nilai</th>
                <th>No. SK</th>
                <th>Tahun SK</th>
                <th>Tanggal Kedaluwarsa</th>
            </x-slot:head>
            <x-slot:body>
                @forelse ($akreditasis ?? [] as $akreditasi)
                    @php
                        $searchable = strtolower(
                            implode(' ', [
                                $akreditasi->program_studi,
                                $akreditasi->status ? 'aktif' : 'tidak aktif',
                                $akreditasi->jenjang,
                                $akreditasi->kategori,
                                $akreditasi->nilai,
                                $akreditasi->no_sk,
                                $akreditasi->tahun_sk,
                                optional($akreditasi->tanggal_kadaluarsa)?->format('d F Y'),
                            ])
                        );
                    @endphp

                    <tr x-show="search === '' || '{{ $searchable }}'.includes(search.toLowerCase())">
                        <td x-html="highlight('{{ addslashes($akreditasi->program_studi) }}')"></td>

                        <td align="center">
                            <span x-html="highlight('{{ $akreditasi->status ? 'Aktif' : 'Tidak Aktif' }}')"></span>
                        </td>

                        <td align="center" x-html="highlight('{{ $akreditasi->jenjang }}')"></td>
                        <td align="center" x-html="highlight('{{ $akreditasi->kategori }}')"></td>
                        <td align="center" x-html="highlight('{{ $akreditasi->nilai }}')"></td>
                        <td x-html="highlight('{{ addslashes($akreditasi->no_sk) }}')"></td>
                        <td align="center" x-html="highlight('{{ $akreditasi->tahun_sk }}')"></td>
                        <td>
                            {{ $akreditasi->tanggal_kadaluarsa?->format('d F Y') ?? '-' }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="999" class="table__empty">
                            No content available
                        </td>
                    </tr>
                @endforelse
            </x-slot:body>
        </x-table>
        
    </div>
    
</x-layout.dashboard>