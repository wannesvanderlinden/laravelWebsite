<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeeftijdsgroepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('leeftijdsgroeps')->insert([
            'id'=>1,
             'name' => '+13',
                
        ]);
         DB::table('leeftijdsgroeps')->insert([
            'id'=>2,
             'name' => 'Kleuters',
                
        ]);
         DB::table('leeftijdsgroeps')->insert([
            'id'=>3,
             'name' => 'Groot Plein',
                
        ]);
    }
}
