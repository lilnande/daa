<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelatihan;

class PelatihanSeeder extends Seeder
{
    public function run()
    {
        Pelatihan::create([
            'nama_pelatihan' => 'Biliar Pemula',
            'jadwal' => '2025-01-01',
            'id_pelatih' => 1
        ]);

        Pelatihan::create([
            'nama_pelatihan' => 'Biliar Lanjutan',
            'jadwal' => '2025-01-10',
            'id_pelatih' => 2
        ]);
    }
}
