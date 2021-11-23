<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('contacts')->insert([
            'id'=>1,
             'name' => 'Wannes',
            'email' => 'wannestest@gmail.com',
            'message' => 'Is this site trustable and can I get admin privelege',
                'created_at'=>date("Y/m/d"),
                'updated_at'=>date("Y/m/d"),
                
                
        ]);
    }
}