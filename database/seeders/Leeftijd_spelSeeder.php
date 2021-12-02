<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Leeftijd_spelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('leeftijdsgroep_spel')->insert([
            'spel_id'=>1,
             'leeftijdsgroep_id' => 1,
                
        ]);
       
    }
}
