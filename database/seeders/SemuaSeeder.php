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
        $kelas1 = Kelas::create(['nama_kelas' => 'Ekonomi']);
        $kelas2 = Kelas::create(['nama_kelas' => 'Bisnis']);
        $kelas3 = Kelas::create(['nama_kelas' => 'Eksekutif']);

        $kereta1 = Kereta::create(['nama_kereta' => 'Malabar', 'jm_berangkat' => '08:00',
            'jm_tiba' => '16:00']);
        $kereta2 = Kereta::create(['nama_kereta' => 'Ranggajati', 'jm_berangkat' => '09:00',
            'jm_tiba' => '17:00']);
        $kereta3 = Kereta::create(['nama_kereta' => 'Gumarang', 'jm_berangkat' => '10:00',
            'jm_tiba' => '18:00']);
        $kereta4 = Kereta::create(['nama_kereta' => 'Ciremai', 'jm_berangkat' => '11:00',
            'jm_tiba' => '19:00']);
        $kereta5 = Kereta::create(['nama_kereta' => 'Sancaka Utara', 'jm_berangkat' => '12:00',
            'jm_tiba' => '20:00']);

    }
}
