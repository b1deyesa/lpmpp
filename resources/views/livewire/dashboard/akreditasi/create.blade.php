<x-modal width="50em" class="akreditasi">
    <x-slot:trigger>
        <x-button>Add New</x-button>
    </x-slot:trigger>
    <x-form wire="store()">
        <div class="form__row">
            <x-input label="Nama Program Studi" type="text" name="program_studi" />
            <x-input label="Nomor SK" type="text" name="no_sk" />
        </div>
        <div class="form__row">
            <x-input label="Tahun SK" type="text" name="tahun_sk" />
            <x-input label="Tanggal Kadaluarsa" type="text" name="tanggal_kadaluarsa" />
        </div>
        <x-input label="Akreditasi" type="radio" name="nilai" :options="json_encode(['Unggul', 'A', 'Baik Sekali', 'B', 'Baik', 'Terakreditasi Sementara', 'Belum Terakreditasi'])" />
        <x-input label="Jenjang" type="radio" name="jenjang" :options="json_encode(['Sarjana', 'Magister', 'Doktor', 'Profesi'])" />
        <x-input label="Kategori" type="radio" name="kategori" :options="json_encode(['Prodi Baru', 'Prodi Lama'])" />
        <x-input label="Status" type="radio" name="status" :options="json_encode(['Aktif', 'Tidak Aktif'])" />
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Save</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>