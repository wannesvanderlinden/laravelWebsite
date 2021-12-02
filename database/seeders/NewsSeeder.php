<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('news')->insert([
            'id'=>1,
             'title' => 'Buitenspeeldag',
            'content' => 'Op woensdagnamiddag 21 april roepen we je op om buiten te gaan ravotten tijdens de 14de Buitenspeeldag.',
            'img' => 'buitenspeeldag.jpg',
                'created_at'=>date("Y/m/d"),
                'updated_at'=>date("Y/m/d"),
                
                
        ]);
    }
}