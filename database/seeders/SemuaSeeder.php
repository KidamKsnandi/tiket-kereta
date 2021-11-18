<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Kelas;
use App\Models\Kereta;
use App\Models\Pembeli;
use App\Models\Tiket;
use Illuminate\Database\Seeder;

class SemuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas1 = Kelas::create(['nama_kelas' => 'Ekonomi', 'harga' => 200000]);
        $kelas2 = Kelas::create(['nama_kelas' => 'Bisnis', 'harga' => 300000]);
        $kelas3 = Kelas::create(['nama_kelas' => 'Eksekutif', 'harga' => 400000]);

        $pembeli1 = Pembeli::create(['nama_pembeli' => 'Kidam Kusnandi',
            'alamat' => 'Citamiang Kidul', 'no_telp' => '083807464449', 'id_kelas' => $kelas1->id]);
        $pembeli2 = Pembeli::create(['nama_pembeli' => 'Akbar Ginanjar',
            'alamat' => 'Cibiuk', 'no_telp' => '08976352687', 'id_kelas' => $kelas3->id]);

        $kereta1 = Kereta::create(['nama_kereta' => 'Malabar', 'jm_berangkat' => '08:00',
            'jm_tiba' => '20:00', 'harga' => 3000000]);
        $kereta2 = Kereta::create(['nama_kereta' => 'Ranggajati', 'jm_berangkat' => '09:00',
            'jm_tiba' => '21:00', 'harga' => 3500000]);
        $kereta3 = Kereta::create(['nama_kereta' => 'Gumarang', 'jm_berangkat' => '10:00',
            'jm_tiba' => '22:00', 'harga' => 3700000]);
        $kereta4 = Kereta::create(['nama_kereta' => 'Ciremai', 'jm_berangkat' => '11:00',
            'jm_tiba' => '22:00', 'harga' => 4060000]);
        $kereta5 = Kereta::create(['nama_kereta' => 'Sancaka Utara', 'jm_berangkat' => '12:00',
            'jm_tiba' => '23:00', 'harga' => 2300000]);

        $tiket1 = Tiket::create(['kode_booking' => 'h28y7',
            'id_pembeli' => $pembeli1->id, 'id_kereta' => $kereta1->id,
             'jumlah' => 2, 'dari' => 'Bandung', 'ke' => 'Jakarta']);
        $tiket2 = Tiket::create(['kode_booking' => 'b2by7',
            'id_pembeli' => $pembeli2->id, 'id_kereta' => $kereta4->id,
             'jumlah' => 4, 'dari' => 'Jakarta', 'ke' => 'Bandung']);

        $booking1 = Booking::create(['id_tiket' => $tiket2->id,
             'tgl_berangkat' => '2021-06-12', 'tgl_pemesanan' => '2021-06-11']);
        $booking2 = Booking::create(['id_tiket' => $tiket1->id,
             'tgl_berangkat' => '2021-07-12', 'tgl_pemesanan' => '2021-07-11']);
    }
}
