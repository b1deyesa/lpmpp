<?php

namespace App\Imports;

use App\Models\Akreditasi;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class AkreditasiImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

            if (empty($row['program_studi']) || empty($row['jenjang'])) {
                continue;
            }
            
            Akreditasi::create([
                'program_studi'      => $row['program_studi'],
                'jenjang'            => $row['jenjang'],
                'nilai'              => $row['nilai'] ?? 'Belum Terakreditasi',
                'no_sk'              => $row['no_sk'] ?? null,
                'tahun_sk'           => $row['tahun_sk'] ?? null,
                'tanggal_kadaluarsa' => $this->parseDate($row['tanggal_kadaluarsa'] ?? null),
                'status'             => ($row['status'] ?? '') === 'Aktif',
                'kategori'           => $row['kategori'] ?? null,
            ]);
        }
    }

    private function parseDate($value)
    {
        if (empty($value)) {
            return null;
        }

        // 1. Excel serial date (angka)
        if (is_numeric($value)) {
            return \Carbon\Carbon::instance(
                \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value)
            )->format('Y-m-d');
        }

        $value = trim($value);

        // 2. Format D/M/YY atau DD/MM/YY (contoh: 11/3/24)
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{2}$/', $value)) {
            return \Carbon\Carbon::createFromFormat('d/m/y', $value)
                ->format('Y-m-d');
        }

        // 3. Format D/M/YYYY atau DD/MM/YYYY
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $value)) {
            return \Carbon\Carbon::createFromFormat('d/m/Y', $value)
                ->format('Y-m-d');
        }

        // 4. Fallback (ISO, teks, dll)
        try {
            return \Carbon\Carbon::parse($value)->format('Y-m-d');
        } catch (\Exception $e) {
            return null;
        }
    }
}