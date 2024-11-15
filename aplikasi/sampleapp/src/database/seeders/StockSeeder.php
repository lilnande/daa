<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    public function run()
    {
        Stock::create([
            'product_id' => 1,
            'stock_quantity' => 40,
            'last_updated' => now(),
        ]);

        Stock::create([
            'product_id' => 2,
            'stock_quantity' => 80,
            'last_updated' => now(),
        ]);
    }
}
