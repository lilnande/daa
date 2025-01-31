<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evaluasi;

class EvaluasiSeeder extends Seeder
{
    public function run()
    {
        Evaluasi::create([
            'id_atlet' => 1,
            'nilai' => 85,
            'feedback' => 'Bagus, terus tingkatkan!'
        ]);

        Evaluasi::create([
            'id_atlet' => 2,
            'nilai' => 75,
            'feedback' => 'Perlu lebih fokus pada teknik.'
        ]);
    }
}
