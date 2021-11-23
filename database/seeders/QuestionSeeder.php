<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('questions')->insert([
            'id'=>1,
             'title' => 'Can I have admin priveleges?',
            'answer' => 'Only when a admin promote you.',
            'categorie_id' => '1',
                'created_at'=>date("Y/m/d"),
                'updated_at'=>date("Y/m/d"),
                
                
        ]);
    }
}