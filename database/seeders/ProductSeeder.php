<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop Lenovo',
            'description' => 'Laptop untuk kebutuhan perkuliahan',
            'price' => 8000000,
            'stock' => 10,
        ]);

        Product::create([
            'name' => 'Mouse Logitech',
            'description' => 'Mouse wireless untuk komputer',
            'price' => 250000,
            'stock' => 25,
        ]);

        Product::create([
            'name' => 'Keyboard Mechanical',
            'description' => 'Keyboard untuk kebutuhan pemrograman',
            'price' => 750000,
            'stock' => 15,
        ]);
    }
}
