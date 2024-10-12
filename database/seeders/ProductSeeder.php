<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) { // Seeding 20 fake products
            DB::table('products')->insert([
                'name' => ucfirst($faker->word), // Random product name
                'slug' => Str::slug($faker->word . '-' . $i), // Unique slug based on name and index
                'description' => $faker->sentence, // Random sentence as description
                'price' => $faker->randomFloat(2, 5, 100), // Price between $5 and $100
                'stock' => $faker->numberBetween(10, 500), // Stock between 10 and 500
                'sku' => strtoupper(Str::random(8)), // Random 8-character SKU
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
