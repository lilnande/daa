<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelatih;

class PelatihSeeder extends Seeder
{
    public function run()
    {
        Pelatih::create([
            'name' => 'John Doe',
            'expertise' => 'Biliar'
        ]);

        Pelatih::create([
            'name' => 'Jane Smith',
            'expertise' => 'Biliar'
        ]);
    }
}
