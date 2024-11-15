<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionsSeeder extends Seeder
{
    public function run()
    {
        Transaction::create([
            'product_id' => 1,
            'quantity' => 10,
            'total_price' => 1000.00,
            'transaction_date' => now(),
        ]);

        Transaction::create([
            'product_id' => 2,
            'quantity' => 20,
            'total_price' => 4000.00,
            'transaction_date' => now(),
        ]);
    }
}
