<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [
            [
                'nama' => 'labtop bambangf',
                'harga' => 31314414,
                'stok' => 100,
                'merk' => 'apple',
                'kode' => 'A0001',
            ],
            [
                'nama' => 'labtop baru',
                'harga' => 33232414,
                'stok' => 100,
                'merk' => 'anroid',
                'kode' => 'A0002',
            ],
            [
                'nama' => 'bambangf',
                'harga' => 14414,
                'stok' => 200,
                'merk' => 'apple',
                'kode' => 'A0003',
            ],
            [
                'nama' => 'labt',
                'harga' => 233242114,
                'stok' => 100,
                'merk' => 'apple',
                'kode' => 'A0004',
            ],
        ];
        Barang::insert($barang);
    }
    //
}
