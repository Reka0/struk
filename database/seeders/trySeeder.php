<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class trySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'invoice_number' => 'INV123',
            'tanggal_pembayaran' => '2024-03-24',
            'nama_pelanggan' => 'John Doe',
            'items' => [
                ['nama' => 'Produk A', 'harga' => 50000],
                ['nama' => 'Produk B', 'harga' => 75000],
                // tambahkan item lainnya sesuai kebutuhan
            ],
            'total' => 125000,
        ];
    }
}
