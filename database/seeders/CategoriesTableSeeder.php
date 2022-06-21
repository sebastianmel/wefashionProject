<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Categories stats of products
        DB::table('categories')->insert([
            ["libelle"=>"Femme"],
            ["libelle"=>"Homme"],
        ]);
    }
    
}
