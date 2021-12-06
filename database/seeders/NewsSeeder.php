<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    
         $news =new News;
      $news->id =1; 
        $news->title ='Buitenspeeldag';
        $news->content ='Op woensdagnamiddag 21 april roepen we je op om buiten te gaan ravotten tijdens de 14de Buitenspeeldag.';
     
    
        $news->img='buitenspeeldag.jpg';
        $news->save();
    }
}