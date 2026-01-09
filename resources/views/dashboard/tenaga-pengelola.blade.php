<x-layout.dashboard-form title="Tenaga Pengelola LPMPP" class="tenaga-pengelola">
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.tenaga-pengelola.store') }}" method="POST">
        <div class="form__row">
            <x-input label="Nama Lengkap" type="text" name="nama" />
            <x-input label="Jabatan" type="text" name="jabatan" />
        </div>
        <div class="form__row">
            <x-input label="NIP" type="text" name="nip" />
            <x-input label="NIDN" type="text" name="nidn" />    
        </div>
        <div class="form__row">
            <x-input label="Program Studi" type="text" name="program_studi" />
            <x-input label="Jurusan" type="text" name="jurusan" />
            <x-input label="Fakultas" type="text" name="fakultas" />    
        </div>
        <div class="form__row">
            <x-input label="Email" type="email" name="email" />
            <x-input label="No. Telepon" type="text" name="no_telp" />    
        </div>
        <div class="form__row">
            <x-input label="ID Scopus" type="text" name="id_scopus" />
            <x-input label="ID Sinta" type="text" name="id_sinta" />    
        </div>
        <x-button type="submit">Save</x-button>
    </x-form>
    
    {{-- Table --}}
    <div class="dashboard__section">
        <div class="section__header">
            <h3 class="header__title">All Tenaga Pengelola</h3>
            <hr class="header__line">
        </div>
        <x-table>
            <x-slot:head>
                <th>Nama Lengkap</th>
                <th>Jabatan</th>
                <th>NIP</th>
                <th>NIDN</th>
                <th>Email</th>
                <th>No. Telp</th>
            </x-slot:head>
            <x-slot:body>
                @forelse ($tenaga_pengelolas as $tenaga_pengelola)
                    <tr>
                        <td>{{ $tenaga_pengelola->nama }}</td>
                        <td>{{ $tenaga_pengelola->jabatan }}</td>
                        <td align="center">{{ $tenaga_pengelola->nip }}</td>
                        <td align="center">{{ $tenaga_pengelola->nidn }}</td>
                        <td>{{ $tenaga_pengelola->email }}</td>
                        <td align="center">{{ $tenaga_pengelola->no_telp }}</td>
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