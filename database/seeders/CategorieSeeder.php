<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       
         $categorie =new categorie;
          $categorie->id=1;
        $categorie->name = 'Profile';
        $categorie->summary = 'This is about profiles and what you can do with it';
        $categorie->save();
    }
}