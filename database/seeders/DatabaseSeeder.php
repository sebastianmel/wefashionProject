<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(80)->create();
        $this->call(StatesTableSeeder::class);
        $this->call(States2TableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
