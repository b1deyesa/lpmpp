<x-layout.dashboard-form title="Pusat LPMPP" class="pusat">
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.pusat.store') }}" method="POST">
        <div class="form__row">
            <x-input label="Nama Bagian" type="text" name="nama_bagian" />
            <x-input label="Kepala Pusat" type="select-search" name="tenaga_pengelola_id" :options="$tenaga_pengelolas" />
        </div>
        <x-input label="Tugas dan Fungsi" type="editor" name="tugas" />
        <x-button type="submit">Save</x-button>
    </x-form>
    
    {{-- Table --}}
    <div class="dashboard__section">
        <div class="section__header">
            <h3 class="header__title">All Pusat</h3>
            <hr class="header__line">
        </div>
        <x-table>
            <x-slot:head>
                <th>Nama Bagian</th>
                <th>Kepala Pusat</th>
            </x-slot:head>
            <x-slot:body>
                @forelse ($pusats as $pusat)
                    <tr>
                        <td>{{ $pusat->nama_bagian }}</td>
                        <td>{{ $pusat->tenagaPengelola->nama }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="table__empty" colspan="999">No content available</td>
                    </tr>
                @endforelse
            </x-slot:body>
        </x-table>
    </div>
    
</x-layout.dashboard-form>