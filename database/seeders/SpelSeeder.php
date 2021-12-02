<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('spels')->insert([
            'id'=>1,
             'title' => 'Tikkertje',
             'explenation' => 'Tikkertje of krijgertje is een kinderspel waarin een van de spelers de tikker is (in het jargon van het spel hem is) en alle andere spelers proberen bij hem uit de buurt te blijven. De tikker probeert een van de andere spelers aan te tikken (aanraken met de hand). Als hij daarin slaagt, wordt de aangeraakte persoon de tikker en is de tikker vrij en moet proberen te ontkomen samen met de andere spelers.',
              'created_at'=>date("Y/m/d"),
                'updated_at'=>date("Y/m/d"),  
        ]);
    }
}
