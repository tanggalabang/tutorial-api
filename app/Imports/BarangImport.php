<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;

class BarangImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Barang([
            'nama' => $row['nama'],
            'harga' => $row['harga'],
            'stok' => $row['stok'],
            'merk' => $row['merk'],
            'kode' => $row['kode'],
        ]);
    }

    public function rules(): array
    {
        return [
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'merk' => 'required',
            'kode' => 'required | unique:barangs',
        ];
    }
}
