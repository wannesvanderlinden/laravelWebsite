<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('categories')->insert([
            'id'=>1,
             'name' => 'Profile',
            'summary' => 'This is about profiles and what you can do with it',
            
                'created_at'=>date("Y/m/d"),
                'updated_at'=>date("Y/m/d"),
                
                
        ]);
    }
}