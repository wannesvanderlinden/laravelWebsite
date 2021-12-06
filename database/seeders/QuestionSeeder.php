<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\questions;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
     
         $question =new questions;
          $question->id=1;
        $question->title = 'Can I have admin priveleges?';
        $question->answer = 'Only when a admin promote you.';
        $question->categorie_id = '1';
        
        $question->save();
    }
}