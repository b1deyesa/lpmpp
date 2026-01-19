<x-layout.dashboard class="peraturan-perundang-undangan">

    {{-- Title --}}
    <h1 class="dashboard__title">Peraturan Perundang-Undangan</h1>

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
                <x-form action="{{ route('dashboard.peraturan-perundang-undangan.truncate') }}" method="POST">
                    <x-slot:bottom>
                        <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
                        <x-button type="submit">Reset</x-button>
                    </x-slot:bottom>
                </x-form>
            </x-modal>
            @livewire('dashboard.peraturan-perundang-undangan.create')
        </div>

        {{-- Table --}}
        <x-table>
            <x-slot:head>
                <th>Judul</th>
                <th>File</th>
            </x-slot:head>

            <x-slot:body>
                @forelse ($peraturan_perundang_undangans ?? [] as $peraturanPerundangUndangan)
                    @php
                        $searchable = strtolower(
                            implode(' ', [
                                $peraturanPerundangUndangan->title,
                                $peraturanPerundangUndangan->file
                            ])
                        );
                    @endphp

                    <tr x-show="search === '' || '{{ $searchable }}'.includes(search.toLowerCase())">
                        <td x-html="highlight('{{ addslashes($peraturanPerundangUndangan->title) }}')"></td>
                        <td width="1%">
                            <div class="table__action">
                                <x-button type="link" href="{{ route('dashboard.peraturan-perundang-undangan.download', compact('peraturanPerundangUndangan')) }}" class="button__info"><i class="fa-solid fa-download"></i>Download</x-button>
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