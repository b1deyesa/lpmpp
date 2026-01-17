<x-modal class="akreditasi">
    <x-slot:trigger>
        <x-button>Import Data</x-button>
    </x-slot:trigger>
    <x-form wire="store()">
        <x-input label="Import File" type="file" wire="file" />
        <div class="form__term">
            <strong>Catatan Import</strong>
            <p>Unggah file <b>Excel / CSV</b> dengan kolom berikut:</p>
            <ul class="import-columns">
                <li>program_studi</li>
                <li>jenjang</li>
                <li>nilai</li>
                <li>no_sk</li>
                <li>tahun_sk</li>
                <li>tahun_kadaluarsa</li>
                <li>status</li>
                <li>kategori</li>
            </ul>
            <p>Dengan syarat dan aturan sebagai berikut:</p>                
            <ol>
                <li><b>program_studi</b>, <b>jenjang</b> wajib diisi</li>
                <li>
                    <b>nilai</b>: Unggul / A / Baik Sekali / B / Baik /
                    Terakreditasi Sementara / Belum Terakreditasi
                    <br><small>(kosong → Belum Terakreditasi)</small>
                </li>
                <li>Kolom lain bersifat opsional</li>
                <li><b>status</b>: Aktif / Tidak Aktif (default aktif)</li>
            </ol>
        
            <small>Baris pertama harus berisi header kolom.</small>
        </div>
        <x-slot:bottom>
            <x-button type="button" class="button__outline" onclick="window.location.reload()">Cancel</x-button>
            <x-button type="submit">Import</x-button>
        </x-slot:bottom>
    </x-form>
</x-modal>