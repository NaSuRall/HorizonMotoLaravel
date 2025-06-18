<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Product::create([
            'name' => 'Test Product',
            'description' => 'Test Product',
            'price' => 100,
            'quantity' => 10,
            //'category_id' => 1,
            'ref' => "refTestProduct",
            'img' => "imgTestProduct.jpg",
        ]);
    }
}
