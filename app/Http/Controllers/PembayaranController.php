<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


class PembayaranController extends Controller
{
    public function cetakStruk()
    {
        $data = [
            'invoice_number' => 'INV123',
            'tanggal_pembayaran' => '2024-03-24',
            'nama_pelanggan' => 'John Doe',
            'items' => [
                ['nama' => 'Produk A', 'harga' => 50000, 'jumlah' => 2], // Jumlah pembelian Produk A = 2
                ['nama' => 'Produk B', 'harga' => 75000, 'jumlah' => 1],
                // tambahkan item lainnya sesuai kebutuhan
            ],
            'total' => 125000,
        ];

        return View::make('struk_pembayaran', $data);
    }
    public function unduhStruk()
    {
        $data = [
            'invoice_number' => 'INV123',
            'tanggal_pembayaran' => '2024-03-24',
            'nama_pelanggan' => 'John Doe',
            'items' => [
                ['nama' => 'Produk A', 'harga' => 50000, 'jumlah' => 2],
                ['nama' => 'Produk B', 'harga' => 75000, 'jumlah' => 1],
            ],
            'total' => 175000,
        ];

        $pdf = PDF::loadView('struk_pembayaran', $data);
        return $pdf->download('struk_pembayaran.pdf');
    }
}
