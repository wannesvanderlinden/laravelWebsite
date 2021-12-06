<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    
        $user =new User;
        $user->id = 1;
        $user->name = 'Felix';
        $user->username = 'admin';
        $user->email = 'admin@ehb.be';
        $user->password =  Hash::make('Password!321');
        $user->birthday =  date("Y/m/d");
        $user->aboutMe =  "none";
        $user->admin = true;
        $user->save();
    }
}
