<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Athlete;

class AthleteSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data dummy
        Athlete::create([
            'name' => 'John Doe',
            'age' => 25,
            'contact' => '1234567890',
            'sport' => 'Biliar',
        ]);

        Athlete::create([
            'name' => 'Jane Smith',
            'age' => 28,
            'contact' => '0987654321',
            'sport' => 'Biliar',
        ]);
    }
}
