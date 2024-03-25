<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembayaran::create([
            'invoice_number' => 'INV123',
            'tanggal_pembayaran' => '2024-03-24',
            'nama_pelanggan' => 'John Doe',
            'total' => 125000,
            'jumlah' => 1,
        ]);
    }
}
