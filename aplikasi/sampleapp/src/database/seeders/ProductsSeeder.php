<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Sample Product 1',
            'code' => 'PRD001',
            'price' => 100.00,
            'stock' => 50,
            'description' => 'This is a sample product.',
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'code' => 'PRD002',
            'price' => 200.00,
            'stock' => 100,
            'description' => 'This is another sample product.',
        ]);
    }
}
