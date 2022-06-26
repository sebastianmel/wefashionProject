<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class States2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo 'totot';
        //Stats of products
        DB::table('states2')->insert([
            ["libelle"=>"nomal Price"],
            ["libelle"=>"on sale"],
        ]);
    }
}
