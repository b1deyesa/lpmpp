<x-modal width="40em" class="pengelola">
    <x-slot:trigger>
        <x-button class="button__outline"><i class="fa-solid fa-pencil"></i></x-button>
    </x-slot:trigger>
    <x-form wire="update()">
        <div class="form__row">
            <x-input label="Photo" type="image" wire="photo" />
            <div class="form__col">
                <div class="form__row">
                    <x-input label="Nama Lengkap" type="text" wire="nama" />
                    <x-input label="Jabatan" type="text" wire="jabatan" />
                </div>
                <div class="form__row">
                    <x-input label="NIP" type="text" wire="nip" />
                    <x-input label="NIDN" type="text" wire="nidn" />
                </div>
            </div>
        </div>
        <div class="form__row">
            <x-input label="Program Studi" type="text" wire="program_studi" />
            <x-input label="Jurusan" type="text" wire="jurusan" />
            <x-input label="Fakultas" type="text" wire="fakultas" />
        </div>
        <div class="form__row">
            <x-input label="Email" type="email" wire="email" />
            <x-input label="No. Telepon" type="text" wire="no_telp" />
        </div>
        <div class="form__row">
            <x-input label="ID Scopus" type="text" wire="id_scopus" />
            <x-input label="ID Sinta" type="text" wire="id_sinta" />
        </div>
        <x-input label="Tugas" type="editor" wire="tugas" style="height: 5em" wire:ignore />
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>