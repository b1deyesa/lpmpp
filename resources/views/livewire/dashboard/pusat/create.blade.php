<x-modal width="40em" class="pusat">
    <x-slot:trigger>
        <x-button>Add New</x-button>
    </x-slot:trigger>
    <x-form wire="store()">
        <div class="form__row">
            <x-input label="Nama Pusat" type="text" wire="nama_bagian" />
            <x-input label="Singkatan" type="text" wire="singkatan_bagian" width="50%" />
        </div>
        <x-input label="Tugas dan Fungsi" type="editor" wire="tugas" wire:ignore />
        <div class="form__row">
            <x-input label="Email Pusat" type="text" wire="email" />
            <x-input label="No. Telp Pusat" type="text" wire="no_telp" />
        </div>
        <div class="form__row" style="align-items: end">
            <x-input label="Anggota" type="select" wire="selectedPengelola" placeholder="Pilih dan tambah" :options="json_encode($pengelolas)" />
            <x-button wire="add" class="button__outline">Add</x-button>
        </div>
        <div class="selected-table">
            <table>
                @foreach($anggota as $i => $item)
                    <tr wire:key="anggota-{{ $item['pengelola_id'] }}">
                        <td>{{ $item['nama'] }}</td>
                        <td><x-input type="text" wire="anggota.{{ $i }}.jabatan" placeholder="Jabatan" /></td>
                        <td><button type="button" wire:click="remove({{ $i }})">✕</button></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>