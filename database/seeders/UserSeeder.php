<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('users')->insert([
            'id'=>1,
             'name' => 'Felix',
            'username' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
              'name' => 'Felix',
                'birthday' => date("Y/m/d"),
                'aboutMe' => "none",
                'admin'=>true,
                'created_at'=>date("Y/m/d"),
                'updated_at'=>date("Y/m/d"),
                'remember_token'=>null
                
        ]);
    }
}
